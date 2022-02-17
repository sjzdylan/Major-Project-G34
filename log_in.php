<?php
session_start();
ob_start();
include('dbcon.php');
use Firebase\Auth\Token\Exception\InvalidToken;

if(isset($_POST['log_in']))
{
    $email = strip_tags($_POST['emailaddress']);
    $clearTextPassword = strip_tags($_POST['password']);

    try {
        $user = $auth->getUserByEmail($email);

        try {
            $signInResult = $auth->signInWithEmailAndPassword($email, $clearTextPassword);
            $idTokenString = $signInResult->idToken();

            try {
                $verifiedIdToken = $auth->verifyIdToken($idTokenString);
                $uid = $verifiedIdToken->claims()->get('sub');

                $claims = $auth->getUser($uid)->customClaims;
                if(isset($claims['admin']) == true)
                {   
                    $_SESSION['verified_admin'] = true;
                    $_SESSION['user_id'] = $uid;
                    $_SESSION['idTokenString'] = $idTokenString;
                }
                elseif($claims == null)
                {
                $_SESSION['user_id'] = $uid;
                $_SESSION['idTokenString'] = $idTokenString;
                }
                
                $hashedpassword = password_hash($clearTextPassword, PASSWORD_DEFAULT);

                $updateData = [
                    'password'=>$hashedpassword
                ];
                
                $ref_table = "userinfo/".$uid;
                $updatequery_result = $database->getReference($ref_table)->update($updateData);

               // $auth->setCustomUserClaims($uid, ['admin' => true]);

                $_SESSION['email'] = $email;
                
                header('location: 2faloginstatus.php');
               

            } catch (InvalidToken $e) {
                echo 'The token is invalid: '.$e->getMessage();
            } catch (\InvalidArgumentException $e) {
                echo 'The token could not be parsed: '.$e->getMessage();
            }
        }
        catch(Exception $e){
            $_SESSION = "Wrong Password";
            header('location: login.php');
            exit();
        }
        

    } 
    catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
        // echo $e->getMessage();
        $_SESSION = "Invalid Email Address";
        header('location: login.php');
        exit();
    }
    
}
else
{
    $_SESSION = "Not allowed";
    header('location: login.php');
    exit();
}

?>
