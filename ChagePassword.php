<?php
    if(isset($_POST['btnSubmit']))
    {
        $currentpassword = $_POST['currentpassword'];
        $newpassword = $_POST['newpassword'];
        $ConfirmPassword = $_POST['ConfirmPassword'];

        if($_POST['newpassword'] != $_POST['ConfirmPassword']){ 
            echo "Failed! Passwords do not match. Please try again.";
        }
        else{
            $length = strlen($_POST['newpassword']);
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+=-';
            $lengthCharacters = strlen($characters);

            if ($length >= 8)
            {
                $validChar = false;   // Initialize validChar flag
                for($i = 0; $i < $length; $i++){
                    $validChar = false;   // Reset validChar for each character
                    for($j = 0; $j < $lengthCharacters; $j++){
                        if($newpassword[$i] == $characters[$j]){
                            $validChar = true;
                            break;
                        }
                    }
                    if(!$validChar){
                        break;  // Break the loop if any invalid character is found
                    }
                }

                if($validChar){
                    echo "Password changed successfully.";
                }
                else {
                    echo "Invalid characters included!";
                }
            }
            else {
                echo "Password is too short!";
            }
        }
    }
?>




