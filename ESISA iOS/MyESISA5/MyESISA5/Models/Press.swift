//
//  Press.swift
//  MyESISA5
//
//  Created by HARCHLI Chaymae on 12/06/2018.
//  Copyright © 2018 HARCHLI Chaymae. All rights reserved.
//

import Foundation
import UIKit

class Press
{
    // MARK: - Public API
    
    var featuredImage: UIImage
    var link: String
    
    
    init(featuredImage: UIImage, link: String)
    {
        
        self.featuredImage = featuredImage
        self.link = link
        
    }
    
    // MARK: - Private
    // dummy data
    static func fetchInterests() -> [Press]
    {
        return [
            Press( featuredImage: UIImage(named: "p1")!, link: "http://esisa.ac.ma/pdf/matin04.pdf"),
            Press(featuredImage: UIImage(named: "p2")!, link: "http://esisa.ac.ma/pdf/opinion072.pdf"),
            Press( featuredImage: UIImage(named: "p3")!, link: "http://esisa.ac.ma/pdf/lopinion10.pdf"),
            Press( featuredImage: UIImage(named: "p04")!, link: "http://esisa.ac.ma/pdf/economiste_frontieres_numeriques_2014.pdf"),
        ]
    }
}
