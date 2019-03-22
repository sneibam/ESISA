//
//  ESISADateFormatter.swift
//  MyESISA5
//
//  Created by Mohamed Sneiba on 6/17/18.
//  Copyright © 2018 com.sneibamohamed. All rights reserved.
//

import Foundation

class DateFormater {
    
    public static func toDate(from date : String) -> Date{
        let formatter = DateFormatter()
        formatter.dateFormat = "yyyy-MM-dd"
        return formatter.date(from: date)!
    }
    
    public static func toString(from date : Date) -> String {
        let dateFormatter = DateFormatter()
        dateFormatter.dateStyle = .medium
        dateFormatter.timeStyle = .none
        dateFormatter.locale = Locale(identifier: "fr_FR")
        return dateFormatter.string(from : date)
    }
    
}
