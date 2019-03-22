//
//  AppDelegate.swift
//  MyESISA5
//
//  Created by HARCHLI Chaymae on 23/05/2018.
//  Copyright © 2018 HARCHLI Chaymae. All rights reserved.
//

import UIKit
import UserNotifications

@UIApplicationMain
class AppDelegate: UIResponder, UIApplicationDelegate {

    var window: UIWindow?


    func application(_ application: UIApplication, didFinishLaunchingWithOptions launchOptions: [UIApplicationLaunchOptionsKey: Any]?) -> Bool {
        // Override point for customization after application launch.
        UIApplication.shared.setMinimumBackgroundFetchInterval(UIApplicationBackgroundFetchIntervalMinimum)
        
        UNUserNotificationCenter.current().requestAuthorization(options: [.alert, .badge, .sound]) { (granted, error) in
            
        }
        DispatchQueue.global(qos: .userInitiated).async {
            Tasks.backgroundFetchNews()
            //DispatchQueue.global(qos: .background).async {
                Tasks.fetchGalerie()
                Tasks.fetchSlides()
                Tasks.fetchConferences(path: "confESISA")
                Tasks.fetchFetes()
            //}
        }
        
        return true
    }

    func applicationWillResignActive(_ application: UIApplication) {
        // Sent when the application is about to move from active to inactive state. This can occur for certain types of temporary interruptions (such as an incoming phone call or SMS message) or when the user quits the application and it begins the transition to the background state.
        // Use this method to pause ongoing tasks, disable timers, and invalidate graphics rendering callbacks. Games should use this method to pause the game.
    }

    func applicationDidEnterBackground(_ application: UIApplication) {
        // Use this method to release shared resources, save user data, invalidate timers, and store enough application state information to restore your application to its current state in case it is terminated later.
        // If your application supports background execution, this method is called instead of applicationWillTerminate: when the user quits.
            NSLog("Application Did enter Background")
//        let defaults = UserDefaults.standard
//        defaults.removeObject(forKey: "etudiant")
        application.beginBackgroundTask {
            if InternetAvailability.isInternetAvailable() {
                NSLog("INTERNET AVAILABLE")
                let timer = Timer.scheduledTimer(withTimeInterval: 1.0, repeats: true) { (timer) in
                    DispatchQueue.global(qos: .background).async {
                        NSLog("BACKGROUND FETCH HEERE INSTEAD OF OTHER")
                        _ = Tasks.checkAbsences()
                        Tasks.backgroundFetchNews()
                        
                    }
                }
                timer.fire()
            } else {
                NSLog("NO INTERNET")
            }
        }

//        let timer = Timer.scheduledTimer(withTimeInterval: 1.0, repeats: true) { (timer) in
//            DispatchQueue.global(qos: .background).async {
//                Tasks.checkAbsences()
//
//        }
//        timer.fire()
    }

    func applicationWillEnterForeground(_ application: UIApplication) {
        // Called as part of the transition from the background to the active state; here you can undo many of the changes made on entering the background.
        DispatchQueue.global(qos: .userInitiated).async {
            Tasks.backgroundFetchNews()
        }
    }

    func applicationDidBecomeActive(_ application: UIApplication) {
        // Restart any tasks that were paused (or not yet started) while the application was inactive. If the application was previously in the background, optionally refresh the user interface.
    }

    func applicationWillTerminate(_ application: UIApplication) {
        // Called when the application is about to terminate. Save data if appropriate. See also applicationDidEnterBackground:.
    }

    
    func application(_ application: UIApplication, performFetchWithCompletionHandler completionHandler: @escaping (UIBackgroundFetchResult) -> Void) {
              DispatchQueue.global(qos: .background).async {
                NSLog("BACKGROUND FETCH HERE")
                Tasks.backgroundFetchNews()
                let result = Tasks.checkAbsences()
                if result{
                  completionHandler(.newData)
                 } else {
                    completionHandler(.noData)
                }
        }
    }
    

}

