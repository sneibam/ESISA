//
//  NewsModel.swift
//  MyESISA5
//
//  Created by Mohamed Sneiba on 6/17/18.
//  Copyright © 2018 com.sneibamohamed. All rights reserved.
//

import Foundation

class NewsModel : Equatable{
    
    var title : String!
    var date : String!
    var content : String!
    var link : String!
    var imageURL : String!
    var imageData : Data!
    
    
    public static func getNews(from data : [String : Any]) -> NewsModel {
        let news = NewsModel()
        
        news.title = data["title"] as! String
        news.date = data["date"] as! String
        news.content = data["content"] as! String
        news.imageURL = "http://" + HostManager.host + HostManager.port + "/" + (data["image"] as! String)
        news.link = data["link"] as! String
        
        return news
    }
    public func toString() -> String {
        let mutString = NSMutableString()
        
        mutString.append("\(title!);")
        mutString.append("\(date!);")
        mutString.append("\(content!);")
        mutString.append("\(link!);")
        mutString.append("\(imageURL!);")
        mutString.append("\(imageData!.base64EncodedString())")
        
        return mutString as String
    }
    
    public static func fromString(from _from : String) -> NewsModel?{
        
        let attributes = _from.components(separatedBy: ";")
        if attributes.count == 0 {
            return nil
        }
        
        let news = NewsModel()
        
        news.title = attributes[0]
        news.date = attributes[1]
        news.content = attributes[2]
        news.link = attributes[3]
        news.imageURL = attributes[4]
        news.imageData = Data(base64Encoded: attributes[5])
        
        
        return news
    }
    
    static func == (lhs: NewsModel, rhs: NewsModel) -> Bool {
        return (lhs.link == rhs.link) && (lhs.title == rhs.title) && (lhs.date == rhs.date)
    }
    
}
