//
//  HostManager.swift
//  MyESISA5
//
//  Created by Mohamed Sneiba on 6/16/18.
//  Copyright © 2018 HARCHLI Chaymae. All rights reserved.
//

import Foundation

class HostManager {
    
    public static let host = "176.31.53.2"
    public static let port = ""
    public static let path = "/api/"
    
    public static func getURL() -> String {
        return "http://" + host + port + path
    }
    
}
