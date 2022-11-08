<?php
class User
{
    /*
     *  $db A PDO database connection
     */
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    public function registerUser($FirstName, $LastName, $UserName, $ProfileId){
        $_SESSION['g_message'] = '';
        
        $FirstName = trim($FirstName);
        $LastName = trim($LastName);
        $UserName = trim($UserName);
        
        $q=$this->db->prepare("call UsernameOrEmail_check ('".$UserName."')")->rowCount();

            if ($q > 0 ) {
                $_SESSION['g_message'] = 'Sorry, that username / email address is already taken.'; 

            } else {
               // write new user's data into database
                $q=$this->db->query("call addUser ('".$FirstName."', '".$LastName."', '".$UserName."', '".$ProfileId."')");
                $_SESSION['g_message'] = 'You have been registered successfully '; 
               
            }
    }


    public function loginUser($UsernameOrEmail, $Password){
	    $_SESSION['g_message'] = '';

        $UsernameOrEmail = trim($UsernameOrEmail);

        $q=$this->db->query("call authenticateUser ('".$_POST["UsernameOrEmail"]."')");
        $_SESSION['activity']=  date("h:i:sa");
        $password_check = array();
        while ($row = $q->fetch(PDO::FETCH_BOTH)) {
            $password_check[$row['Id']] = $row;
        }

        if (empty($password_check)){
            $_SESSION['g_message'] = 'Wrong User Details '; 
           
        }else{
            foreach ($password_check as $Id => $row ) {
                if (password_verify($Password, $row['PasswordHash']) ){
                    
                    // $q=$this->db->query("call authenticateUser ('".$_POST["UsernameOrEmail"]."')");
                    // $row=$q->fetchObject();
                    
                    //Log in the user here
                    $_SESSION['user_id']= $row['Id'];
                    $_SESSION['user_first']= $row['FirstName'];
                    $_SESSION['user_last']= $row['LastName'];
                    $_SESSION['user_email']= $row['Email'];
                    $_SESSION['user_username']= $row['UserName'];
                    $_SESSION['user_profile']= $row['ProfileId'];
                    $_SESSION['user_status']= $row['StatusId'];
                   

                    if($_SESSION['user_status']==2){
                         $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
                        
                        $_SESSION['logged']= 1;                
                    }else{
                        $_SESSION['g_message'] = 'You have not been confirmed yet '; 
                    }
                }else{
                    $_SESSION['g_message'] = 'Wrong User Details '; 
                   
                }
            }
        }
    }

    // Usernames passwords testing users ldap
     
