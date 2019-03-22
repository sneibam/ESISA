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
    
    
    init(featuredImage: UIImage)
    {
        
        self.featuredImage = featuredImage
        
    }
    
    // MARK: - Private
    // dummy data
    static func fetchInterests() -> [Press]
    {
        return [
            Press( featuredImage: UIImage(named: "p1")!),
            Press(featuredImage: UIImage(named: "p2")!),
            Press( featuredImage: UIImage(named: "p3")!),
           Press( featuredImage: UIImage(named: "p04")!),
        ]
    }
}
