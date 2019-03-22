//
//  FeteTableViewCell.swift
//  MyESISA5
//
//  Created by Mohamed Sneiba on 7/3/18.
//  Copyright © 2018 com.sneibamohamed. All rights reserved.
//

import UIKit

class FeteTableViewCell: UITableViewCell {

  
    @IBOutlet weak var scrollView: UIScrollView!
    @IBOutlet weak var label: UILabel!
    override func awakeFromNib() {
        super.awakeFromNib()
        // Initialization code
    }

    override func setSelected(_ selected: Bool, animated: Bool) {
        super.setSelected(selected, animated: animated)

        // Configure the view for the selected state
    }
    
   

}
