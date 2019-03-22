//
//  ContactUsViewController.swift
//  MyESISA5
//
//  Created by Mohamed Sneiba on 8/7/18.
//  Copyright © 2018 com.sneibamohamed. All rights reserved.
//

import UIKit
import MapKit

class ContactUsViewController: UIViewController {

    
    @IBOutlet weak var mkMapView: MKMapView!
    
    
    override func viewDidLoad() {
        super.viewDidLoad()

        let location = CLLocationCoordinate2DMake(34.0247, -4.9955)
        let span = MKCoordinateSpanMake(0.02, 0.02)
        
        let region = MKCoordinateRegionMake(location, span)
        mkMapView.setRegion(region, animated: true)
        
        let annotation = MKPointAnnotation()
        annotation.coordinate = location
        annotation.title = "ESISA"
        annotation.subtitle = "29 bis Ab Ibn Khatib Route d'Immouzzer"
        mkMapView.addAnnotation(annotation)
        
        
        
        // Do any additional setup after loading the view.
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
