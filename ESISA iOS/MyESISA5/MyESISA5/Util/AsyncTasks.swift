//
//  AsyncTasks.swift
//  MyESISA5
//
//  Created by Mohamed Sneiba on 6/16/18.
//  Copyright © 2018 HARCHLI Chaymae. All rights reserved.
//

import Foundation
import UserNotifications

class Tasks {
    
    private static let absenceFileName = "absences.txt"
    private static let newsFileName = "news.txt"
    private static let galerieFileName = "galerie.txt"
    private static let slidesFileName = "slides.txt"
    private static let confESISAFileName = "confESISA.txt"
    private static let confIntFileName = "confInt.txt"
    private static let feteFileName = "fete.txt"
    private static var etudiant : Etudiant!
    
    
    public static var fetes = [Fete]()
    public static func saveToFile(absences : [Absence]) {
        
        let absencesString = NSMutableString()
        
        for absence in absences {
            absencesString.append(absence.toString() + "\n")
        }
        
        let file = AppFile()
        print(file.getURL(for: .Documents))
        _ = file.writeFile(containing: (absencesString as String), to: .Documents, withName: absenceFileName)
    }
    
    public static func saveToFile(news : [NewsModel]) {
        var allNews = news
        let newsString = NSMutableString()
        newsString.append(allNews[0].toString())
        allNews.removeFirst()
        for aNews in allNews {
            newsString.append("SEPARATOR" + aNews.toString())
        }
        let file = AppFile()
        print(file.getURL(for: .Documents))
        _ = file.writeFile(containing: (newsString as String), to: .Documents, withName: newsFileName)
    }
    
    public static func saveToFile(data : [Data], filename : String) {
        var allData = data
        let galerieDataString = NSMutableString()
        galerieDataString.append(allData[0].base64EncodedString())
        allData.removeFirst()
        for aData in allData {
            galerieDataString.append("SEPARATOR" + aData.base64EncodedString())
        }
        let file = AppFile()
        print(file.getURL(for: .Documents))
        _ = file.writeFile(containing: (galerieDataString as String), to: .Documents, withName: filename)
    }
    
    private static func saveToFile(conferences : [Conference], path : String) {
        var allConferences = conferences
        let conferencesString = NSMutableString()
        conferencesString.append(allConferences[0].toString())
        allConferences.removeFirst()
        
        for conf in allConferences {
            conferencesString.append("SEPARATORCONF")
            conferencesString.append(conf.toString())
        }
        let file = AppFile()
        print(file.getURL(for: .Documents))
        _ = file.writeFile(containing: conferencesString as String, to: .Documents, withName: (path == "confESISA") ? self.confESISAFileName : self.confIntFileName)
    }
    private static func saveToFile(fetes : [Fete]) {
        var allFetes = fetes
        let fetesString = NSMutableString()
        fetesString.append(allFetes[0].toString())
        allFetes.removeFirst()
        
        for fete in allFetes {
            fetesString.append("SEPARATORFETE")
            fetesString.append(fete.toString())
        }
        let file = AppFile()
        print(file.getURL(for: .Documents))
        _ = file.writeFile(containing: fetesString as String, to: .Documents, withName: self.feteFileName)
    }
    
    public static func readFromFileFete() -> [Fete]{
        var data = [Fete]()
        let file = AppFile()
        let path = file.getURL(for: .Documents).absoluteString + self.feteFileName
        if file.exists(file: URL(string : path)!) {
            // let content = file.readFile(at: .Documents, withName: filename)
            var content = ""
            if let dir = FileManager.default.urls(for: .documentDirectory, in: .userDomainMask).first {
                let fileURL = dir.appendingPathComponent(self.feteFileName)
                do {
                    content = try String(contentsOf: fileURL, encoding: .utf8)
                } catch {
                    print("ERROR WHILE READING")
                }
            }
            let lines = content.components(separatedBy: "SEPARATORFETE")
            for line in lines {
                data.append(Fete.fromString(from: line)!)
            }
        }
        return data
    }
    
