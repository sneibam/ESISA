//
//  ViewController.swift
//  MyESISA5
//
//  Created by HARCHLI Chaymae on 23/05/2018.
//  Copyright © 2018 HARCHLI Chaymae. All rights .
//

import UIKit

class ViewController: UIViewController, UICollectionViewDelegate, UICollectionViewDataSource {
    
    @IBOutlet weak var collectionView: UICollectionView!
    
  
    
    
    let icons = ["A Propos de l'ESISA", "Partenaires de l'ESISA", "Programme et condition d'accès", "Événement à l'ESISA", "Conférence à l'ESISA", "Presse", "Galerie", "Espace parents", "Contact"]
    let iconID = ["education","globe" , "interface" , "time" , "three" , "openBook" ,"camera" ,"parent" ,"contact" ]
    
    let iconImages:[UIImage] = [
        UIImage(named: "education" )!,
        UIImage(named: "globe" )!,
         UIImage(named: "interface" )!,
         UIImage(named: "time" )!,
         UIImage(named: "three" )!,
         UIImage(named: "openBook" )!,
         UIImage(named: "camera" )!,
         UIImage(named: "parent" )!,
         UIImage(named: "contact" )!,
        
    ]

    override func viewDidLoad() {
        super.viewDidLoad()
        collectionView.dataSource = self
        collectionView.delegate = self
        
        
        var layout = self.collectionView.collectionViewLayout as! UICollectionViewFlowLayout
       // layout.sectionInset = UIEdgeInsetsMake(0, 5, 0, 5)
        layout.minimumLineSpacing = 2
        layout.minimumInteritemSpacing = 2
       // layout.itemSize = CGSize(width: (self.collectionView.frame.size.width / 3)/16, height: 100)
        
       //  layout.itemSize = CGSize(width: (self.collectionView.frame.size.width - 20)/2, height: self.collectionView.frame.size.height/3)
        
        // Do any additional setup after loading the view, typically from a nib.
        let cellWidth = ((UIScreen.main.bounds.width) - 32 - 30 ) / 3
        let cellLayout = collectionView.collectionViewLayout as! UICollectionViewFlowLayout
       
        cellLayout.itemSize = CGSize(width: 125, height: 190)
        
        
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    func collectionView(_ collectionView: UICollectionView, numberOfItemsInSection section: Int) -> Int {
        return icons.count
    }

    func collectionView(_ collectionView: UICollectionView, cellForItemAt indexPath: IndexPath) -> UICollectionViewCell {
        let cell = collectionView.dequeueReusableCell(withReuseIdentifier: "Cell", for: indexPath) as! CollectionViewCell
        cell.iconLabel.text = icons[indexPath.item]
        cell.iconsImageView.image = iconImages[indexPath.item]
        cell.layer.borderColor = UIColor.lightGray.cgColor
        cell.layer.borderWidth = 0.5
        cell.layer.cornerRadius = 5
       //var Button = cell.viewWithTag(1) as! UILabel
       // Button.text
        return cell
    }
    
    
    func collectionView(_ collectionView: UICollectionView, didSelectItemAt indexPath: IndexPath) {
        let cell = collectionView.cellForItem(at: indexPath)
        cell?.layer.borderColor = UIColor.yellow.cgColor
        cell?.layer.borderWidth = 2
        cell?.layer.cornerRadius = 5
        let name = iconID[indexPath.row]
        let viewController = storyboard?.instantiateViewController(withIdentifier: name)
        self.navigationController?.pushViewController(viewController!, animated: true)
    }
    
    func collectionView(_ collectionView: UICollectionView, didDeselectItemAt indexPath: IndexPath) {
         let cell = collectionView.cellForItem(at: indexPath)
        cell?.layer.borderColor = UIColor.lightGray.cgColor
        cell?.layer.borderWidth = 0.5
       cell?.layer.cornerRadius = 5
    }
    /*
    func collectionView(_ collectionView: UICollectionView, cellForItemAt indexPath: IndexPath) -> UICollectionViewCell {
        let cell = collectionView.cellForItem(at: indexPath)
        cell?.contentView.layer.cornerRadius = 2.0
        cell?.contentView.layer.borderWidth = 1.0
        cell?.contentView.layer.borderColor = UIColor.clear.cgColor
        cell?.contentView.layer.masksToBounds = true;
        
        cell?.layer.shadowColor = UIColor.lightGray.cgColor
        cell?.layer.shadowOffset = CGSize(width:0,height: 2.0)
        cell?.layer.shadowRadius = 2.0
        cell?.layer.shadowOpacity = 1.0
        cell?.layer.masksToBounds = false;
        cell?.layer.shadowPath = UIBezierPath(roundedRect:cell?.bounds, cornerRadius:cell?.contentView.layer.cornerRadius).cgPath
        
        return cell
    }*/

}

