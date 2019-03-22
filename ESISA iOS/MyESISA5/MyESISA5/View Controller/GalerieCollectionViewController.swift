//
//  GalerieCollectionViewController.swift
//  MyESISA5
//
//  Created by Mohamed Sneiba on 6/23/18.
//  Copyright © 2018 com.sneibamohamed. All rights reserved.
//

import UIKit

private let reuseIdentifier = "GalerieCell"

class GalerieCollectionViewController: UICollectionViewController {

    var data : [Data]! = [Data]()
    
    
    override func viewDidLoad() {
        super.viewDidLoad()
        
        let layout = self.collectionView!.collectionViewLayout as! UICollectionViewFlowLayout
        let screen = UIScreen.main.bounds
        let screenWidth = screen.width
        if screenWidth > 400 {
            layout.itemSize = CGSize(width : 200, height : 200)
        } else {
            layout.sectionInset = UIEdgeInsetsMake(0, 5, 0, 5)
            layout.itemSize = CGSize(width: 150, height: 150)
        }
        self.navigationController?.navigationBar.backItem?.title = "Retour"
        self.navigationItem.title = "Galerie"

    }
    
    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
    }

    /*
    // MARK: - Navigation

    // In a storyboard-based application, you will often want to do a little preparation before navigation
    override func prepare(for segue: UIStoryboardSegue, sender: Any?) {
        // Get the new view controller using [segue destinationViewController].
        // Pass the selected object to the new view controller.
    }
    */

    // MARK: UICollectionViewDataSource

    override func numberOfSections(in collectionView: UICollectionView) -> Int {
        return 1
    }


    override func collectionView(_ collectionView: UICollectionView, numberOfItemsInSection section: Int) -> Int {
        return data.count
    }

    override func collectionView(_ collectionView: UICollectionView, cellForItemAt indexPath: IndexPath) -> UICollectionViewCell {
        let cell = collectionView.dequeueReusableCell(withReuseIdentifier: reuseIdentifier, for: indexPath) as! GalerieCollectionViewCell
        
        let imageData = data[indexPath.row]
        let image = UIImage(data: imageData)
        cell.galerieImageView.image = image
        //cell.backgroundView?.addSubview(UIImageView(image: image))
        cell.layer.borderColor = UIColor.lightGray.cgColor
        cell.layer.borderWidth = 3
        cell.layer.cornerRadius = 5
        // Configure the cell
    
        return cell
    }

    // MARK: UICollectionViewDelegate

    /*
    // Uncomment this method to specify if the specified item should be highlighted during tracking
    override func collectionView(_ collectionView: UICollectionView, shouldHighlightItemAt indexPath: IndexPath) -> Bool {
        return true
    }
    */

    
    override func collectionView(_ collectionView: UICollectionView, didSelectItemAt indexPath: IndexPath) {
        
        let data = self.data[indexPath.row]
        let galerieScrollVC = storyboard?.instantiateViewController(withIdentifier: "galerie_scroll") as! GalerieScrollViewController
        galerieScrollVC.imageData = data
        self.navigationController?.pushViewController(galerieScrollVC, animated: true)
        
    }
    
    override func collectionView(_ collectionView: UICollectionView, shouldSelectItemAt indexPath: IndexPath) -> Bool {
        
        
        
        return true
    }
 

    /*
    // Uncomment these methods to specify if an action menu should be displayed for the specified item, and react to actions performed on the item
    override func collectionView(_ collectionView: UICollectionView, shouldShowMenuForItemAt indexPath: IndexPath) -> Bool {
        return false
    }

    override func collectionView(_ collectionView: UICollectionView, canPerformAction action: Selector, forItemAt indexPath: IndexPath, withSender sender: Any?) -> Bool {
        return false
    }

    override func collectionView(_ collectionView: UICollectionView, performAction action: Selector, forItemAt indexPath: IndexPath, withSender sender: Any?) {
    
    }
    */

}
