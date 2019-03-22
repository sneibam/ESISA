//
//  ParentViewController.swift
//  MyESISA5
//
//  Created by HARCHLI Chaymae on 12/06/2018.
//  Copyright © 2018 HARCHLI Chaymae. All rights reserved.
//

import UIKit

class ParentViewController: UIViewController {

    @IBOutlet weak var loginTextField: UITextField!
    @IBOutlet weak var passwordTextField: UITextField!
    override func viewDidLoad() {
        super.viewDidLoad()
//authentificate(login: "HAMOUD", password: "722253")
        // Do any additional setup after loading the view.
        
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
   
    @IBAction func connect(_ sender: Any) {
        loginTextField.resignFirstResponder()
        passwordTextField.resignFirstResponder()
        authentificate(login: loginTextField.text!, password: passwordTextField.text!)
    }
    func authentificate(login : String!, password : String!){
        var e : Etudiant! = Etudiant()
        //let urlString : String = "http://176.31.53.2/api/authentication/" + login + "/" + password
        let urlString = "http://192.168.43.180:8888/public/api/authentication/" + login + "/" + password
        debugPrint(urlString)
        
        guard let url = URL(string : urlString) else {
            debugPrint("Error : cannot connect to URL");
            return
        }
        
        let urlRequest = URLRequest(url : url)
        let urlSession = URLSession.shared
        let task = urlSession.dataTask(with: urlRequest) { (data, response, error) in
            guard error == nil else {
                debugPrint("Error !!!" + error.debugDescription)
                return
            }
            
            guard let responseData = data else {
                debugPrint("No data received")
                return
            }
            do {
                //let s = String(data : responseData, encoding : String.Encoding.utf8)
                //debugPrint(s!)
                guard let jsonObject = try JSONSerialization.jsonObject(with: responseData, options: []) as? [String:Any] else {
                    //debugPrint("Error trying to convert data to JSON")
                    DispatchQueue.main.async {
                        let alert : UIAlertController = UIAlertController(title: "Erreur" , message: "les identifiants sont incorrects", preferredStyle: UIAlertControllerStyle.alert)
                        alert.addAction(UIAlertAction(title: "OK", style: .default, handler: { (action) in
                            switch action.style {
                            case .default : debugPrint("DEFAULT")
                            case .cancel : debugPrint("CANCEL")
                            case .destructive : debugPrint("DESTRUCTIVE")
                            }
                        }))
                        self.present(alert, animated: true, completion: nil)
                    }
                    return
                }
                
                let data = jsonObject["etudiant"] as? [String : Any]
                
                guard data != nil else {
                    // Notifier l'utilisateur que les données sont erronees
                    DispatchQueue.main.async {
                        let alert : UIAlertController = UIAlertController(title: "Erreur" , message: "les identifiants sont incorrects", preferredStyle: UIAlertControllerStyle.alert)
                        alert.addAction(UIAlertAction(title: "OK", style: .default, handler: { (action) in
                            switch action.style {
                            case .default : debugPrint("DEFAULT")
                            case .cancel : debugPrint("CANCEL")
                            case .destructive : debugPrint("DESTRUCTIVE")
                            }
                        }))
                        
                        
                        
                        
                        self.present(alert, animated: true, completion: nil)
                    }

                    return
                }
                e = self.convertDataJSON(json: data!)
                debugPrint(e.CIN!)
                
                DispatchQueue.main.async {
                    let alert : UIAlertController = UIAlertController(title: "Connection Reussite" , message: "", preferredStyle: UIAlertControllerStyle.alert)
                    alert.addAction(UIAlertAction(title: "OK", style: UIAlertActionStyle.default, handler: { (action) in
                        switch action.style {
                        case .default : debugPrint("DEFAULT")
                        case .cancel : debugPrint("CANCEL")
                        case .destructive : debugPrint("DESTRUCTIVE")
                        }
                    }))
                    
                    
                    
                    
                    self.present(alert, animated: true, completion: nil)
                }
            } catch {
                print("error trying to convert data to JSON")
                DispatchQueue.main.async {
                    let alert : UIAlertController = UIAlertController(title: "Erreur" , message: "les identifiants sont incorrects", preferredStyle: UIAlertControllerStyle.alert)
                    alert.addAction(UIAlertAction(title: "OK", style: .default, handler: { (action) in
                        switch action.style {
                        case .default : debugPrint("DEFAULT")
                        case .cancel : debugPrint("CANCEL")
                        case .destructive : debugPrint("DESTRUCTIVE")
                        }
                    }))
                    self.present(alert, animated: true, completion: nil)
                }
                return
            }
        }
        task.resume()
    }

   
    

    /*
    // MARK: - Navigation

    // In a storyboard-based application, you will often want to do a little preparation before navigation
    override func prepare(for segue: UIStoryboardSegue, sender: Any?) {
        // Get the new view controller using segue.destinationViewController.
        // Pass the selected object to the new view controller.
    }
    */
    
    func convertDataJSON(json data : [String : Any]) -> Etudiant {
        let e = Etudiant()
        
        e.id = data["id"] as! Int
        e.nom = data["Nom"] as! String
        e.prenom = data["Prenom"] as! String
        e.lieuNaissance = data["LieuNaissance"] as! String
        e.CIN = data["CIN"] as! String
        e.numInscription = data["NumInscription"] as! String
        e.adresse = data["Adresse"] as! String
        e.teldom = data["teldom"] as! String
        e.tel = data["tel"] as! String
        e.telpere = data["telpere"] as! String
        e.telmere = data["telmere"] as! String
        e.an = data["an"] as! Int
        e.mn = data["mn"] as! Int
        e.jn = data["jn"] as! Int
        e.ai = data["ai"] as! Int
        e.ji = data["ji"] as! Int
        e.mi = data["mi"] as! Int
        
        return e
    }

}
