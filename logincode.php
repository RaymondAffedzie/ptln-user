<?php
include('security.php');

// login
    if(isset($_POST['login'])){

        function validate_email($user){
            $user = filter_var($user, FILTER_VALIDATE_EMAIL);
            $user = filter_var($user, FILTER_SANITIZE_EMAIL);
            return $user;
        }

        $email_login = mysqli_real_escape_string($connection, validate_email($_POST['email']));
        $password_login = mysqli_real_escape_string($connection, $_POST['password']);

        $query = "SELECT * FROM members WHERE email = '$email_login'";
        $query_run = mysqli_query($connection, $query);

        if(mysqli_num_rows($query_run) ===  1){

            $row = mysqli_fetch_array($query_run);
            $status = $row['status'];
            $db_password = $row['password'];

            if($status !== "Active"){

                $_SESSION['warning'] = "Sorry you have been disabled!<br>Contact any senior Administrator for help.";
                header('Location: login.php');
                
            }else{
                if(password_verify($password_login, $db_password)){
                   
                    $userspswd    =  password_verify($password_login, $db_password);
                    $users_id     = $row['member_id'];
                    $users_email  = $row['email'];
                    $fname        = $row['firstname'];
                    $sname        = $row['surname'];
                    $phone_nubmer = $row['phone_number'];
                    
                    $_SESSION['users'] = [
                        'users_id'   => $users_id,
                        'users_email'=> $users_email,
                        'pswd'       => $userspswd,
                        'fname'      => $fname,
                        'sname'      => $sname,
                        'phonenumber'=> $phone_nubmer,
                    ];
                    
                    header('Location: index.php');
                }else{
                    $_SESSION['status'] = "Incorrect password";
                    header('Location: login.php');
                }
            }

        }else{
            $_SESSION['status'] = "Invalid username or email";
            header('Location: login.php');
        }
   }
