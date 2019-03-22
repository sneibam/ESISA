//
//  Absence.swift
//  MyESISA5
//
//  Created by Mohamed Sneiba on 6/16/18.
//  Copyright © 2018 HARCHLI Chaymae. All rights reserved.
//

import Foundation

class Absence : Equatable {
    
    
    var id : Int!
    var date : String!
    var seance : String!
    var matiere : String!
    var motif : String!
    var appel : String!
    var controle : String!
    var ide : Int!
    
    public func toString() -> String {
        let mutString = NSMutableString()
        
        mutString.append(String(id) + ";")
        mutString.append(date + ";")
        mutString.append(seance + ";")
        mutString.append(matiere + ";")
        mutString.append(motif + ";")
        mutString.append(appel + ";")
        mutString.append(controle + ";")
        mutString.append(String(ide))
        
        return mutString as String
    }
    
    public static func fromString(from _from : String) -> Absence{
        let absence = Absence()
        
        let attributes = _from.split(separator: ";")
        absence.id = Int(String(attributes[0]))
        absence.date = String(attributes[1])
        absence.seance = String(attributes[2])
        absence.matiere = String(attributes[3])
        absence.motif = String(attributes[4])
        absence.appel = String(attributes[5])
        absence.controle = String(attributes[6])
        absence.ide = Int(String(attributes[7]))

        
        return absence
    }
    static func == (lhs: Absence, rhs: Absence) -> Bool {
        return lhs.id == rhs.id
    }
    
    
}
