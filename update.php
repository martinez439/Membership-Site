<?php
session_start();
require_once "db.php";


$plan_err = "";

var_dump($_POST['update']);
var_dump($_POST);

if(isset($_POST['update'])){
    // Get hidden input value
    $userid = $_POST['user_email'];
    $planType = $_POST['plan_type'];
    

        $sql = "UPDATE users SET plan_type=:plan_type WHERE email=:email";
 
        if($stmt = $pdo->prepare($sql)){
            
            $stmt->bindParam(':email', $userid);
            $stmt->bindParam(':plan_type', $planType);
            
         
            if($stmt->execute()){
                // Record(s) updated successfully. Redirect to landing page
                header("location: helloworld.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        // Close statement
        unset($stmt);
    }
    // Close connection
    unset($pdo);
} 
?>