    // Username, password
    // stud01, 9ohmHG31!
    // stud02, 8sVUHh55!
    // prof01, 7NYRWX36@
    // prof02, 9hYWVm50!
    public function ldaploginUser($UserNameLdap, $PasswordLdap)
    {
    
        // input : name=UserNameLdap , password=PasswordLdap
        $_SESSION['g_message'] = '';
        $UserNameLdap = trim($UserNameLdap);
    
        $adServer = "ldaps://ldap.isc.tuc.gr:636";
        // active directory DN (base location of ldap search)
        $ldap_dn = "OU=Domain User Accounts,DC=isc,DC=tuc,DC=gr";//"OU=Departments,DC=college,DC=school,DC=edu";

        // main domain
        $ldapDomain = "@isc.tuc.gr";

        ldap_set_option(NULL, LDAP_OPT_DEBUG_LEVEL, 7);
        // putenv('TLS_REQCERT=never');

        //active directory student group name
        $ldap_student_group = "student";
 
        //active directory professor group name
        $ldap_professor_group = "faculty";
       
        $ldap_staff_group = "staff";

        $ldap = ldap_connect($adServer);
        // echo "called ldap_connect <br />";

        // $errorCode = ldap_errno( $ldap );
        // echo "error code: $errorCode <br />";

        // $errorMsg = ldap_error( $ldap );
        // echo "error message: $errorMsg <br />";
        
        if (!$ldap)
            $_SESSION['g_message'] = 'Could not connect to LDAP server'; 
        else
        {
        
            // echo "ldap_connect returned a handle! <br />";


            // Usernames passwords testing users ldap
            // Username, password
            // stud01, 9ohmHG31!
            // stud02, 8sVUHh55!
            // prof01, 7NYRWX36@
            // prof02, 9hYWVm50!

            // $UserNameLdap1 = "stud02";
            // $PasswordLdap1 = "8sVUHh55!";


            $ldaprdn = $UserNameLdap . $ldapDomain;
            

            // configure ldap params
            ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
            ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);

            // if (!ldap_start_tls($ldap)) {
            //     echo "Could not start secure TLS connection <br />";
            // }
            // if(!ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3)){
            //     echo "Could not set LDAPv3 <br />";
            // }

            // BIND to LDAP server
            
        
            $bind = @ldap_bind($ldap, $ldaprdn, $PasswordLdap);
            
            // $errorCode2 = ldap_errno( $ldap );
            // echo "error code: $errorCode2 <br />";
            // $errorMsg2 = ldap_error( $ldap );
            // echo "error message: $errorMsg2 <br />";
        
            // verify user and password
            if ($bind) {

                $sr=ldap_search($ldap, $ldap_dn,"(&(objectClass=user)(sAMAccountName=$UserNameLdap))");
               
                // echo "Search result is " . $sr . "<br />";
                // echo "Number of entries returned is " . ldap_count_entries($ldap, $sr) . "<br />";
                // echo "Getting entries ...<p>";
                       
                // 4. Get Search Results
                $info = ldap_get_entries($ldap, $sr);
                // echo "Data for " . $info["count"] . " items returned:<p>";
            

                $q=$this->db->query("call authenticateUser ('".$_POST["UserNameLdap"]."')");
       

                // stud01, 9ohmHG31!
                // stud02, 8sVUHh55!
                // prof01, 7NYRWX36@
                // prof02, 9hYWVm50!
                $password_check = array();
                while ($row = $q->fetch(PDO::FETCH_BOTH)) {
                    $password_check[$row['Id']] = $row;
                }
               
                //If your are proff and your username does not exist in the database add it ...
                $notListedProff = 0;
                if(empty($password_check)){
                    //Change $ldap_student_group to $ldap_professor_group
                    if((!strcmp($info[0]["edupersonprimaryaffiliation"][0], $ldap_professor_group)) || (!strcmp($info[0]["edupersonprimaryaffiliation"][0], $ldap_staff_group)) ){
                        $notListedProff = 1;
                        $profId = 2;
                        $this->registerUser($info[0]["givenname"][0],$info[0]["sn"][0],$info[0]["samaccountname"][0],$profId);
                              
                        // $_SESSION['g_message'] = 'Εrror, your data has not been registered in the application database'; 
                    }
                }
		
                
                //If you are student
                $isStudent = 0;
                if(empty($password_check)){
                    //Change $ldap_professor_group to  $ldap_student_group 
                    if(!strcmp($info[0]["edupersonprimaryaffiliation"][0], $ldap_student_group)){
                        $isStudent=1;
                        //load student page....
	         	        //$_SESSION['g_message'] = 'Εrror, students do not have access to the application yet'; 
				        $_SESSION['user_profile']=4;
              			$_SESSION['user_username']= $UserNameLdap;
 				        $_SESSION['logged']= 1;
                    }
                }

                foreach ($password_check as $Id => $row ) {
                    
                    if( !$isStudent && !$notListedProff){
                        //Log in the user here
                        $_SESSION['user_id']= $row['Id'];
                        $_SESSION['user_first']= $row['FirstName'];
                        $_SESSION['user_last']= $row['LastName'];
                        // $_SESSION['user_email']= $row['Email'];
                        $_SESSION['user_username']= $row['UserName'];
                        $_SESSION['user_profile']= $row['ProfileId'];
                        // $_SESSION['user_status']= $row['StatusId'];
    
                        $_SESSION['logged']= 1;
                        $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

                    }      
                }

                // 5. Close Connection  
                ldap_close($ldap);

            } else {
                $_SESSION['g_message'] = 'Wrong User Details '; 
            }
        } 

    }

}
























