<?php
class Controller
{
    /*
     * Database Connection
     */
    public $db = null;
    /*
     * User,Course
     */
    public $UserModel = null;
    public $CourseModel = null;
    /*
     * Whenever controller is created, open a database connection too and load "the model".
     */
    function __construct()
    {
        session_start();
        $this->openDatabaseConnection();
        $this->loadModels();

        if( isset( $_SESSION['lang'] ) && $_SESSION['lang'] == 'en' )
        {
            require APP . 'config/languages/lang_en.php';
        }
        else
        {
            $_SESSION['lang'] = 'gr';
            require APP . 'config/languages/lang_gr.php';
        }
    }
    /*
     * Open the database connection with the credentials from application/config/config.php
     */
    private function openDatabaseConnection()
    {
        // set the (optional) options of the PDO connection. in this case, we set the fetch mode to
        // "objects", which means all results will be objects, like this: $result->user_name !
        // For example, fetch mode FETCH_ASSOC would return results like this: $result["user_name] !
        $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
        // generate a database connection, using the PDO connector
        $this->db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET, DB_USER, DB_PASS, $options);
    }
    /*
     * Loads the "model".
     */
    public function loadModels()
    {
        require APP . 'models/UserModel.php';
        require APP . 'models/CourseModel.php';
        // create new "model" (and pass the database connection)
        $this->UserModel = new User($this->db);
        $this->CourseModel = new Course($this->db);
    }
}