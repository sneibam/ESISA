//
//  ConferenceESISAViewController.swift
//  MyESISA5
//
//  Created by Mohamed Sneiba on 7/1/18.
//  Copyright © 2018 com.sneibamohamed. All rights reserved.
//

import UIKit

class ConferenceESISAViewController: UIViewController, UITableViewDataSource, UITableViewDelegate {

    @IBOutlet weak var conferencesTableView: UITableView!
    
    var conferences : [Conference]!
    
    override func viewDidLoad() {
        super.viewDidLoad()
        conferencesTableView.dataSource = self
        conferencesTableView.delegate = self
        // Do any additional setup after loading the view.
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    func numberOfSections(in tableView: UITableView) -> Int {
        return 1
    }
    
    func tableView(_ tableView: UITableView, numberOfRowsInSection section: Int) -> Int {
        return conferences.count
    }
    
    func tableView(_ tableView: UITableView, cellForRowAt indexPath: IndexPath) -> UITableViewCell {
        let cell = tableView.dequeueReusableCell(withIdentifier: "confCell", for: indexPath) 
        
        cell.textLabel?.text = conferences[indexPath.row].title
        cell.textLabel?.textColor = UIColor.white
        cell.accessoryType = .disclosureIndicator
        
        return cell
    }

    func tableView(_ tableView: UITableView, didSelectRowAt indexPath: IndexPath) {
        let conference = conferences[indexPath.row]
        let vc = storyboard?.instantiateViewController(withIdentifier: "conf") as! ConferenceViewController
        vc.conference = conference
        self.navigationController?.pushViewController(vc, animated: true)
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
