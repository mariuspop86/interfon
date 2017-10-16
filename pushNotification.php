<?php
    require_once('vendor/autoload.php');

    Pushpad\Pushpad::$auth_token = '8832869cbab4ab4890bca58bbad1c9b6';
    Pushpad\Pushpad::$project_id = 4567;

//    Pushpad\Pushpad::signature_for($current_user_id);

    $notification = new Pushpad\Notification(array(
        'title' => "Push notification", # optional, defaults to your project name, max 30 characters
        'body' => "Hello world!", # max 120 characters
        'target_url' => "http://www.9gag.com", # optional, defaults to your project website
        'icon_url' => "/home/training/Projects/IOT_Heroku/young-basin-74115/mic.png", # optional, defaults to the project icon
        'ttl' => 604800, # optional, drop the notification after this number of seconds if a device is offline
        'require_interaction' => true, # optional, prevent Chrome on desktop from automatically closing the notification after a few seconds
        'custom_data' => "123", # optional, a string that is passed as an argument to action button callbacks
        # optional, add some action buttons to the notification
        # see https://pushpad.xyz/docs/action_buttons
//        'actions' => array(
//            array(
//                'title' => "My Button 1", # max length is 20 characters
//                'target_url' => "http://example.com/button-link", # optional
//                'icon' => "http://example.com/assets/button-icon.png", # optional
//                'action' => "myActionName" # optional
//            )
//        ),
        'starred' => true # optional, bookmark the notification in the Pushpad dashboard (e.g. to highlight manual notifications)
    ));
//
//    # deliver to a user
//    $notification->deliver_to($user_id);
//
//    # deliver to a group of users
//    $notification->deliver_to($user_ids);
//
//    # deliver to some users only if they have a given preference
//    # e.g. only $users who have a interested in "events" will be reached
//    $notification->deliver_to($users, ["tags" => ["events"]]);
//
//    # deliver to segments
//    # e.g. any subscriber that has the tag "segment1" OR "segment2"
//    $notification->broadcast(["tags" => ["segment1", "segment2"]]);
//
//    # you can use boolean expressions
//    # they must be in the disjunctive normal form (without parenthesis)
//    $notification->broadcast(["tags" => ["zip_code:28865 && !optout:local_events || friend_of:Organizer123"]]);
//    $notification->deliver_to($users, ["tags" => ["tag1 && tag2", "tag3"]]); # equal to "tag1 && tag2 || tag3"

    # deliver to everyone
    $notification->broadcast();
