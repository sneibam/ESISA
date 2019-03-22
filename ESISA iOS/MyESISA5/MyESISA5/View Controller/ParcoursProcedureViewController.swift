//
//  ParcoursProcedureViewController.swift
//  MyESISA5
//
//  Created by Mohamed Sneiba on 6/30/18.
//  Copyright © 2018 com.sneibamohamed. All rights reserved.
//

import UIKit

class ParcoursProcedureViewController: UIViewController, UIScrollViewDelegate {

    override func viewDidLoad() {
        super.viewDidLoad()
        self.navigationItem.title = "Parcours à l'ESISA"
        // Do any additional setup after loading the view.
        scrollView.delegate = self
    }
    @IBOutlet weak var imageView: UIImageView!
    
    @IBOutlet weak var scrollView: UIScrollView!
    
    func viewForZooming(in scrollView: UIScrollView) -> UIView? {
        return imageView
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