    public static func readFromFileConference(path : String) -> [Conference]{
        var data = [Conference]()
        let filename = path == "confESISA" ? self.confESISAFileName : self.confIntFileName
        let file = AppFile()
        let path = file.getURL(for: .Documents).absoluteString + filename
        if file.exists(file: URL(string : path)!) {
            // let content = file.readFile(at: .Documents, withName: filename)
            var content = ""
            if let dir = FileManager.default.urls(for: .documentDirectory, in: .userDomainMask).first {
                let fileURL = dir.appendingPathComponent(filename)
                do {
                    content = try String(contentsOf: fileURL, encoding: .utf8)
                } catch {
                    print("ERROR WHILE READING")
                }
            }
            let lines = content.components(separatedBy: "SEPARATORCONF")
            for line in lines {
                data.append(Conference.fromString(from: line)!)
            }
        }
        return data
    }
    
    public static func readFromFileGalerie() -> [Data] {
        return Tasks.readFromFileData(filename: self.galerieFileName)
    }
    
    public static func readFromFileSlides() -> [Data] {
        return Tasks.readFromFileData(filename: self.slidesFileName)
    }
    
    public static func readFromFileData(filename : String) -> [Data] {
        var galerieData = [Data]()
        let file = AppFile()
        let path = file.getURL(for: .Documents).absoluteString + filename
        if file.exists(file: URL(string : path)!) {
           // let content = file.readFile(at: .Documents, withName: filename)
            var content = ""
            if let dir = FileManager.default.urls(for: .documentDirectory, in: .userDomainMask).first {
                let fileURL = dir.appendingPathComponent(filename)
                do {
                    content = try String(contentsOf: fileURL, encoding: .utf8)
                } catch {
                    print("ERROR WHILE READING")
                }
            }
            let lines = content.components(separatedBy: "SEPARATOR")
            for line in lines {
                if let data = Data(base64Encoded: line) {
                    galerieData.append(data)
                }
            }
        }
        return galerieData
    }
    
    public static func readFromFileNews() -> [NewsModel] {
        var newsArray = [NewsModel]()
        
        let file = AppFile()
        let path = file.getURL(for: .Documents).absoluteString + newsFileName
        if file.exists(file: URL(string : path)!) {
            let content = file.readFile(at: .Documents, withName: newsFileName)
            let lines = content.components(separatedBy: "SEPARATOR")
            for line in lines {
                if let news = NewsModel.fromString(from: line) {
                    newsArray.append(news)
                }
            }
        }
        
        return newsArray.sorted(by: {$0.date > $1.date})
    }
    
