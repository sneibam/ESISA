//
//  ViewController.swift
//  MyESISA5
//
//  Created by HARCHLI Chaymae on 23/05/2018.
//  Copyright © 2018 HARCHLI Chaymae. All rights .
//

import UIKit
import AVKit

class ViewController: UIViewController, UICollectionViewDelegate, UICollectionViewDataSource, UICollectionViewDelegateFlowLayout {
    
    @IBOutlet weak var collectionView: UICollectionView!
    
  
    
    
    let icons = ["A Propos de l'ESISA", "Partenaires de l'ESISA", "Programme et condition d'accès", "Événement à l'ESISA", "l'ESISA En Marche", "Presse", "Galerie", "Espace parents", "Contact"]
    let iconID = ["education","globe" , "interface" , "events" , "three" , "openBook" ,"galerie" ,"parent" ,"contact" ]
    
    let iconImages:[UIImage] = [
        UIImage(named: "education" )!,
        UIImage(named: "globe" )!,
         UIImage(named: "interface" )!,
         UIImage(named: "time" )!,
         UIImage(named: "for_splash" )!,
         UIImage(named: "openBook" )!,
         UIImage(named: "camera" )!,
         UIImage(named: "parent" )!,
         UIImage(named: "contact" )!,
        
    ]

    private func addNavBarImage() {
        let navController = navigationController!
        let image = #imageLiteral(resourceName: "for_splash")
        let imageView = UIImageView(image: image)
        
        let bannerWidth = navController.navigationBar.frame.size.width
        let bannerHeight = navController.navigationBar.frame.size.height
        
        let bannerX = bannerWidth / 2 - image.size.width/2
        let bannerY = bannerHeight / 2 - image.size.height/2
        
        imageView.frame = CGRect(x: bannerX, y: bannerY, width: bannerWidth, height: bannerHeight)
        imageView.contentMode = .scaleAspectFit
        
        navigationItem.titleView = imageView
    }
    
    override func viewDidLoad() {
        super.viewDidLoad()

        collectionView.dataSource = self
        collectionView.delegate = self
        

        let layout = self.collectionView.collectionViewLayout as! UICollectionViewFlowLayout
       // layout.sectionInset = UIEdgeInsetsMake(0, 5, 0, 5)
        
       // layout.itemSize = CGSize(width: (self.collectionView.frame.size.width / 3)/16, height: 100)
        
       //  layout.itemSize = CGSize(width: (self.collectionView.frame.size.width - 20)/2, height: self.collectionView.frame.size.height/3)
        
        // Do any additional setup after loading the view, typically from a nib.
        _ = ((UIScreen.main.bounds.width) - 32 - 30 ) / 3
        //let cellLayout = collectionView.collectionViewLayout as! UICollectionViewFlowLayout
        
        let screen = UIScreen.main.bounds
        let screenWidth = screen.size.width
        NSLog("Width : \(screenWidth) , Height : \(screen.size.height)")
        if screenWidth < 410 {
            self.collectionView.frame = CGRect(x: 0, y: 0, width: screenWidth, height: screen.size.height)
            if screen.size.height <= 667 {
            
                layout.sectionInset = UIEdgeInsets(top: 0, left: 10, bottom: 0, right: 10)
                layout.minimumInteritemSpacing = 0
                layout.itemSize = CGSize(width: 115, height: 170)
            } else {
                // Iphone X
                layout.sectionInset = UIEdgeInsets(top: 10, left: 10, bottom: 0, right: 10)
                layout.minimumInteritemSpacing = 0
                layout.itemSize = CGSize(width: 115, height: 190)
            }
        } else {
            NSLog("HEERE")
            self.collectionView.frame = CGRect(x: 0, y: 0, width: screenWidth, height: screen.size.height)
            layout.sectionInset = UIEdgeInsets(top: 10, left: 15, bottom: 10, right: 15)
            layout.minimumLineSpacing = 5
            layout.minimumInteritemSpacing = 2
            //layout.itemSize = CGSize(width: 125, height: 190)
            layout.itemSize = CGSize(width: (self.collectionView.frame.size.width) / 3.3, height: (self.collectionView.frame.size.height) / 4)
        }
        //layout.itemSize = CGSize(width: 125, height: 190)
        self.addNavBarImage()
                
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
        var name = iconID[indexPath.row]
        
        if name == "parent" {
            if defaultEtudiantExist() {
                name = "parent_index"
            }
        }
        let viewController = storyboard?.instantiateViewController(withIdentifier: name)
        if name == "galerie" {
            let data = Tasks.readFromFileGalerie()
            NSLog("DONEE AGAIN : \(data.count) ")
            if let galerieVC = viewController as? GalerieCollectionViewController {
                galerieVC.data = data
                self.navigationController?.pushViewController(galerieVC, animated: true)
            }
        } else if name == "events" {
            let data = Tasks.readFromFileSlides()
            NSLog("DONNEE AGAIN : \(data.count)")
            if let eventsVC = viewController as? EventsViewController {
                eventsVC.data = data
                self.navigationController?.pushViewController(eventsVC, animated: true)
            }
        } else if name == "three" {
            guard let path = Bundle.main.path(forResource: "ESISA", ofType: "mp4") else {
                debugPrint("ESISA.mp4 not found")
                self.dismiss(animated: true, completion: nil)
                return
            }
            let player = AVPlayer(url: URL(fileURLWithPath: path))
            let avPlayerController = AVPlayerViewController()
            avPlayerController.player = player
            
            self.present(avPlayerController, animated: true) {
                player.play()
            }
        }else {
            self.navigationController?.pushViewController(viewController!, animated: true)
        }
        
        
        //tabBarController?.selectedViewController = viewController
        //self.navigationController?.show(viewController!, sender: indexPath)
        
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

    
    override func prepare(for segue: UIStoryboardSegue, sender: Any?) {
        if segue.identifier == "espaceParent" {
            
            
        }
    }
    
    func defaultEtudiantExist() -> Bool {
        if (UserDefaults.standard.value(forKey: "etudiant") as? NSData) != nil {
            return true
        }
        return false
    }
}

