<?php
/**
 * Class Home
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 */
class Home extends Controller
{

    /**
     * PAGE: index  
     */
    public function index()
    {
        error_reporting(0);
        header('Cache-Control: no cache'); //no cache
        session_cache_limiter('none'); // works
        //session_cache_limiter('public'); // works too
        
         if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {

            if(!isset($_SESSION)) 
            { 
                session_start(); 
            } 
            $_SESSION = array();

            session_destroy();

        }
        // load views
        require APP . 'views/templates/header.php';


        
        if( isset( $_SESSION['logged'] ) && $_SESSION['user_profile'] == 4 ){
            require APP . 'views/home/IndexStudent.php';
        }
        else if( isset( $_SESSION['logged'] ) && $_SESSION['user_profile'] == 2 )
        {
            $submitedCourses = $this->CourseModel->submitedCourses();
            $professorCourses = $this->CourseModel->getProfessorCourses($_SESSION['user_id']);
       
            require APP . 'views/home/IndexProfessor.php';
        }
        // else if( isset( $_SESSION['logged'] ) && $_SESSION['user_profile'] == 3 ){
            // require APP . 'views/home/IndexSelectProf.php';
        // }
        else if( isset( $_SESSION['logged'] ) && $_SESSION['user_profile'] == 3 ){
            $submitedCourses = $this->CourseModel->submitedCourses();
            require APP . 'views/home/IndexSelectProf.php';
        }
        else{
            require APP . 'views/index.php';
        }
        
        require APP . 'views/templates/footer.php';
    }

    public function ChangeLanguage()
    {
        if( isset( $_GET['lang'] ) )
        {
            $_SESSION['lang'] = $_GET['lang'];
        }
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        
    }

}