    public static func readFromFileAbsences() -> [Absence] {
        var absences = [Absence]()
        
        let file = AppFile()
        
        let path = file.getURL(for: .Documents).absoluteString + absenceFileName
        if file.exists(file : URL(string : path)!) {
            let content = file.readFile(at: .Documents, withName: absenceFileName)
            
            let lines = content.split(separator: "\n")
            
            for line in lines {
                let a = Absence.fromString(from: String(line))
                absences.append(a)
            }
        }
        
        
        
        
        return absences
    }
    private static var counter = 0
    public static func checkAbsences() -> Bool {
        counter = counter + 1
        
        if (InternetAvailability.isInternetAvailable()) {
            if let etudiantData = UserDefaults.standard.value(forKey: "etudiant") as? NSData {
                self.etudiant = NSKeyedUnarchiver.unarchiveObject(with: etudiantData as Data) as! Etudiant
            
                let urlString = HostManager.getURL() + "absences/" + String(etudiant.id)
                debugPrint(urlString)
                let session = URLSession.shared
                if let url = URL(string: urlString) {
                    let task = session.dataTask(with: url) { (data, response, error) in
                        guard error == nil else {
                            debugPrint("Error !!!" + error.debugDescription)
                            return
                        }
                        
                        guard let responseData = data else {
                            debugPrint("No data received")
                            return
                        }
                        do {
                            //let s = String(data : responseData, encoding : String.Encoding.utf8)
                            //debugPrint(s!)
                            guard let jsonObject = try JSONSerialization.jsonObject(with: responseData, options: []) as? [[String:Any]] else {
                                debugPrint("Error trying to convert data from JSON")
                               
                                return
                            }
                            
                            var data : [Absence] = [Absence]()
                            for absence in jsonObject {
                                data.append(self.convertDataFromJSON(data: absence))
                            }
                            
                            let oldData = readFromFileAbsences()
                            var newData = [Absence]()
                            for a in data {
                                
                                if !oldData.contains(a) {
                                    newData.append(a)
                                }
                            }
                            print("count : \(newData.count)")
                            
                            for a in newData {
                                
                                let dateStr = String(a.date.split(separator: " ")[0])
                                let formattedDate = DateFormater.toString(from: DateFormater.toDate(from: dateStr))
                                print(formattedDate)
                                
                                // Notification
                                let notification = UNMutableNotificationContent()
                                notification.title = "Absence"
                                notification.body = "L'étudiant(e) \(etudiant.nom!.uppercased()) \(etudiant.prenom!) s'est absenté le \(formattedDate) de la seance du \(a.seance!) de la matiere \(a.matiere!)"
                                
                                notification.sound = UNNotificationSound.default()
                                let trigger = UNTimeIntervalNotificationTrigger(timeInterval: 1, repeats: false)
                                let request = UNNotificationRequest(identifier: "absenceNotification", content: notification, trigger: trigger)
                                
                                UNUserNotificationCenter.current().add(request, withCompletionHandler: nil)
                                
                            }
                            
                            
                            DispatchQueue.global(qos: .background).async {
                                Tasks.saveToFile(absences: data)
                            }
                        } catch {
                            print("error trying to convert data to JSON")
                            
                            return
                        }
                    }
                    task.resume()
                } else {
                    print("Wrong URL")
                    return false
                }
            }
        }
        return true
    }
    
    public static func fetchGalerie() {
        if InternetAvailability.isInternetAvailable() {
            let urlString = HostManager.getURL() + "util/galerie"
            let sessio = URLSession.shared
            if let url = URL(string: urlString) {
                let task = sessio.dataTask(with: url) { (data, response, error) in
                    guard error == nil else {
                        debugPrint("Error !!!" + error.debugDescription)
                        return
                    }
                    
                    guard let responseData = data else {
                        debugPrint("No data received")
                        return
                    }
                    do {
                        
                        guard let jsonObject = try JSONSerialization.jsonObject(with: responseData, options: []) as? [String] else {
                            debugPrint("Error trying to convert data from JSON")
                            return
                        }
                        
                        var imagesData = [Data]()
                        
                        for imageRelativeURL in jsonObject {
                            let imageURLString = "http://" + HostManager.host + HostManager.port + "/" + imageRelativeURL
                            if let imageUrl = URL(string: imageURLString) {
                                let urlContents =  try? Data(contentsOf: imageUrl)
                                if let imageData = urlContents {
                                    imagesData.append(imageData)
                                } else { print("No Image Data") }
                            } else {
                                print("No Image")
                            }
                        }
                        
                        self.saveToFile(data: imagesData, filename: self.galerieFileName)
                        print("DONEE :\(imagesData.count)")
                    } catch {
                        print("error trying to convert data to JSON")
                        return
                    }
                }
                task.resume()
            } else {
                print("Wrong URL")
            }
        }
    }
    
