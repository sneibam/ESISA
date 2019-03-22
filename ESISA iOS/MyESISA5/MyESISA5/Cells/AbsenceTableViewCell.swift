//
//  AbbsenceTableViewCell.swift
//  MyESISA5
//
//  Created by Mohamed Sneiba on 6/16/18.
//  Copyright © 2018 HARCHLI Chaymae. All rights reserved.
//

import UIKit

class AbsenceTableViewCell: UITableViewCell {

    @IBOutlet weak var absenceLabel: UILabel!
    @IBOutlet weak var motifLabel: UILabel!
    @IBOutlet weak var dateLabel: UILabel!
    @IBOutlet weak var seanceLabel: UILabel!
    
    
    override func awakeFromNib() {
        super.awakeFromNib()
        // Initialization code
    }

    override func setSelected(_ selected: Bool, animated: Bool) {
        super.setSelected(selected, animated: animated)

        // Configure the view for the selected state
    }

}
