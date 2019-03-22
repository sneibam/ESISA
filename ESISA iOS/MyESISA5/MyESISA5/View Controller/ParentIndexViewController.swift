//
//  ParentIndexViewController.swift
//  MyESISA5
//
//  Created by Mohamed Sneiba on 6/16/18.
//  Copyright © 2018 HARCHLI Chaymae. All rights reserved.
//

import UIKit

class ParentIndexViewController: UIViewController {
    
    @IBOutlet weak var activityIndicator: UIActivityIndicatorView!
    
    var etudiant : Etudiant!
    
    @IBOutlet weak var welcomeLabel: UILabel!
    @IBOutlet weak var afficherAbsencesButton: UIButton!
    
    
    override func viewWillLayoutSubviews() {
        
        afficherAbsencesButton.layer.borderWidth=2.0
        afficherAbsencesButton.layer.cornerRadius = 3.0
        afficherAbsencesButton.layer.borderColor = UIColor.lightGray.cgColor;
        
        
    }
    
    override func viewDidLoad() {
        super.viewDidLoad()

        if let etudiantData = UserDefaults.standard.value(forKey: "etudiant") as? NSData {
            self.etudiant = NSKeyedUnarchiver.unarchiveObject(with: etudiantData as Data) as! Etudiant
        }
        
        welcomeLabel.text = "Bienvenue \n" + etudiant.nom.uppercased() + " " + etudiant.prenom
        
        let timer = Timer.scheduledTimer(withTimeInterval: 10.0, repeats: true) { (timer) in
            DispatchQueue.global(qos: .background).async {
                _ = Tasks.checkAbsences()
            }
        }
        timer.fire()
        
        // Do any additional setup after loading the view.
    }
    
    override func viewWillAppear(_ animated: Bool) {
        activityIndicator.isHidden = true
        self.navigationItem.hidesBackButton = true
        self.navigationController?.navigationBar.isHidden = true
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    @IBAction func showAbsences(_ sender: Any) {
        activityIndicator.startAnimating()
        activityIndicator.isHidden = false
        if (InternetAvailability.isInternetAvailable()) {
            let urlString = HostManager.getURL() + "absences/" + String(self.etudiant.id)
            debugPrint(urlString)
            let session = URLSession.shared
            if let url = URL(string: urlString) {
                let task = session.dataTask(with: url) { (data, response, error) in
                    guard error == nil else {
                        debugPrint("Error !!!" + error.debugDescription)
                        DispatchQueue.main.async {
                            self.stopAnimating()
                        }
                        return
                    }
                    
                    guard let responseData = data else {
                        debugPrint("No data received")
                        DispatchQueue.main.async {
                            self.stopAnimating()
                        }
                        return
                    }
                    do {
                        //let s = String(data : responseData, encoding : String.Encoding.utf8)
                        //debugPrint(s!)
                        guard let jsonObject = try JSONSerialization.jsonObject(with: responseData, options: []) as? [[String:Any]] else {
                            debugPrint("Error trying to convert data to JSON")
                            self.errorAlert()
                            return
                        }
                        
                        var data : [Absence] = [Absence]()
                        for absence in jsonObject {
                            data.append(self.convertDataFromJSON(data: absence))
                        }
                        
//                        DispatchQueue.global(qos: .background).async {
//                            Tasks.saveToFile(absences: data)
//                        }
                        
                        data = data.sorted(by: {$0.date >  $1.date})
                        
                        DispatchQueue.main.async {
                            self.stopAnimating()
                            self.segueToAbsencesVC(with: data)
                        }
                        
                    } catch {
                        print("error trying to convert data to JSON")
                        self.self.errorAlert()
                        return
                    }
                }
                task.resume()
            } else {
                print("Wrong URL")
                errorAlert()
                return
            }
        } else {
            print("INTERNET NOT AVAILABLE")
            DispatchQueue.global(qos: .userInitiated).async {
                
                let absences = Tasks.readFromFileAbsences().sorted(by: {$0.date > $1.date})
                
                DispatchQueue.main.async {
                    self.stopAnimating()
                    self.segueToAbsencesVC(with: absences)
                }
                
            }
        }
    }
    
    private func segueToAbsencesVC(with data : [Absence]) {
        let viewController = self.storyboard?.instantiateViewController(withIdentifier: "absencesVC") as! AbsencesTableViewController
        viewController.data = data
        self.navigationController?.pushViewController(viewController, animated: true)
        
    }
    
    private func errorAlert() {
        DispatchQueue.main.async {
            let alert : UIAlertController = UIAlertController(title: "Erreur lors du chargement des données" , message: "Erreur", preferredStyle: UIAlertControllerStyle.alert)
            alert.addAction(UIAlertAction(title: "OK", style: .default, handler: { (action) in
                switch action.style {
                case .default : debugPrint("DEFAULT")
                case .cancel:
                    debugPrint("CANCEL")
                case .destructive:
                    debugPrint("DESTRUCTIVE")
                }
            }))
            self.stopAnimating()
            self.present(alert, animated: true, completion: nil)
        }
    }
    
    private func stopAnimating(){
        self.activityIndicator.stopAnimating()
        self.activityIndicator.isHidden = true
    }
    
  
    private func convertDataFromJSON(data : [String:Any]) -> Absence{
        let a = Absence()
        
        a.id = data["id"] as! Int
        a.date = data["date"] as! String
        a.seance = data["seance"] as! String
        a.matiere = data["matiere"] as! String
        a.appel = data["appel"] as! String
        a.motif = data["motif"] as! String
        a.controle = data["controle"] as! String
        a.ide = self.etudiant.id
        return a
    }
    
    
    
    // MARK: - Navigation

    // In a storyboard-based application, you will often want to do a little preparation before navigation
    override func prepare(for segue: UIStoryboardSegue, sender: Any?) {
        // Get the new view controller using segue.destinationViewController.
        // Pass the selected object to the new view controller.
        let backItem = UIBarButtonItem()
        backItem.title = "Retour"
        segue.destination.navigationItem.backBarButtonItem = backItem
    }
 

}
