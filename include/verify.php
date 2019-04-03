<?php
    require "db.php";
    
    function redirect($status) {
        if ($status){
            header("Location: ../index.php");
        } else {
            $_SESSION['LOGIN_FAILED'] = 'Incorrect Username or Password!';
            header("Location: ../login.php");
            exit;
        }
    }

    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (!empty($username) || !empty($password)){
            
            $username = stripcslashes($username);
            $password = stripcslashes($password);
            
            $result = $conn->query("SELECT username FROM user where username = '$username' and password = '$password'")
            or die("Failed to query database");
            
            $row = $result->fetch(PDO::FETCH_ORI_FIRST);
            
            if (!empty($row['username'])) {
                $_SESSION['UID'] = $row['username'];
                redirect(true);
            } else {
                redirect(false);
            }

        } else {
            redirect(false);
        }
    
    } else {
        header("Location: ../login.php");
    }
?>