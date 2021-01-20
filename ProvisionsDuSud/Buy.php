<!DOCTYPE HTML>
<html>

<?php

require 'head.php';
// Include config file
require_once "config.php";
    
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    
                
// Define variables and initialize with empty values
$first_name = $last_name = $email = $address = $total_price = $total_quantity = $total_code = "";
$first_name_err=$last_name_err=$email_err = $address_err = $total_price_err = $total_quantity_err = $total_code_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 

    // Validate First name
    if(empty(trim($_POST["first_name"]))){
        $first_name_err = "Please enter your First Name.";     
   
    } else{
        $first_name = trim($_POST["first_name"]);
    }
    
    // Validate last name
    if(empty(trim($_POST["last_name"]))){
        $last_name_err = "Please enter your Last Name.";     
   
    } else{
        $last_name = trim($_POST["last_name"]);
    }
	
	// Validate address
    if(empty(trim($_POST["address"]))){
        $address_err = "Please enter your address.";     
   
    } else{
        $address = trim($_POST["address"]);
    }
	
	// assign total price
    if(empty($_SESSION["total_price"])){
        $total_price_err = "Total price is empty.";     
   
    } else{
        $total_price = $_SESSION["total_price"];
    }
    
    // assign total quantity
    if(empty($_SESSION["total_quantity"])){
        $total_quantity_err = "Total quantity is empty.";     
   
    } else{
        $total_quantity = $_SESSION["total_quantity"];
    }
    
    // assign total code
    if(empty($_SESSION["total_code"])){
        $total_code_err = "Total code is empty.";     
   
    } else{
        $total_code = $_SESSION["total_code"];
    }
	
	
    // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter an email.";
    } else{
		if ((boolean)filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$email = trim($_POST["email"]);
		} else {
			$email_err = "Check your email format.";
		}
    }

    
    // Check input errors before inserting in database
    if(empty($last_name_err) && empty($first_name_err) && empty($email_err) && empty($address_err) && empty($total_price_err) && empty($total_quantity_err) && empty($total_code_err) ){
        
        // Prepare an insert statement
        $sql = "INSERT INTO tb_orders (first_name, last_name, email, address, total_price, total_quantity, total_code) VALUES (?, ?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssss", $param_first_name, $param_last_name, $param_email, $param_address, $param_total_price, $param_total_quantity, $param_total_code);
            
            // Set parameters
            $param_first_name = $first_name;
            $param_last_name = $last_name;
            $param_email = $email;
            $param_address = $address;
			$param_total_price = $total_price;
            $param_total_code =  $total_code;
            $param_total_quantity = $total_quantity;
            echo $last_name.'$$$$$$$$$$'.$first_name.'$$$$$$$$$$'.$email.'$$$$$$$$$$'.$address.'$$$$$$$$$$'.$total_price.'$$$$$$$$$$'.$total_code.'$$$$$$$$$$'.$total_quantity;
            echo $last_name_err.'$$$$$$$$$$'.$first_name_err.'$$$$$$$$$$'.$email_err.'$$$$$$$$$$'.$address_err.'$$$$$$$$$$'.$total_price_err.'$$$$$$$$$$'.$total_code_err.'$$$$$$$$$$'.$total_quantity_err;
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: Products.php");
            } else{
                echo "Something went wrong. Please try again later.";
                echo "Erreur :\n". $stmt->error;
            }

            // Close statement
            mysqli_stmt_close($stmt);
            
            //empty cart
            unset($_SESSION["cart_item"]);
        }
    }
    else{
        //echo $last_name_err.$first_name_err.$email_err.$address_err.$total_price_err;
        
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<div id="userForms">
    <div class="row">
    <div class="login-wrap">
    <div class="login-form"> 
    
        <h2>Order</h2>
        <p>Please fill this form to continue your order process.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($first_name_err)) ? 'has-error' : ''; ?>">
                <label>First Name</label>
                <input type="text" name="first_name" class="form-control" value="<?php echo $first_name; ?>">
                <span class="help-block"><?php echo $first_name_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($last_name_err)) ? 'has-error' : ''; ?>">
                <label>Last Name</label>
                <input type="text" name="last_name" class="form-control" value="<?php echo $last_name; ?>">
                <span class="help-block"><?php echo $last_name_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                <label>Address</label>
                <input type="text" name="address" class="form-control" value="<?php echo $address; ?>">
                <span class="help-block"><?php echo $address_err; ?></span>
            </div> 
	
            <div class="form-group">
                <input type="submit" class="btn btn-success " value="Submit">
            </div>
            
        </form>
        </div>
        </div>
    </div>
    </div> 
    
    <?php 
    } else {
    ?> 
     <p>Already have an account? <a href="LogIn.php">Login here</a>.</p>
     <?php }
    ?>  
</body>
</html>