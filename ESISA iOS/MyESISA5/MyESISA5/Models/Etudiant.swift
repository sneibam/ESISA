//
//  Etudiant.swift
//  RESful API
//
//  Created by Mohamed Sneiba on 4/15/18.
//  Copyright © 2018 Mohamed Sneiba. All rights reserved.
//

import Foundation


class Etudiant : NSObject, NSCoding{
    
    
    
    var login : String!
    var pwd : String!
    var id:Int!
    var nom:String!
    var prenom:String!
    var lieuNaissance:String!
    var numInscription:String!
    var CIN:String!
    var adresse:String!
    var teldom:String!
    var tel:String!
    var telpere:String!
    var telmere:String!
    var an:Int!
    var mn:Int!
    var jn:Int!
    var ai:Int!
    var mi:Int!
    var ji:Int!
    
    override init() {
        
    }
    
    func encode(with aCoder: NSCoder) {
        aCoder.encode(login, forKey: "login")
        aCoder.encode(pwd, forKey: "pwd")
        aCoder.encode(id, forKey: "id")
        aCoder.encode(nom, forKey: "nom")
        aCoder.encode(prenom, forKey: "prenom")
        aCoder.encode(lieuNaissance, forKey: "lieuNaissance")
        aCoder.encode(numInscription, forKey: "numInscription")
        aCoder.encode(CIN, forKey: "CIN")
        aCoder.encode(adresse, forKey: "adresse")
        aCoder.encode(teldom, forKey: "teldom")
        aCoder.encode(tel, forKey: "tel")
        aCoder.encode(telpere, forKey: "telpere")
        aCoder.encode(telmere, forKey: "telmere")
        aCoder.encode(an, forKey: "an")
        aCoder.encode(mn, forKey: "mn")
        aCoder.encode(jn, forKey: "jn")
        aCoder.encode(ai, forKey: "ai")
        aCoder.encode(mi, forKey: "mi")
        aCoder.encode(ji, forKey: "ji")
    }
    
    required init?(coder aDecoder: NSCoder) {
        login = aDecoder.decodeObject(forKey: "login") as! String
        pwd = aDecoder.decodeObject(forKey: "pwd") as! String
        id = aDecoder.decodeObject(forKey: "id") as! Int
        nom = aDecoder.decodeObject(forKey: "nom") as! String
        prenom = aDecoder.decodeObject(forKey: "prenom") as! String
        lieuNaissance = aDecoder.decodeObject(forKey: "lieuNaissance") as! String
        numInscription = aDecoder.decodeObject(forKey: "numInscription") as! String
        CIN = aDecoder.decodeObject(forKey: "CIN") as! String
        adresse = aDecoder.decodeObject(forKey: "adresse") as! String
        teldom = aDecoder.decodeObject(forKey: "teldom") as! String
        telpere = aDecoder.decodeObject(forKey: "telpere") as! String
        telmere = aDecoder.decodeObject(forKey: "telmere") as! String
        tel = aDecoder.decodeObject(forKey: "tel") as! String
        an = aDecoder.decodeObject(forKey: "an") as! Int
        mn = aDecoder.decodeObject(forKey: "mn") as! Int
        jn = aDecoder.decodeObject(forKey: "jn") as! Int
        ai = aDecoder.decodeObject(forKey: "ai") as! Int
        mi = aDecoder.decodeObject(forKey: "mi") as! Int
        ji = aDecoder.decodeObject(forKey: "ji") as! Int
    }
    
    
}
