<html lang="en">
 <head>
    <title>CS312 (Fall 2021) - Office Hours Status Tool</title>

  <meta charset="UTF-8">
<meta name="description" content="CS312 (Fall 2021) - Office Hours Status Tool">
<meta name="keywords" content="utcs, cs312, omeed tehrani, ut, austin, design, cs312, office hours, status, omeed ">
<meta name="author" content="Omeed Tehrani">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="robots" content="index, follow">
<link rel="shortcut icon" href="favicon.ico">
     <style>
      html * {
        
        color: black;
        font-family: Tahoma, sans-serif;

      } 
    </style>


    <div style = "background-color: #BF5700; ">
        <hr>
     <h1 style = "color: white; margin-left: 15px;"> CS312 (Fall 2021) - Office Hours Status Tool </h1>
     <h2 style = "color: white; margin-left: 15px;"> <?php  
          echo "TODAY'S DATE: " . date("Y/m/d") . "<br>";
          echo "THE CURRENT TIME: " . date("h:i:sa");
           ?> 
     </h2>
     <hr>
    </div>
 
    <link rel="stylesheet" href="./style.css">
    <meta name="viewport" content="width=device-width, initial-scale=.5, shrink-to-fit=yes">
 </head>

<!--  <body background = "images/rough_white.jpeg" opacity = .5>-->

<!--  <body style = "background-color: #484848">
 -->
 <body style = "border: 5px;">

   <!-- partial:index.partial.html -->
<div class="text">
    
   
    </div>
  

  </div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js'></script><script  src="./script.js"></script>

     <br>
       <p style = "font-size: 20px; margin-left: 25px"> 
 Welcome to the Office Hour's tracking website! This is a webpage built with HTML, JavaScript and PHP to live update based on the current active Office Hour. Anytime you are unsure, just bookmark and click this page for a quick status update! Feel free to email me if there are bugs or issues. Happy Learning!
 </p>
    <!-- <img class="img" src="https://cns.utexas.edu/images/CNS/Deans_Office/Communications/images/download_logos/NS_RGB_formal_Computer_Science.png" /> -->
     <br>
  
 <br>
 <hr>
         <div style = "border: 5px; border-radius: 30%; margin-left: 10%; margin-right: 10% " class="container">

<h2> What's the status? </h2>
 

<?php
$timeinhour = date("H");   // get time in 24-hour format
$dayis = date("D");     //Get day in string format - eg: Mon Sun etc
$omeed_image='https://media-exp1.licdn.com/dms/image/C4D03AQFc9gAzr8tr8g/profile-displayphoto-shrink_200_200/0/1629409843822?e=1635379200&v=beta&t=NKWOSnnJju1UaaJlWgBbPBN0fEk0cB0UP_wbRWW21dc';

//Compare your logic as required
// time between Sun 5:00 AM to Monday 4:59AM

// If the day is MONDAY and the TIME is 11:00 am...
// AND 
// If the day is MONDAY and the TIME is LESS than 12:00 pm...
// Meaning the time is between Monday 11:00 AM to Monday 11:59 am

if (($dayis = "Mon" && $timeinhour >= 11 ) && ($dayis = "Mon" && $timeinhour < 12))  
{

echo " <br> ";
echo " <br> ";
echo " <h2> CURRENT OFFICE HOUR FORMAT:</h2> Online";
echo " <h2> CURRENT OFFICE HOUR TA:</h2> Omeed";
echo " <h2> TA EMAIL:</h2> omeed@cs.utexas.edu";
echo " <h2> CURRENT OFFICE HOUR TIME:</h2> 2:00 pm to 3:00 pm";
echo '<h2> What does this TA look like?</h2> <img src="https://media-exp1.licdn.com/dms/image/C4D03AQFc9gAzr8tr8g/profile-displayphoto-shrink_200_200/0/1629409843822?e=1635379200&v=beta&t=NKWOSnnJju1UaaJlWgBbPBN0fEk0cB0UP_wbRWW21dc" />';
echo " <br> ";


// header( 'Location: oh.html'); //forward to the desired link

}
else if (($dayis = "Mon" && $timeinhour >= 5 ) && ($dayis = "Mon" && $timeinhour < 6))
{

echo " <h2> CURRENT OFFICE HOUR FORMAT:</h2> Third Floor GDC";
echo " <h2> CURRENT OFFICE HOUR TA:</h2> Omeed";
echo " <h2> TA EMAIL:</h2> omeed@cs.utexas.edu";
echo " <h2> CURRENT OFFICE HOUR TIME:</h2> 5:00 pm to 6:00 pm";
echo '<h2> What does this TA look like?</h2> <img src="https://media-exp1.licdn.com/dms/image/C4D03AQFc9gAzr8tr8g/profile-displayphoto-shrink_200_200/0/1629409843822?e=1635379200&v=beta&t=NKWOSnnJju1UaaJlWgBbPBN0fEk0cB0UP_wbRWW21dc" />';
echo " <br> ";

} 
// Covers Tuesday, 10:00 am to 10:59 am
else if (($dayis = "Tue" && $timeinhour >= 10 ) && ($dayis = "Tue" && $timeinhour < 11))
{

echo " <h3> CURRENT OFFICE HOUR FORMAT:</h3> <p>Online</p>";
echo " <h3> CURRENT OFFICE HOUR TA:</h3> Omeed";
echo " <h3> TA EMAIL:</h3> omeed@cs.utexas.edu";
echo " <h3> CURRENT OFFICE HOUR TIME:</h3> 10:00 am to 11:00 am";
echo '<h3> What does this TA look like?</h3> <img src="https://media-exp1.licdn.com/dms/image/C4D03AQFc9gAzr8tr8g/profile-displayphoto-shrink_200_200/0/1629409843822?e=1635379200&v=beta&t=NKWOSnnJju1UaaJlWgBbPBN0fEk0cB0UP_wbRWW21dc" />';
echo " <br> ";

} else {


echo " <h1> OH NO! </h1>";
echo " <h2> It looks like there are no Office Hours currently available.</h2>";
echo " <h2> Try out Piazza public/private posting!</h2>";
echo ' <img src="https://p.kindpng.com/picc/s/11-112103_sad-but-relieved-face-icon-icon-of-sad.png" />';
echo " <br> ";

// echo $dayis;
// echo $timeinhour;
}
?>

<br>
<br>
<br>
<br>
</div>
<br>
<hr>


 </body>
</html>


