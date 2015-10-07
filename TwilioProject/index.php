
 <html><body>
 <h1> Vitamin Message </h1>
 <?php
    /* Send an SMS using Twilio. You can run this file 3 different ways:
     *
     * - Save it as sendnotifications.php and at the command line, run 
     *        php sendnotifications.php
     *
     * - Upload it to a web host and load mywebhost.com/sendnotifications.php 
     *   in a web browser.
     * - Download a local server like WAMP, MAMP or XAMPP. Point the web root 
     *   directory to the folder containing this file, and load 
     *   localhost:8888/sendnotifications.php in a web browser.
     */
 
    // Step 1: Download the Twilio-PHP library from twilio.com/docs/libraries, 
    // and move it into the folder containing this file.
    require "Services/Twilio.php";
 
    // Step 2: set our AccountSid and AuthToken from www.twilio.com/user/account
    $AccountSid = "ACddc5d91fd7e1f12ff81dc7bd4b60d2dd";
    $AuthToken = "fa3cafebfa909398611530ad90dc4957";
 
    // Step 3: instantiate a new Twilio Rest Client
    $client = new Services_Twilio($AccountSid, $AuthToken);
 
    // Step 4: make an array of people we know, to send them a message. 
    // Feel free to change/add your own phone number and name here.
    $people = array("+15515879364" => "Harshada Gothankar","+18455585168" => "Andrew Greenberg", "+15512241526" => "Mukesh Phanse", "+19142991173" => "Fabian Patino", "+17188665655" => "Indrani Mohankumar", "+17168686432" => "Keerthana Gambiraopet", "+19172164313" => "Dr. Scharff",
					
        
        
    );
  //  global $ans; 
     // Step 5: Loop over all our friends. $number is a phone number above, and 
    // $name is the name next to it
    
  //  $people = array("+15515879364" => "Harshada Gothankar",);
 global $name,$ans, $response;

	// if the sender is known, then greet them by name
	// otherwise, consider them j		ust another monkey

          $body = $_REQUEST['Body'];
/* Remove formatting from $body until it is just lowercase characters without punctuation or spaces. */
$result = preg_replace("/[^A-Za-z0-9]/u", "", $body);
$result = trim($result);
$result = strtolower($result);
$response="Please try again";
$ans ='Try again...';
/* ##Router## */
switch ($result) {
    case 'vita':
       $ans= vitA();
        break;
    case 'vitd':
        $ans=vitD();
        break;
    case 'vite':
        vitE();
        $ans=vitE();
		break;
    case 'vitk':
        $ans=vitK();
        break;
	case 'vitc':
        $ans=vitC();
        break;
	case 'vitb1':
       $ans= vitB1();
        break;
	case 'vitthiamine':
        $ans=vitThiamine();
        break;
	case 'vitriboflavin':
       $ans= vitRiboflavin();
        break;
	case 'vitb2':
        $ans=vitb2();
        break;
	case 'vitniacin':
       $ans= vitNiacin();
        break;
	case 'vitb3':
        $ans=vitB3();
        break;
	case 'vitb5':
        $ans=vitB5();
        break;
	case 'vitpantothenicacid':
        $ans=vitPantothenicacid();
        break;
	case 'vitpyridoxine':
       $ans= vitPyridoxine();
        break;
	case 'vitb6':
       $ans= vitB6();
        break;
	case 'vitpantothenicacid':
       $ans= vitPantothenicacid();
        break;
	case 'vitfolicacid':
       $ans= vitFolicAcid();
        break;
	case 'vitb12':
       $ans= vitB12();
        break;
	case 'vitbiotin':
       $ans= vitBiotin();
		break;
	case 'vitcholine':
       $ans= vitCholine();
		break;

    /* Add new routing logic above this line. */
    default:
      $ans=  index();
}

 //<?php
// TODO: People want tracking on keywords.
/**
 * Include twilio-php, the offical Twilio PHP Helper Library, which can be found at
 * http://www.twilio.com/docs/libraries
 */
//include('Services/Twilio.php');
/* ## Controller ## */
function index(){
	//$response = new Services_Twilio_Twiml();
	$response = "I'm sorry, that vitamin is currently not in our database or was misspelt. Please try again. Ex: vit B2, vitB3";
	return $response;
}

function vitA(){
	//$response = new Services_Twilio_Twiml();
	$response = "Carrots, sweet potatoes, dark leafy greens
Adults: Age 19+:
Males: 900 μg
Females: 700 μg
Infants/children: ( below 18)
boys years : 900 μg
girls years : 700 μg";
	return $response;
}
function vitD(){
	//$response = new Services_Twilio_Twiml();
	$response = "Fish, cheese, eggs
Adults:
Age 19–70: 15μg/600 IU
 Age 70+: 20μg/800 IU
Infants /children:
0-12 months: 10μg/400 IU*
1–18 years: 15μg/600 IU";
	return $response;
}
function vitE(){
	//$response = new Services_Twilio_Twiml();
	$response = "Almonds, raw seeds, spinach
Adults:19+ years: 15mg
Infants:
0–6 months: 4mg
7–12 months: 5mg
1–3 years: 6mg
4–8 years: 7mg
9–13 years: 11mg
14–18 years: 15mg";
	return $response;
}
function vitK(){
	//$response = new Services_Twilio_Twiml();
	$response = "Green Leafy Vegetables:Spinach
Adults: 19+ years:
Males: 120 μg
Females: 90 μg
Infants/children:
14–18 years (boys):    120 μg
14–18 years (girls): 75 μg";
	return $response;
	}