    public static func fetchSlides() {
        if InternetAvailability.isInternetAvailable() {
            let urlString = HostManager.getURL() + "util/slides"
            let sessio = URLSession.shared
            if let url = URL(string: urlString) {
                let task = sessio.dataTask(with: url) { (data, response, error) in
                    guard error == nil else {
                        debugPrint("Error !!!" + error.debugDescription)
                        return
                    }
                    
                    guard let responseData = data else {
                        debugPrint("No data received")
                        return
                    }
                    do {
                        
                        guard let jsonObject = try JSONSerialization.jsonObject(with: responseData, options: []) as? [String] else {
                            debugPrint("Error trying to convert data from JSON")
                            return
                        }
                        
                        var imagesData = [Data]()
                        
                        for imageRelativeURL in jsonObject {
                            let imageURLString = "http://" + HostManager.host + HostManager.port + "/" + imageRelativeURL
                            if let imageUrl = URL(string: imageURLString) {
                                let urlContents =  try? Data(contentsOf: imageUrl)
                                if let imageData = urlContents {
                                    imagesData.append(imageData)
                                } else { print("No Image Data") }
                            } else {
                                print("No Image")
                            }
                        }
                        
                        self.saveToFile(data: imagesData, filename: self.slidesFileName)
                        print("DONEE :\(imagesData.count)")
                    } catch {
                        print("error trying to convert data to JSON")
                        return
                    }
                }
                task.resume()
            } else {
                print("Wrong URL")
            }
        }
    }
    
    public static func fetchConferences(path : String) {
        if InternetAvailability.isInternetAvailable() {
            let urlString = HostManager.getURL() + "util/" + path
            NSLog(urlString)
            let session = URLSession.shared
            if let url = URL(string: urlString) {
                let task = session.dataTask(with: url) { (data, response, error) in
                    guard error == nil else {
                        debugPrint("Error !!!" + error.debugDescription)
                        return
                    }
                    
                    guard let responseData = data else {
                        debugPrint("No data received")
                        return
                    }
                    do {
                        
                        guard let jsonObject = try JSONSerialization.jsonObject(with: responseData, options: []) as? [Any] else {
                            debugPrint("Error trying to convert data from JSON")
                            return
                        }
                        
                        if let conferenceObject = jsonObject[0] as? [String : Any] {
                         
                            if let data = conferenceObject["conference"] as? [[String : Any]] {
                                var conferences = [Conference]()
                                for conf in data {
                                    let conference = Conference.getConference(from: conf)
                                    conference.imagesData = [Data]()
                                    for imageUrlString in conference.imagesURL {
                                        if let url = URL(string: "http://" + imageUrlString) {
                                            if let data = try? Data(contentsOf: url) {
                                                NSLog(imageUrlString + " ABOUT TO DOWNLOAD")
                                                NSLog("\(imageUrlString) DOWNLOADED")
                                                conference.imagesData.append(data)
                                            }
                                        }
                                    }
                                    conferences.append(conference)
                                }
                                NSLog("DOONEE : \(conferences.count)")
                                self.saveToFile(conferences: conferences, path: path)
                                
                            }
                            
                        }
                        
                        
                        
                        
                        
                    } catch {
                        print("error trying to convert data to JSON")
                        return
                    }
                }
                task.resume()
            } else {
                print("Wrong URL")
            }
        }
    }
    
