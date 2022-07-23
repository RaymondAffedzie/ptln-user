<?php
session_start();
include('partials/connection.php');

function sanitize_user_input($data){
    $data = trim($data, " ");
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function valisantize_email($data){
    $data = filter_var($data, FILTER_VALIDATE_EMAIL);
    $data = filter_var($data, FILTER_SANITIZE_EMAIL);
    return $data;
}

// registration code
if (isset($_POST['register'])) {
    if (empty($_POST['firstname'])) {

        $_SESSION['warning'] = "Firstname is required";
        header('Location: be_part_of_us.php');
    } elseif (empty($_POST['surname'])) {

        $_SESSION['warning'] = "Surname is required";
        header('Location: be_part_of_us.php');
    } elseif (empty($_POST['email'])) {

        $_SESSION['warning'] = "Email is required";
        header('Location: be_part_of_us.php');
    } elseif (empty($_POST['phone_number'])) {

        $_SESSION['warning'] = "Phone Number is required";
        header('Location: be_part_of_us.php');
    } elseif (empty($_POST['password'])) {

        $_SESSION['warning'] = "Password is required";
        header('Location: be_part_of_us.php');
    } elseif (empty($_POST['con_password'])) {

        $_SESSION['warning'] = "Please confirm your password";
        header('Location: be_part_of_us.php');
    } else {

        $firstname          = sanitize_user_input(ucfirst($_POST['firstname']));
        $surname            = sanitize_user_input(ucfirst($_POST['surname']));
        $email              = valisantize_email($_POST['email']);
        $phone_number       = sanitize_user_input($_POST['phone_number']);
        $password           = sanitize_user_input($_POST['password']);
        $confirm_password   = sanitize_user_input($_POST['con_password']);
        $contact_means   = sanitize_user_input($_POST['contact_means']);
        $status = "Active";

        $email_query = "SELECT email FROM members WHERE email = '$email'";
        $email_query_run = mysqli_query($connection, $email_query);

        if (mysqli_num_rows($email_query_run)> 0) {
            while($row = mysqli_fetch_array($email_query_run)){
                $email_check = $row['email'];
                $phone_number_check = $row['phone_number'];
                if ($email === $email_check){
                    $_SESSION['warning'] = "E-mail is registered to another user";
                    header('Location: be_part_of_us.php');
                }elseif ($phone_number === $phone_number_check){
                    $_SESSION['warning'] = "Phone number is registered to another user";
                    header('Location: register-admin.php');
                }
            }
        } else {
            if ($password != $confirm_password) {
                $_SESSION['warning'] =  "Passwords Do Not Match";
                header('Location: be_part_of_us.php');
            } else {
                $password = password_hash($password, PASSWORD_BCRYPT);
                $query = "INSERT INTO members (firstname, surname, email, phone_number, password, means_of_contact, status) VALUES (?,?,?,?,?,?,?)";
                $stmt_insert = $connection->prepare($query);
                $stmt_insert->bind_param("sssssss", $firstname, $surname, $email, $phone_number, $password, $contact_means, $status);
                $stmt_insert->execute();

                if ($stmt_insert->affected_rows > 0) {
                    $_SESSION['success'] =  "Thank you for joining us";
                    header('Location: index.php');
                } else {
                    $_SESSION['status'] =  "Member is not registered";
                    header('Location: be_part_of_us.php');
                }
                $stmt_insert->close();
            }
        }
        $stmt_check->close();
    }
}