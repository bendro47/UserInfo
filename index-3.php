<?php
//set default values
$name = filter_input(INPUT_POST,'name');
 $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$phone = filter_input(INPUT_POST,'phone');
$message = 'Enter some data and click on the Submit button.';

//process
$action = filter_input(INPUT_POST, 'action');

switch ($action) {
    case 'process_data':
        $name = filter_input(INPUT_POST, 'name');
        $first_name= substr($name,0, 8);
        $last_name= substr($name,9);
        $email = filter_input(INPUT_POST, 'email');
        $phone = filter_input(INPUT_POST, 'phone');
    $part1= substr($phone,0,3);
    $part2= substr($phone, 3,3);
    $part3= substr($phone, 6);
    $format = $part2."-".$part3;
    $area= $part1;
        /*************************************************
         * validate and process the name
         ************************************************/
        // 1. make sure the user enters a name
        // 2. display the name with only the first letter capitalized

        /*************************************************
         * validate and process the email address
         ************************************************/
        // 1. make sure the user enters an email
        // 2. make sure the email address has at least one @ sign and one dot character

        /*************************************************
         * validate and process the phone number
         ************************************************/
        // 1. make sure the user enters at least seven digits, not including formatting characters
        // 2. format the phone number like this 123-4567 or this 123-456-7890

        /*************************************************
         * Display the validation message
         ************************************************/
        $message = "First Name: ". $first_name."\n".
                "Last Name: ". $last_name."\n"
                ."Email: ".$email."\n"
                ."Area Code: ". $area."\n"
                ."Phone: ".$format;

        break;
}
include 'string_tester.php';
?>
