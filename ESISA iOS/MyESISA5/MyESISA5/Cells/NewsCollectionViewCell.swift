//
//  NewsCollectionViewCell.swift
//  MyESISA4
//
//  Created by HARCHLI Chaymae on 21/05/2018.
//  Copyright © 2018 HARCHLI Chaymae. All rights reserved.
//

import UIKit

class NewsCollectionViewCell: UICollectionViewCell {
    
    @IBOutlet weak var featuredImageView: UIImageView!
    
    
    var news: News? {
        didSet {
            self.updateUI()
        }
    }
    
    private func updateUI()
    {
        if let news = news {
            featuredImageView.image = news.featuredImage
        } else {
            featuredImageView.image = nil
        }
    }
    
    override func layoutSubviews() {
        super.layoutSubviews()
        
        self.layer.cornerRadius = 3.0
        layer.shadowRadius = 10
        layer.shadowOpacity = 0.4
        layer.shadowOffset = CGSize(width: 5, height: 10)
        
        self.clipsToBounds = false
    }
}
