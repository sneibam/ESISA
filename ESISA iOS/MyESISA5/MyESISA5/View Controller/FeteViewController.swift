//
//  FeteViewController.swift
//  MyESISA5
//
//  Created by Mohamed Sneiba on 7/3/18.
//  Copyright © 2018 com.sneibamohamed. All rights reserved.
//

import UIKit

class FeteViewController: UIViewController {

    @IBOutlet weak var scrollView: UIScrollView!
    var fete : Fete!
    
    
    override func viewDidLoad() {
        super.viewDidLoad()
        for aData in fete.imagesData {
            if let image = UIImage(data: aData) {
                scrollView.auk.show(image: image)
            }
        }
        self.navigationItem.title = fete.title
    }
    
    override func viewDidAppear(_ animated: Bool) {
        scrollView.auk.startAutoScroll(delaySeconds: 3.0)
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
