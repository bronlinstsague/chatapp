<?php
     session_start();
     include_once "config.php";
     $email = mysqli_real_escape_string($conn, $_POST['email']);
     $password = mysqli_real_escape_string($conn, $_POST['password']);
     if(!empty($email) && !empty($password)){
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
        if(mysqli_num_rows(sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $users_pass = md5($password);
            $enc_pass = $row['password'];
            if($users_pass === $enc_pass){
                $status = "active now";
                $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
                if($sql2){
                    $_SESSION['unique_id'] = $row['unique_id'];
                    echo "success";
                }else{
                    echo "something went wrong. please try again!";
                }
            }else{
                echo "email or password is incorrect!";
            }
        }else{
            echo "$email - this email not exist!";
        }
     }else{
        echo "all input fields are required!";
     }
?>