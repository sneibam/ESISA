//
//  EventsViewController.swift
//  MyESISA5
//
//  Created by Mohamed Sneiba on 6/28/18.
//  Copyright © 2018 com.sneibamohamed. All rights reserved.
//

import UIKit

class EventsViewController: UIViewController, UITableViewDataSource, UITableViewDelegate {

    
    @IBOutlet weak var scrollView: UIScrollView!
    @IBOutlet weak var tableView: UITableView!
    private var previousButton: CircleButton!
    private var nextButton: CircleButton!
    
    @IBOutlet weak var activityIndicator: UIActivityIndicatorView!
    var data : [Data] = [Data]()
    
    
    private let images : [UIImage] = [
        UIImage(named: "graduate-student-avatar")!,
        UIImage(named: "presentation")!,
        UIImage(named: "confetti")!
    ]
    
    private let segues: [String] = [
        "time",
        "confESISA",
        "fetes",
    ]
    
    private let labels : [String] = [
        "Événements Étudiants",
        "Évenements de Recherche à l'ESISA",
        "Fête de fin d'année"        
    ]
    
    override func viewDidLoad() {
        super.viewDidLoad()
        for aData in data {
            if let image = UIImage(data: aData) {
                scrollView.auk.show(image: image)
            }
        }
        
        self.navigationItem.title = "Événements"
        self.tableView.dataSource = self
        self.tableView.delegate = self
        //self.previousButton = CircleButton(frame: CGRect(x: 0, y: (self.scrollView.bounds.height/3), width: 10, height: 10))
        
        //self.scrollView.addSubview(previousButton)
    }
    
    override func viewWillAppear(_ animated: Bool) {
        self.activityIndicator.stopAnimating()
        self.activityIndicator.isHidden = true
    }
    
    override func viewDidAppear(_ animated: Bool) {
        super.viewDidAppear(animated)
        scrollView.auk.startAutoScroll(delaySeconds: 3.0)
    }

    func numberOfSections(in tableView: UITableView) -> Int {
        return 1
    }
    
    func tableView(_ tableView: UITableView, numberOfRowsInSection section: Int) -> Int {
        return labels.count
    }
    
    
    func tableView(_ tableView: UITableView, cellForRowAt indexPath: IndexPath) -> UITableViewCell {
        let cell = tableView.dequeueReusableCell(withIdentifier: "eveCell", for: indexPath)
        
        //cell.cellImageView.image =  images[indexPath.row]
        cell.textLabel?.text = labels[indexPath.row]
        cell.accessoryType = .disclosureIndicator
        
        return cell
    }
    
    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
    }
    
    func tableView(_ tableView: UITableView, didSelectRowAt indexPath: IndexPath) {
        let storyBoardId = segues[indexPath.row]
        
        if storyBoardId == "confESISA" {
            let vc = storyboard?.instantiateViewController(withIdentifier: storyBoardId) as! ConferenceESISAViewController
            
            self.activityIndicator.startAnimating()
            self.activityIndicator.isHidden = false
            vc.conferences =
                Tasks.readFromFileConference(path: "confESISA")
            self.activityIndicator.stopAnimating()
            self.activityIndicator.isHidden = true
            self.navigationController?.pushViewController(vc, animated: true)
        } else if storyBoardId == "fetes" {
            let vc = storyboard?.instantiateViewController(withIdentifier: storyBoardId) as! FeteTableViewController
            self.activityIndicator.startAnimating()
            self.activityIndicator.isHidden = false
            vc.data = Tasks.readFromFileFete()
            self.activityIndicator.stopAnimating()
            self.activityIndicator.isHidden = true
            self.navigationController?.pushViewController(vc, animated: true)
        }
        else {
            let vc = storyboard?.instantiateViewController(withIdentifier: storyBoardId)
            self.navigationController?.pushViewController(vc!, animated: true)
        }
    }
    
    
    

    /*
    // MARK: - Navigation

    // In a storyboard-based application, you will often want to do a little preparation before navigation
    override func prepare(for segue: UIStoryboardSegue, sender: Any?) {
        // Get the new view controller using segue.destinationViewController.
        // Pass the selected object to the new view controller.
    }
    */

}

class CircleButton: UIButton {
    override func draw(_ rect: CGRect) {
        let path = UIBezierPath()
        path.move(to: .zero)
        path.addLine(to: CGPoint(x: 10, y: 10))
        let radius: Double  = 100
        for i in stride(from: 0, to: 100.0, by: 1) {
            
            let radians = i * Double.pi / 180
            let x = radius * cos(radians)
            let y = radius * sin(radians)
            
            path.addLine(to: CGPoint(x: x, y: y))
        }
        path.stroke()
        
    }
}
