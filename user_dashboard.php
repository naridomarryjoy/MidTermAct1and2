<?php
// user_dashboard.php

echo "=== User Dashboard ===\n\n";

/* --------------------------
   Task 1: Profile & Dynamic Messages (Ternaries)
-------------------------- */
$username = "Joy";
$role = "member";         // options: administrator, moderator, member, guest
$isActive = true;
$isPremium = true;
$lastLoginDaysAgo = 2;

// Welcome message (ternary based on role)
$welcomeMessage = ($role === "administrator") 
    ? "Welcome back, Admin!" 
    : "Welcome back, $username!";

// Last login message (ternary based on days)
$loginMessage = ($lastLoginDaysAgo <= 1) 
    ? "You logged in recently." 
    : "It's been $lastLoginDaysAgo days since your last login.";

echo "Task 1: Profile & Messages\n";
echo $welcomeMessage . "\n";
echo $loginMessage . "\n\n";


/* --------------------------
   Task 2: Feature Access (If / Else If / Else)
-------------------------- */
echo "Task 2: Feature Access\n";

if (!$isActive) {
    echo "Your account is inactive. Please contact support.\n\n";
} elseif ($role === "administrator") {
    echo "You have full access to the system settings.\n\n";
} elseif ($role === "moderator") {
    echo "You can manage user posts and comments.\n";
    if ($isPremium) {
        echo "Premium features enabled for Moderator.\n\n";
    } else {
        echo "Upgrade to premium for more tools.\n\n";
    }
} elseif ($role === "member") {
    echo "You can browse and interact with content.\n";
    if ($isPremium) {
        echo "Premium content unlocked!\n\n";
    } else {
        echo "Consider upgrading to premium for more benefits.\n\n";
    }
} else {
    echo "You are logged in as a guest. Limited access only.\n\n";
}


/* --------------------------
   Task 3: Notification Preferences (Switch)
-------------------------- */
echo "Task 3: Notification Preferences\n";

$notificationPreference = "both";   // options: email, sms, both, none

switch ($notificationPreference) {
    case "email":
        echo "You will receive notifications via Email.\n";
        break;
    case "sms":
        echo "You will receive notifications via SMS.\n";
        break;
    case "both":
        echo "You will receive notifications via Email and SMS.\n";
        break;
    case "none":
        echo "You have disabled all notifications.\n";
        break;
    default:
        echo "Unknown preference. Please update your settings.\n";
        break;
}

?>
