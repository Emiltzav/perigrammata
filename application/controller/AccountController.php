<?php
/**
 * Class Songs
 * This is a demo class.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class AccountController extends Controller
{
    public function register()   
    {
        $_SESSION['g_message'] = '';    
        
        if (isset($_POST["register"]) AND $_POST["register"] == "Register") {

            if (isset($_POST["AdminProfileId"]) AND $_POST["AdminProfileId"] == "1" && ($_POST['ProfileId'] == 1 || $_POST['ProfileId'] == 3) ) {

                //Error handlers  
                //Check if input characters are valid
                if (preg_match('/^[\p{Greek}\s\d a-zA-Z]+$/u', $_POST['UserName'])
                    && preg_match('/^[\p{Greek}\s\d a-zA-Z]+$/u', $_POST['FirstName'])
                    && preg_match('/^[\p{Greek}\s\d a-zA-Z]+$/u', $_POST['LastName'])
                    && !empty($_POST['ProfileId']) && !empty($_POST['AdminProfileId']) && !empty($_POST['Institution'])){
                    
                    $this->UserModel->registerUser($_POST["FirstName"],  $_POST["LastName"],   
                        $_POST["UserName"], $_POST["ProfileId"], $_POST["AdminProfileId"], $_POST["Institution"]);
                
                } else {
                    $_SESSION['g_message'] = 'There is an error. Please try again  '; 
                }
                header('location: ' . URL . 'home');      
            
            } else if (isset($_POST["AdminProfileId"]) AND $_POST["AdminProfileId"] == "2" && ($_POST['ProfileId'] == 1 || $_POST['ProfileId'] == 3)) {

                //Error handlers  
                //Check if input characters are valid
                if (preg_match('/^[\p{Greek}\s\d a-zA-Z]+$/u', $_POST['UserName'])
                    && preg_match('/^[\p{Greek}\s\d a-zA-Z]+$/u', $_POST['FirstName'])
                    && preg_match('/^[\p{Greek}\s\d a-zA-Z]+$/u', $_POST['LastName'])
                    && !empty($_POST['ProfileId']) && !empty($_POST['AdminProfileId']) && !empty($_POST['School'])){
                    
                    $this->UserModel->registerUser($_POST["FirstName"],  $_POST["LastName"],   
                        $_POST["UserName"], $_POST["ProfileId"], $_POST["AdminProfileId"], $_POST["School"]);
                
                } else {
                    $_SESSION['g_message'] = 'There is an error. Please try again  '; 
                }
                header('location: ' . URL . 'home');      
            
            } else if (isset($_POST["AdminProfileId"]) AND $_POST["AdminProfileId"] == "3" && ($_POST['ProfileId'] == 1 || $_POST['ProfileId'] == 3)) {

                //Error handlers  
                //Check if input characters are valid
                if (preg_match('/^[\p{Greek}\s\d a-zA-Z]+$/u', $_POST['UserName'])
                    && preg_match('/^[\p{Greek}\s\d a-zA-Z]+$/u', $_POST['FirstName'])
                    && preg_match('/^[\p{Greek}\s\d a-zA-Z]+$/u', $_POST['LastName'])
                    && !empty($_POST['ProfileId']) && !empty($_POST['AdminProfileId']) && !empty($_POST['Department'])){
                    
                    $this->UserModel->registerUser($_POST["FirstName"],  $_POST["LastName"],   
                        $_POST["UserName"], $_POST["ProfileId"], $_POST["AdminProfileId"], $_POST["Department"]);
                
                } else {
                    $_SESSION['g_message'] = 'There is an error. Please try again  '; 
                }
                header('location: ' . URL . 'home');      
            
            } else if (isset($_POST["AdminProfileId"]) AND $_POST["AdminProfileId"] == "4") {

                //Error handlers  
                //Check if input characters are valid
                if (preg_match('/^[\p{Greek}\s\d a-zA-Z]+$/u', $_POST['UserName'])
                    && preg_match('/^[\p{Greek}\s\d a-zA-Z]+$/u', $_POST['FirstName'])
                    && preg_match('/^[\p{Greek}\s\d a-zA-Z]+$/u', $_POST['LastName'])   
                    && !empty($_POST['ProfileId']) && !empty($_POST['AdminProfileId'])){
                    
                    $this->UserModel->registerUser($_POST["FirstName"],  $_POST["LastName"],   
                        $_POST["UserName"], $_POST["ProfileId"], $_POST["AdminProfileId"], 0);
                
                } else {
                    $_SESSION['g_message'] = 'There is an error. Please try again  '; 
                }
                header('location: ' . URL . 'home');         
               
            } else if (isset($_POST["ProfileId"]) && $_POST["ProfileId"] == "2" && !isset($_POST["AdminProfileId"])) {

                //Error handlers   
                //Check if input characters are valid
                if (preg_match('/^[\p{Greek}\s\d a-zA-Z]+$/u', $_POST['UserName'])
                    && preg_match('/^[\p{Greek}\s\d a-zA-Z]+$/u', $_POST['FirstName'])
                    && preg_match('/^[\p{Greek}\s\d a-zA-Z]+$/u', $_POST['LastName'])
                    && !empty($_POST['ProfileId'])){
                    
                    $this->UserModel->registerUser($_POST["FirstName"],  $_POST["LastName"],   
                        $_POST["UserName"], $_POST["ProfileId"], 0, 0);
                    
                } else {
                    $_SESSION['g_message'] = 'There is an error. Please try again  '; 
                }  
                header('location: ' . URL . 'home');

            }else{
                $_SESSION['g_message'] = 'There is an error. Please try again  '; 
                header('location: ' . URL . 'home');

            }  

        } else {
            //$_SESSION['g_message'] = 'There is an error. Please try again  '; 
            header('location: ' . URL . 'error1');
        }
    }

    public function login()
    {
        $_SESSION['g_message'] = '';

        if (isset($_POST["submit"]) AND $_POST["submit"] == "Login") {
            $UsernameOrEmail = $_POST["UsernameOrEmail"];
            $Password = $_POST["Password"];

            if (empty($UsernameOrEmail) || empty($Password)) {
                $_SESSION['g_message'] = 'Both Fields are required for Log In'; 
                   
            } else {
                
                $this->UserModel->loginUser($UsernameOrEmail,  $Password);
            }
            header('location: ' . URL . 'home/index');
        }
    }

    public function ldaplogin()
    {
        $_SESSION['g_message'] = '';
        
        if (isset($_POST["submit"]) AND $_POST["submit"] == "Login") {
            $UserNameLdap = $_POST["UserNameLdap"];
            $PasswordLdap = $_POST["PasswordLdap"];

            if (empty($UserNameLdap) || empty($PasswordLdap)) {
                $_SESSION['g_message'] = 'Both Fields are required for Log In'; 
                   
            } else {
                $this->UserModel->ldaploginUser($UserNameLdap,  $PasswordLdap);
        	 }
		header('location: ' . URL . 'home/index');

        }
    }

    public function doLogout()
    {
        if (isset($_POST["submit"]) AND $_POST["submit"] == "Logout") {
            // delete the session of the user
            
            if(!isset($_SESSION)) 
            { 
                session_start(); 
            } 
            $_SESSION = array();
            session_destroy();
        }
        header('location: ' . URL . 'home');
    }

}
