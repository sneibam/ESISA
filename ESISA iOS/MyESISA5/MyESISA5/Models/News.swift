//
//  Interest.swift
//  Interests
//
//  Created by Duc Tran on 6/13/15.
//  Copyright © 2015 Developer Inspirus. All rights reserved.
//

import UIKit

class News
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
    static func fetchInterests() -> [News]
    {
        return [
            News( featuredImage: UIImage(named: "ensiie")!, link: "http://www.ensiie.fr/"),
            News(featuredImage: UIImage(named: "polytech")!, link: "http://polytech.univ-amu.fr/"),
            News( featuredImage: UIImage(named: "eil")!, link: "http://www.eilco-ulco.fr/"),
            News(featuredImage: UIImage(named: "lorraine")!, link: "http://www.univ-lorraine.fr/"),
            News(featuredImage: UIImage(named: "ub")!, link: "http://www.u-bourgogne.fr/"),
            News(featuredImage: UIImage(named: "upem")!, link: "http://www.u-pem.fr/"),
            News(featuredImage: UIImage(named: "pascal")!, link: "http://www.uca.fr/"),
            News(featuredImage: UIImage(named: "cergy")!, link: "http://www.u-cergy.fr/fr/index.html"),
            News(featuredImage: UIImage(named: "esiag")!, link: "http://www.miage.u-pec.fr/"),
            News(featuredImage: UIImage(named: "isima")!, link: "http://www.isima.fr/isima/"),
            News(featuredImage: UIImage(named: "lsis")!, link: "http://www.lsis.org/index.php?processus=ok"),
            News(featuredImage: UIImage(named: "paris8")!, link: "http://www.univ-paris8.fr/"),
            News(featuredImage: UIImage(named: "paris13")!, link: "http://www.univ-paris13.fr/"),
            News(featuredImage: UIImage(named: "genova")!, link: "http://www.diptem.unige.it/"),
           
        ]
    }
}
