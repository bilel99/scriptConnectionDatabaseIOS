//
//  ConnectToDBAppDelegate.h
//  ConnectToDB
//
//  Created by Ghalia Al-rajban on 7/31/11.
//  Copyright 2011 iGhalia. All rights reserved.
//

#import <UIKit/UIKit.h>

@interface ConnectToDBAppDelegate : NSObject <UIApplicationDelegate>

@property (nonatomic, strong) IBOutlet UIWindow *window;
// create property for text field:
@property (nonatomic, strong) IBOutlet UITextField *txtName;
// create ibaction for insert button:
- (IBAction)insert:(id)sender;
@end