function vitC(){
	//$response = new Services_Twilio_Twiml();
	$response = "Citrus fruits (orange, lime), strawberries
Adults (> 19 years):
Males: 90mg
Females: 75mg
Infants/children: (*)
14–18 years (boys): 75mg
14–18 years (girls): 65mg";
	return $response;
	}

function vitB1(){
	//$response = new Services_Twilio_Twiml();
	$response = "pork and ham, eel, tuna, whole grain bread
Adults > 19 years
Males: 1.2mg
Females: 1.1mg
Infants/children
14–18 years (boys): 1.2 mg
14–18 years (girls): 1.1 mg";
	return $response;
	}

function vitThiamine(){
	//$response = new Services_Twilio_Twiml();
	$response = "pork and ham, eel, tuna, whole grain bread
Adults > 19 years
Males: 1.2mg
Females: 1.1mg
Infants/children
14–18 years (boys): 1.2 mg
14–18 years (girls): 1.1 mg";
	return $response;
	}

function vitRiboflavin(){
	//$response = new Services_Twilio_Twiml();
	$response = "Cheese, Almonds, Beef, Lamb
Adults (ages 19+):
Males: 1.3mg
Females: 1.1mg
children: (*)
14–18 years (boys): 1.3mg
14–18 years (girls): 1.0mg";
	return $response;
	}

function vitB2(){
	//$response = new Services_Twilio_Twiml();
	$response = "Cheese, Almonds, Beef, Lamb
Adults (ages 19+):
Males: 1.3mg
Females: 1.1mg
children: (*)
14–18 years (boys): 1.3mg
14–18 years (girls): 1.0mg";
	return $response;
	}

function vitNiacin(){
	//$response = new Services_Twilio_Twiml();
	$response = "Tuna, Chicken, Turkey
Adult >age 14: 17mg
children: (*)
0–12 months: 3.0mg
1–8 years: 7.0mg
9–13 years (boys): 12.0mg";
	return $response;
	}

function vitB3(){
	//$response = new Services_Twilio_Twiml();
	$response = "Tuna, Chicken, Turkey
Adult >age 14: 17mg
children: (*)
0–12 months: 3.0mg
1–8 years: 7.0mg
9–13 years (boys): 12.0mg";
	return $response;
	}

function vitB5(){
	//$response = new Services_Twilio_Twiml();
	$response = "Avocado, Broccoli, Kale
Adults (ages 19+): 5.0mg
children: (*)
0–12 months: 1.7mg
1–8 years: 2.5mg
9–13 years (boys): 4.0mg
14–18 years (boys): 5.0mg
";
	return $response;
	}

function vitPantothenicacid(){
	//$response = new Services_Twilio_Twiml();
	$response ="Avocado, Broccoli, Kale
Adults (ages 19+): 5.0mg
children: (*)
0–12 months: 1.7mg
1–8 years: 2.5mg
9–13 years (boys): 4.0mg
14–18 years (boys): 5.0mg";
	return $response;
	}

function vitPyridoxine(){
	//$response = new Services_Twilio_Twiml();
	$response = "Meat, fish, poultry
Adults:
Ages 19–50: 1.3mg
Age 51+ : 1.6mg
children:
0–12 months: 2.5 mg
1–8 years: 0.5mg
9–13 : 1.0mg
14–18 years : 1.3mg";
	return $response;
	}

function vitB6(){
	//$response = new Services_Twilio_Twiml();
	$response = "Meat, fish, poultry
Adults:
Ages 19–50: 1.3mg
Age 51+ : 1.6mg
children:
0–12 months: 2.5 mg
1–8 years: 0.5mg
9–13 : 1.0mg
14–18 years : 1.3mg";
	return $response;
	}

function vitFolicAcid(){
	//$response = new Services_Twilio_Twiml();
	$response = "Lentils, dried beans, dark green vegetables (spinach)
Adults (ages 19+): 400 µg
Infants/children: (*)
0–12 months: 80 µg
1–8 years: 180 µg
9–18 years: 350 µg";
	return $response;
	}

function vitB12(){
	//$response = new Services_Twilio_Twiml();
	$response = "Beef liver, shellfish, eggs
Adults (ages 19+): 2.4 µg
Infants/children:
0–12 months: 0.5 µg
1–4 years: 0.9 µg
4–8 years: 1.2 µg
9–13 years: 1.8 µg
4–18 years: 2.4 µg";
	return $response;
	}
function vitBiotin(){
	//$response = new Services_Twilio_Twiml();
	$response = "Eggs, Almonds, peanuts
Adults (ages 19+):30 µg
Infants/children:
0–12 months: 6µg
1–3 years: 8 µg
4–8 years: 12µg
9–13 years: 20µg
14–18 years: 25 µg";
	return $response;
	}

function vitCholine(){
	//$response = new Services_Twilio_Twiml();
	$response = "Beef liver,Legumes, cauliflower
Adults(ages 19+)
Men: 550mg
Women 425mg
Infants/children:
0-12months: 200mg
1–8 years: 230mg
9–13 years: 375mg
14–18 years:500mg";
	return $response;
}

	

	
	

    foreach ($people as $number => $name) {
 
        $sms = $client->account->messages->sendMessage(
 
        // Step 6: Change the 'From' number below to be a valid Twilio number 
        // that you've purchased, or the (deprecated) Sandbox number
            "+12017304988", 

            // the number we are sending to - Any phone number
            $number,
 
            // the sms body
          //  "Hello from CS6432015 from Mukesh Phanse!"
        $ans
          
        );
 
        // Display a confirmation message on the screen
        echo "Enter Vitamin...";
    }
    
    // now greet the sender
	header("content-type: text/xml");
	echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
	print ('<?xml version="1.0" encoding="UTF-8" ?> <Response> <Message>' . $ans . '</Message> </Response>');
	
    
    
    ?>
    </body></html>