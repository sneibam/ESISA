//
//  Fete.swift
//  MyESISA5
//
//  Created by Mohamed Sneiba on 7/3/18.
//  Copyright © 2018 com.sneibamohamed. All rights reserved.
//

import Foundation

/*
 Separator For FETE
 ; for the all the properties
 ^ for the imagesURL
 SEPARATOR for the imagesDATA
 SEPARATORFETE for all the conferences in the 'Fete' file
 
 */

class Fete {
    
    var title: String!
    var date: String!
    var imagesURL : [String]!
    var imagesData : [Data]!
    
    public static func getFete(from data : [String : Any]) -> Fete {
        let fete = Fete()
        
        
        fete.title = data["title"] as! String
        fete.date = data["date"] as! String
        
        let prefixUrl = HostManager.host + HostManager.port + "/"
        
        if let imagesObj = (data["images"] as? [String : Any]) {
            if let images = imagesObj["image"] as? [String] {
                fete.imagesURL = [String]()
                for image in images {
                    NSLog("\(prefixUrl)\(image)")
                    fete.imagesURL.append(prefixUrl + image)
                }
            }
        }
        
        return fete
    }
    
    public func toString() -> String {
        let mutString = NSMutableString()
        
        mutString.append("\(title!);")
        mutString.append("\(date!);")
        
        mutString.append("\(imagesURL[0])");
        for i in 1...imagesURL.count-1 {
            mutString.append("^\(imagesURL[i])")
        }
        
        mutString.append(";\(imagesData[0].base64EncodedString())")
        for i in 1...imagesData.count-1 {
            mutString.append("SEPARATOR")
            mutString.append("\(imagesData[i].base64EncodedString())")
        }
        
        return mutString as String
    }
    
    public static func fromString(from _from : String) -> Fete?{
        
        let attributes = _from.components(separatedBy: ";")
        if attributes.count == 0 { return nil }
        
        let fete = Fete()
        fete.title = attributes[0]
        fete.date = attributes[1]
        fete.imagesURL = attributes[2].components(separatedBy: "^")
        fete.imagesData = attributes[3].components(separatedBy: "SEPARATOR").map({ (dataString) -> Data in
            return Data(base64Encoded: dataString)!
        })
        
        return fete
    }
    
}
