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
    
    
    init(featuredImage: UIImage)
    {
       
        self.featuredImage = featuredImage
       
    }
    
    // MARK: - Private
    // dummy data
    static func fetchInterests() -> [News]
    {
        return [
            News( featuredImage: UIImage(named: "ensiie")!),
            News(featuredImage: UIImage(named: "polytech")!),
            News( featuredImage: UIImage(named: "eil")!),
            News(featuredImage: UIImage(named: "lorraine")!),
            News(featuredImage: UIImage(named: "ub")!),
            News(featuredImage: UIImage(named: "upem")!),
            News(featuredImage: UIImage(named: "pascal")!),
            News(featuredImage: UIImage(named: "cergy")!),
            News(featuredImage: UIImage(named: "esiag")!),
            News(featuredImage: UIImage(named: "isima")!),
            News(featuredImage: UIImage(named: "lsis")!),
            News(featuredImage: UIImage(named: "paris8")!),
            News(featuredImage: UIImage(named: "paris13")!),
            News(featuredImage: UIImage(named: "genova")!),
           
        ]
    }
}
