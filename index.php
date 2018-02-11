<?php
session_start();
if(!empty($_POST["btn"])) {
  foreach($_POST as $key => $value){
    if(empty($value))
        $error_message = "All fields are Required";
} 
  
    
  if (empty($_POST["Phone"])) {
   $error_message = "Phone is Required";
  }
  else {
    if(!(preg_match('/^\d{10}$/', $_POST['Phone'])))
    {
      $error_message = "Phone is Wrong";
    }
  }
    
  if (empty($_POST["Gender"])) {
   $error_message = "Gender is Required";
  }
    if (empty($_POST["Aadhar"])) {
   $error_message = "Aadhar is Required";
  }
    else
    {
      if(!preg_match('/^[0-9]{12}$/', $_POST['Aadhar']))
    {
      $error_message = "Aadhar is Wrong";
    }
    }
  if (empty($_POST["password"])) {
   $error_message = "password";
  }

    
  
      

 
  
  
	
if(empty($error_message)){ 

$name = $_POST['firstName'];
$Age = $_POST['Age']; 
$Phone = $_POST['Phone'];
$Aadhar1 = $_POST['Aadhar'];
$Gender = $_POST['Gender'];
$_SESSION['name']=$_POST['firstName'];
$_SESSION['Age']=$_POST['Age']; 
$_SESSION['Phone']=$_POST['Phone']; 
$_SESSION['Aadhar']=$_POST['Aadhar']; 
$_SESSION['Gender']=$_POST['Gender']; 
$_SESSION['pass']=$_POST['password']; 
   
$pass=$_POST['password'];

$authKey = "197611Am3ackhfoE5a7ecc36";
//Multiple mobiles numbers separated by comma

//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "ABCDEF";
//Your message to send, Add URL encoding here.
$rndno=rand(1000, 9999);
$message = urlencode("otp number.".$rndno);
//Define route 
$route = "route=4";
//Prepare you post parameters
$postData = array(
'authkey' => $authKey,
'mobiles' => $Phone,
'message' => $message,
'sender' => $senderId,
'route' => $route
);
//API URL
$url="https://control.msg91.com/api/sendhttp.php";
// init the resource
$ch = curl_init();
curl_setopt_array($ch, array(
CURLOPT_URL => $url,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_POST => true,
CURLOPT_POSTFIELDS => $postData
//,CURLOPT_FOLLOWLOCATION => true
));
//Ignore SSL certificate verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//get response
$output = curl_exec($ch);
//Print error if any
if(curl_errno($ch))
{
echo 'error:' . curl_error($ch);
}
curl_close($ch);
$_SESSION['otp']=$rndno;
$_SESSION['login']="1";
header( "Location: otp.php" ); 

}


}

  
if(!empty($_POST["btn1"])) {

$pass=$_POST['form-password'];
$Phone=$_POST['form-username'];
$servername = "sql108.epizy.com";
$username = "epiz_21513852";
$password = "C5rSoZBV5a36";
$dbname = "epiz_21513852_shubham";

$conn = new mysqli($servername, $username, $password, $dbname);
  

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT * FROM Patients";

if($result = $conn->query($sql)){
    if($result->num_rows > 0){
        
        while($row = $result->fetch_array()){
          
          if((strcmp($row["Phone"],$Phone)==0) and (strcmp($row["Password"],$pass)==0)) { 
           $_SESSION['Aadhar']=$_POST['Aadhar'];
         header( "Location: choose.php" ); 
          }
            
            
          
                 
        }
    }
}
 
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Healthy Hospitals</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>
  <style>
    #10
    {
      {color: red;}
    }
    </style>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>SHack</strong></h1>
                            <div class="description">
                            	<p>
	                            	
                            	</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Login to our site</h3>
	                            		<p>Enter username and password to log on:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-lock"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
                                  <?php if(!empty($error_message1)) { ?>	
<div class="error-message1"><?php if(isset($error_message1)) echo $error_message1; ?></div>
<?php } ?>
				                    <form role="form" action="" method="post" class="login-form">
                                      
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Username</label>
				                        	<input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
				                        </div>
				                        <input type="submit"  value="Sign In" name="btn1" >
				                    </form>
			                    </div>
		                    </div>
		                
		                	
	                        
                        </div>
                        
                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>
                        	
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Sign up now</h3>
	                            		<p>Fill in the form to book your appointment:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
                                  <?php if(!empty($success_message)) { ?>	
<div class="success-message1"><?php if(isset($success_message)) echo $success_message; ?></div>
<?php } ?>
<?php if(!empty($error_message)) { ?>	
<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
<?php } ?>

				                    <form role="form" action="" method="post" class="registration-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-first-name">First name</label>
				                        	<input type="text" name="firstName" placeholder="Name..." class="form-first-name form-control" id="form-first-name">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-last-name">Age</label>
				                        	<input type="text" name="Age" placeholder="Age..." class="form-last-name form-control" id="form-last-name">
				                        </div>
				                        <div class="form-group">
				                        	
				                        	<input type="text" name="Phone" placeholder="Phone..." class="form-email form-control" id="form-email">
				                        </div>
                                       <div class="form-group">
				                        	
				                        	<input type="text" name="Aadhar" placeholder="Aadhar..." class="form-email form-control" id="form-email">
				                        </div>
                                       <div class="form-group">
				                        	
				                        	<input type="password" name="password" placeholder="Password..." class="form-email form-control" id="form-email">
				                        </div>
                                    
                                      
                                      <div>
	<input type="radio" name="Gender"  value="Male" <?php if(isset($_POST['Gender']) && $_POST['Gender']=="Male") { ?>checked<?php  } ?>><strong>Male</strong>
<input type="radio" name="Gender"   value="Female" <?php if(isset($_POST['Gender']) && $_POST['Gender']=="Female") { ?>checked<?php  } ?>><strong> Female</strong>
                                      </div>                           
				                      
                                      <div>
                                        <input type="submit"  name="btn" class="btn">
                                      </div>
                                        </form>
			                    </div>
                        	</div>
                        	
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">
        			
        			<div class="col-sm-8 col-sm-offset-2">
        				<div class="footer-border"></div>
        				
        			</div>
        			
        		</div>
        	</div>
        </footer>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
<a href="https://msg91.com/startups/?utm_source=startup-banner"><img src="https://msg91.com/images/startups/msg91Badge.png" width="120" height="90" title="MSG91 - SMS for Startups" alt="Bulk SMS - MSG91"></a>
    </body>

</html>