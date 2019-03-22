//
//  GalerieScrollViewController.swift
//  MyESISA5
//
//  Created by Mohamed Sneiba on 6/24/18.
//  Copyright © 2018 com.sneibamohamed. All rights reserved.
//

import UIKit

class GalerieScrollViewController: UIViewController, UIScrollViewDelegate {

    var imageData : Data!
    
    
    override func viewDidLoad() {
        super.viewDidLoad()

        if let image = UIImage(data: imageData) {
            let iv = UIImageView(image: image)
            iv.sizeToFit()
            iv.frame.size = CGSize(width: self.view.bounds.width, height: self.view.bounds.height)
            let scrollView = UIScrollView(frame: CGRect(x: 0, y: 0, width: self.view.bounds.size.width, height: self.view.bounds.size.height))
            scrollView.addSubview(iv)
            scrollView.contentSize = iv.frame.size
            scrollView.minimumZoomScale = 0.5
            scrollView.maximumZoomScale = 2
            scrollView.delegate = self
            view.addSubview(scrollView)
        }
        
        
    }

    func viewForZooming(in scrollView: UIScrollView) -> UIView? {
        return scrollView.subviews[0]
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
