<?php
session_start();
//задавам променливите
$first_name = "";
$last_name = "";
$username = "";
$email = "";
$password = "";
$confirm_password = "";
$errors = array();
//правя връзка с базата
$DataBase = mysqli_connect('localhost', 'root', '', '');
//синтаксис на регистрацията на потребител
if (isset($_POST['register_button']))
{
    $first_name = mysqli_real_escape_string($DataBase, $_POST['firstName']);
    $last_name = mysqli_real_escape_string($DataBase, $_POST['lastName']);
    $username =  mysqli_real_escape_string($DataBase, $_POST['username']);
    $email = mysqli_real_escape_string($DataBase, $_POST['email']);
    $password = mysqli_real_escape_string($DataBase, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($DataBase, $_POST['confirm_password']);
    //проверки за грешно попълване на бланката за регистрация
    if(empty($first_name)){array_push($errors, "Въведете име!");}
    if(empty($last_name)){array_push($errors, "Въведете фамилия!");}
    if(empty($username)){array_push($errors, "Въведете потребителско име!");}
    if(empty($email)){array_push($errors, "Въведете email!");}
    if(empty($password)){array_push($errors, "Въведете парола!");}
    if($password != $confirm_password){array_push($errors, "Паролата не съвпада!");}
    //проверка за връзка с базата данни
    //проверка за съвпадение на имейл и потребителскоиме в базата данни
    $check_query = "SELECT * FROM register WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($DataBase, $check_query);
    $user = mysqli_fetch_assoc($result);
    //проверка за имейл и потребителскоиме
    if($user)
    {
        if($user['username'] == $username)
        {
            array_push($errors, "Потребителското име вече е заето!");
        }
        if($user['email'] == $emal)
        {
            array_push($errors, "Email-ът вече е използван!");
        } 
    }
    if(count($errors) == 0)
    {
        $query = "INSERT INTO register (first_name, last_name, username, email, password) 
                  VALUES ('$first_name', '$last_name', '$username', '$email', '$password')";
        mysqli_query($DataBase, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Вече сте влязъл в акаунта си!";
        header('location: AfterLogin/index.php');
    }
}

//синтаксис на логване на потребител
if(isset($_POST['login_button']))
{
    $username =  mysqli_real_escape_string($DataBase, $_POST['username']);
    $password =  mysqli_real_escape_string($DataBase, $_POST['password']);
    if(empty($username)){array_push($errors, "Въведете потребителско име!");}
    if(empty($password)){array_push($errors, "Въведете парола!");}
    if(count($errors) == 0)
    {
        $query = "SELECT * FROM register WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($DataBase, $query);
        if(mysqli_num_rows($result) == 1)
        {
            $_SESSION['username'] = $username;
            $_SESSION['seccess'] = "Вече сте влязъл в акаунта си!";
            header('location: AfterLogin/index.php');
        }
        else
        {
            array_push($errors, "Грешна парола или потребителско име!");
        }
    }
}
?>