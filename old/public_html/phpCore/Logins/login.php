<?php
$title="logins"
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">-->
    <!--.....-->
    <link rel="icon" type="image/gif" href="../../demo/img/logotitle.png"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:300,400,600,700,300italic,400italic,600italic,700italic|Droid+Serif:400,400italic">
    <link rel="stylesheet" href="../../assets/fonts/novecento/stylesheet.css">
    <link rel="stylesheet" href="../../assets/icons/glyphicons/style.min.css">
    <link rel="stylesheet" href="../../assets/icons/font-awesome/font-awesome.min.css">
    
    <!-- Styles -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/style.min.css">
    <link rel="stylesheet" href="../../assets/css/theme-light.css">
    <link rel="stylesheet" href="../../assets/css/theme-dark.css">
    
    <!-- Plugins -->
    <link rel="stylesheet" href="../../assets/plugins/royalslider/royalslider.min.css">
    <link rel="stylesheet" href="../../assets/plugins/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="../../assets/plugins/mfp/jquery.mfp.css">
    <!--.....-->
    
    <!--<style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
        
    </style>-->
   
   <style type="text/css">
    #Login {
        background-color: white;  
        }
   
    #Login-button{
       width: 30%; 
        
    }
    #Logout-button{
      width: 30%;  
    }
    
    
    .section {
        border:1px;
        margin: auto;
        width: 50%;
        border: 3px grey;
        padding: 10px;
        }
    </style>
   
    
</head>

<!--********************login stuff******************************************-->
<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: page.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: page.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!--*************************************************************************-->

<!--********************login stuff******************************************-->
<body>
    <header class="site-header">
    
    	<div class="header-inner">
    
    		<div class="container">
    
    			<div class="row">
    
    				<div class="header-table col-xl-12">
    
    					<div class="brand">
    						<a href="#">
    							<img src="../../demo/img/logo.png" style="width:1500%;height:auto;">
    						</a>
    					</div>
              <nav class="main-nav">
                <a href="#" class="nav-toggle"></a>
                <ul class="nav">
                  <li><a href="../../index.html">Home</a></li>
                  <li><a href="../../index.html#about">Exit</a></li>
                </ul>
              </nav>
    				</div>
    			</div>
    		</div>
    	</div>
    
    </header>
    <br><br>
    <section id="Login" class="site-splash fullscreen">
      
    <div class="section">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input id= "Login-button" type="submit" class="btn btn-primary" value="Login">
                <a href="logout.php"><input id ="Logout-button" class="btn btn-primary" value="Logout"></a>
            </div>
            <!--p>Don't have an account? <a href="register.php">Sign up now</a>.</p>-->
        </form>
    </div> 
    </section>
</body>

<!--*************************************************************************-->
