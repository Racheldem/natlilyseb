<?php
session_start();
include("myConnect.php");
include("localFunctions.php");

$userNameError = $userPwdError = $wrongInfoError ="";
$userName = $userPwd = "";

if(isset($_POST['insert'])){

         $userName = test_input( $_POST['userName']);
         $userPwd = test_input($_POST['userPwd']);


    if( !empty($userName ) && !empty($userPwd )){
       
                $mySql = "SELECT Id, firstName, middleName, lastName, emailAddress, nationalId, myStatus FROM register WHERE emailAddress ='$userName' AND nationalId='$userPwd'";
                $myResult=$conn->prepare($mySql);
                $myResult->execute();
               if($myResult){

                    if($myResult->rowCount() > 0){
                        
                            $supData=$myResult->fetch(PDO::FETCH_ASSOC);
                            $myStatus = $supData['myStatus'];

                        if($myStatus=='Yes'){
                        
                            $clientName = $supData['firstName']. " ". $supData['middleName']. " ". $supData['lastName'];
                            $clientId = $supData['Id'];
                           
                            $_SESSION['clientName'] = $clientName;
                            $_SESSION['clientId'] = $clientId;
                                header("location:furtherInfo.php");
                        }else{
                            header("location:wait.php");

                        }
                }else{
                    $errorVar="wrongInfoError";
                    $errorMessage="Provide correct data";
                    checkEmptyness($errorVar, $errorMessage);    
                }
                
            }else{
                $errorVar="wrongInfoError";
                $errorMessage="Provide correct data";
                checkEmptyness($errorVar, $errorMessage);    
            }
        
            }else{
                if(empty($userName)){
                    $errorVar="userNameError";
                    $errorMessage="User Name field is empty";
                    checkEmptyness($errorVar, $errorMessage);      
                }
           
                if(empty($userPwd)){
                    $errorVar="userPwdError";
                    $errorMessage="Password field is empty";
                    checkEmptyness($errorVar, $errorMessage);      
                }
            }
   
    $conn=null;
}

?>

