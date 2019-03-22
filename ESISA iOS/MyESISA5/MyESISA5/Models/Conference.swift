//
//  Conference.swift
//  MyESISA5
//
//  Created by Mohamed Sneiba on 7/1/18.
//  Copyright © 2018 com.sneibamohamed. All rights reserved.
//

import Foundation

/*
    Separator For Conference
    ; for the all the properties
    ^ for the imagesURL
    SEPARATOR for the imagesDATA
    SEPARATORCONF for all the conferences in the conference file
 
 */


class Conference {
    
    var title: String!
    var content: String!
    var date: String!
    var link: String!
    var imagesURL: [String]!
    var imagesData: [Data]!

    public static func getConference(from data : [String : Any]) -> Conference {
        let conference = Conference()
        
        
        conference.title = data["title"] as! String
        conference.content = data["content"] as! String
        conference.date = data["date"] as! String
        conference.link = data["link"] as! String
        
        let prefixUrl = HostManager.host + HostManager.port + "/"
        
        if let imagesObj = (data["images"] as? [String : Any]) {
            if let images = imagesObj["image"] as? [String] {
                conference.imagesURL = [String]()
                for image in images {
                    NSLog("\(prefixUrl)\(image)")
                    conference.imagesURL.append(prefixUrl + image)
                }
            }
        }
        
        return conference
    }
    
    public func toString() -> String {
        let mutString = NSMutableString()
        
        mutString.append("\(title!);")
        mutString.append("\(content!);")
        mutString.append("\(date!);")
        mutString.append("\(link!);")
        
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
    
    public static func fromString(from _from : String) -> Conference?{
        
        let attributes = _from.components(separatedBy: ";")
        if attributes.count == 0 { return nil }
        
        let conference = Conference()
        conference.title = attributes[0]
        conference.content = attributes[1]
        conference.date = attributes[2]
        conference.link = attributes[3]
        conference.imagesURL = attributes[4].components(separatedBy: "^")
        conference.imagesData = attributes[5].components(separatedBy: "SEPARATOR").map({ (dataString) -> Data in
            return Data(base64Encoded: dataString)!
        })
        
        return conference
    }
    
    
}
