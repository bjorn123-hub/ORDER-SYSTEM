<?php
 include "db-conn.php";

  if(isset($_POST['submit'])) {
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
   
        $sql ="SELECT * FROM user WHERE username = :username";
        $stm = $conn->prepare($sql);
        $stmt->execute([$uname]);

        if($stms->rowCount() > 0){
            $uname = $stm->fetch();

            // $username = $user['username'];
            // $password = $user['password'];
            // $fname = $user['fname'];
            // $id = $user['id'];
            // if($username === $uname){
              if(password_verify($pass, $password)){
                $_SESSION['id'] = $id;
                $_SESSION['fname'] = $fname;

                header("Location: home.php");
                exit;
              }
                
            // else {
            //     die("Invalid Username!");
            // }
        }
  }
?>