    public static func fetchFetes() {
        if InternetAvailability.isInternetAvailable() {
            let urlString = HostManager.getURL() + "util/fetes"
            NSLog(urlString)
            let session = URLSession.shared
            if let url = URL(string: urlString) {
                let task = session.dataTask(with: url) { (data, response, error) in
                    guard error == nil else {
                        debugPrint("Error !!!" + error.debugDescription)
                        return
                    }
                    
                    guard let responseData = data else {
                        debugPrint("No data received")
                        return
                    }
                    do {
                        
                        guard let jsonObject = try JSONSerialization.jsonObject(with: responseData, options: []) as? [Any] else {
                            debugPrint("Error trying to convert data from JSON")
                            return
                        }
                        
                        if let fetesObject = jsonObject[0] as? [String : Any] {
                            
                            if let data = fetesObject["fete"] as? [[String : Any]] {
                                var fetes = [Fete]()
                                for aData in data {
                                    let fete = Fete.getFete(from: aData)
                                    fete.imagesData = [Data]()
                                    for imageUrlString in fete.imagesURL {
                                        if let url = URL(string: "http://" + imageUrlString) {
                                            if let data = try? Data(contentsOf: url) {
                                                fete.imagesData.append(data)
                                            }
                                        }
                                    }
                                    fetes.append(fete)
                                }
                                NSLog("DOONEE FETE : \(fetes.count)")
                                self.fetes = fetes
                                self.saveToFile(fetes: fetes)
                                
                            }
                            
                        }
                        
                        
                    } catch {
                        print("error trying to convert data to JSON")
                        return
                    }
                }
                task.resume()
            } else {
                print("Wrong URL")
            }
        }
    }
    
    public static func backgroundFetchNews() {
        if InternetAvailability.isInternetAvailable() {
            let urlString = HostManager.getURL() + "news"
            debugPrint(urlString)
            let session = URLSession.shared
            if let url = URL(string: urlString) {
                let task = session.dataTask(with: url) { (data, response, error) in
                    guard error == nil else {
                        debugPrint("Error !!!" + error.debugDescription)
                        return
                    }
                    
                    guard let responseData = data else {
                        debugPrint("No data received")
                        return
                    }
                    do {
                        //let s = String(data : responseData, encoding : String.Encoding.utf8)
                        //debugPrint(s!)
                        guard let jsonObject = try JSONSerialization.jsonObject(with: responseData, options: []) as? [String:Any] else {
                            debugPrint("Error trying to convert data from JSON")
                            
                            return
                        }
                        
                        if let data = jsonObject["news"] as? [[String:Any]] {
                            
                            
                            var news : [NewsModel] = [NewsModel]()
                            
                            for rowData in data {
                                let n = NewsModel.getNews(from: rowData)
                                
                                if let imageUrl = URL(string: n.imageURL) {
                                    let urlContents =  try? Data(contentsOf: imageUrl)
                                    if let imageData = urlContents {
                                        n.imageData = imageData
                                    } else { print("No Image Data") }
                                } else {
                                    print("No Image")
                                }
                                
                                news.append(n)
                            }
                            
                            let oldNews = readFromFileNews()
                            var newNews = [NewsModel]()
                            
                            for rowData in news {
                                if !oldNews.contains(rowData) {
                                    newNews.append(rowData)
                                }
                            }
                            
                            
                            self.saveToFile(news: news)
                            
                            
                            for rowData in newNews {
                                let notification = UNMutableNotificationContent()
                                notification.title = "Actualite de l'ESISA"
                                notification.body = rowData.title
                                
                                notification.sound = UNNotificationSound.default()
                                let trigger = UNTimeIntervalNotificationTrigger(timeInterval: 1, repeats: false)
                                let request = UNNotificationRequest(identifier: "newsNotification", content: notification, trigger: trigger)
                                
                                UNUserNotificationCenter.current().add(request, withCompletionHandler: nil)
                            }
                             
                        } else {
                            print("Error While parsing result")
                        }
                        
                        
                        
                    } catch {
                        print("error trying to convert data to JSON")
                        
                        return
                    }
                }
                task.resume()
            } else {
                print("Wrong URL")
            }
        }
    }
    
    
    private static func convertDataFromJSON(data : [String:Any]) -> Absence{
        let a = Absence()
        
        a.id = data["id"] as! Int
        a.date = data["date"] as! String
        a.seance = data["seance"] as! String
        a.matiere = data["matiere"] as! String
        a.appel = data["appel"] as! String
        a.motif = data["motif"] as! String
        a.controle = data["controle"] as! String
        a.ide = self.etudiant.id
        return a
    }
    
}
