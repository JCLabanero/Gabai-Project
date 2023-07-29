<?php

Class Gabai {
    private $server = "mysql:host=localhost;dbname=gabai_database";
    private $user = "root";
    private $pass = "";
    private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
    protected $con;

    public function openConnection()
    {
        try {
            $this->con = new PDO($this->server, $this->user, $this->pass, $this->options);
            return $this->con;
        } catch (PDOException $e) {
            echo "There is some problem Connecting to the Database:" . $e->getMessage();
        }
    }

    public function closeConnection()
    {
        $this->con = null;
    }

    public function show_404()
    {
        if(isset($_POST['submit'])){

            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $access = 'admin';
            

        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM user WHERE email = ? AND password = ? AND access = ?");
        $stmt->execute([$email,$password,$access]);
        $user = $stmt->fetch();
        $total = $stmt->rowCount();

        if($total > 0){
            echo '<script type="text/javascript">';
            echo ' alert("Log in Success")';  //not showing an alert box.
            echo '</script>';
            $this->set_userdata($user);
            header('Location: ../Admin-UI/admin-homepage.php');

        } else {
            echo '<script type="text/javascript">';
            echo ' alert("Log in Failed!")';  //not showing an alert box.
            echo '</script>';
        }



        }
    }

    public function set_userdata($array)
    {
        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['userdata'] = array(
                "fullname" => $array['first_name']." ".$array['last_name'],
                "access" => $array['access']
        );

        return $_SESSION['userdata'];
    }
    public function get_userdata()
    {
        if (!isset($_SESSION)) {
            session_start();
        }

        if (isset($_SESSION['userdata'])) {
            return $_SESSION['userdata'];
        } else {
            return null;
        }
    }
    public function log_out()
    {
        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['userdata'] = null;
        unset($_SESSION['userdata']);
    }
    public function check_email_exist($email)
    {
        $email = $_POST['email'];

        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM gabai_user WHERE email = ?");
        $stmt->execute([$email,]);
        $total = $stmt->rowCount();

        return $total;
    }


    public function admin_register()
    {
        if (isset($_POST['register'])) {

            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $cnfirm = md5($_POST['confirm']);
            $access = "admin";


        if($this->check_email_exist($email) == 0){
            $connection = $this->openConnection();
            $stmt = $connection->prepare("INSERT INTO user(`first_name`,`last_name`,`email`,`password`,`access`)
            VALUE (?,?,?,?,?)");
            $stmt->execute([$fname,$lname,$email,$password,$access]);
            header('Location: ../Admin-UI/admin-success-register.php');

            }else {
                echo '<script type="text/javascript">';
                echo ' alert("Email already taken.")';  //not showing an alert box.
                echo '</script>';
            }
        }

    }
    public function user_login()
    {
        if (isset($_POST['login'])) {

            $email = $_POST['user-email'];
            $password = md5($_POST['user-password']);
            $access = 'user';
            

        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM user WHERE email = ? AND password = ? AND access = ?");
        $stmt->execute([$email,$password,$access]);
        $user = $stmt->fetch();
        $total = $stmt->rowCount();

        if($total > 0){
            echo '<script type="text/javascript">';
            echo ' alert("Log in Success")';  //not showing an alert box.
            echo '</script>';
            $this->set_userdata($user);
            header('Location: ./User-UI/user-homepage.php');

        } else {
            echo '<script type="text/javascript">';
            echo ' alert("Log in Failed!")';  //not showing an alert box.
            echo '</script>';
        }
        }
    }
    public function user_check_email_exist($email)
    {
        $email = $_POST['email'];

        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM gabai_user WHERE email = ?");
        $stmt->execute([$email,]);
        $total = $stmt->rowCount();

        return $total;
    }
    public function user_register()
    {
        if (isset($_POST['register'])) {

            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $confirm = md5($_POST['confirm']);
            $access = "user";

            if( empty($fname) && empty($lname) && empty($email) && empty($password)&& empty($confirm)){
                    echo "<div class='alert alert-danger justify-content-center' style='text-align: center;' role='alert'>
                    <strong> Cannot be Empty!</strong></div>";

            }else   {
            if($password !== $confirm ){
                echo "<div class='alert alert-danger justify-content-center' style='text-align: center;' role='alert'>
                    <strong> Password is not Matched</strong></div>";

        if($this->user_check_email_exist($email) == 0){
            $connection = $this->openConnection();
            $stmt = $connection->prepare("INSERT INTO user(`first_name`,`last_name`,`email`,`password`,`access`)
            VALUE (?,?,?,?,?)");
                $stmt->execute([$fname, $lname, $email, $password, $access]);
                echo '<script type="text/javascript">';
                echo ' alert("Succesfully Register.")';  //not showing an alert box.
                echo '</script>';

            }else {
                echo '<script type="text/javascript">';
                echo ' alert("Cannot be Empty.")';  //not showing an alert box.
                echo '</script>';
                
            }
        }

    }

    
}
$gabai = new Gabai();
