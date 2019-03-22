//
//  ConferenceViewController.swift
//  MyESISA5
//
//  Created by Mohamed Sneiba on 7/2/18.
//  Copyright © 2018 com.sneibamohamed. All rights reserved.
//

import UIKit

class ConferenceViewController: UIViewController {

    var conference: Conference!
    
    @IBOutlet weak var scollView: UIScrollView!
    @IBOutlet weak var dateLabel: UILabel!
    @IBOutlet weak var textView: UITextView!
    
    @IBAction func goToLink(_ sender: UIButton) {
        let urlString = conference.link
        if let url = URL(string: urlString!) {
            UIApplication.shared.open(url, options: [:], completionHandler: nil)
        }
    }
    override func viewDidLoad() {
        super.viewDidLoad()
        self.navigationItem.title = conference.title
        self.dateLabel.text = "Date : " + DateFormater.toString(from: DateFormater.toDate(from: conference.date))
        self.textView.text = conference.content
        for aData in conference.imagesData {
            if let image = UIImage(data: aData) {
                scollView.auk.show(image: image)
            }
        }
        
        // Do any additional setup after loading the view.
    }
    override func viewDidAppear(_ animated: Bool) {
        scollView.auk.startAutoScroll(delaySeconds: 5.0)
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
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
