<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of loginUsers
 *
 * @author dell notebook
 */
if (isset($_POST['register'])) {
    include_once ('classes/ManageUsers.php');
    $users = new ManageUsers();

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    if (empty($name) || empty($surname) || empty($email) || empty($password) || empty($repassword)) {
        $error = 'All fields are required';
    } elseif ($password != $repassword) {
        $error = 'Passwords do not match';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Email is invalid';
    } elseif (strlen($password) < 6) {
        $error ='password to short';
    } elseif(strlen($name) < 2){
        $error = 'First Name should be atleast 2 characters long';
    }elseif(strlen($surname) < 2){
        $error = 'Last Name should be atleast 2 characters long';
    }else {
        $check_availability = $users->GetUserInfo($username,$email);

        if ($check_availability == 0) {
            $password = md5($password);
            $register_user = $users->registerUsers($name, $surname , $email, $password);
            if ($register_user == 1) {
                $make_sessions = $users->GetUserInfo($email);
                foreach ($make_sessions as $userSessions) {
                    $_SESSION['store'] = $userSessions['Email'];
                    if (isset($_SESSION['store'])) {
                        header("location: index.php");
                    }
                }
            }
        } else {
            $error = 'Username or Email already in use';
        }
    }
}

if (isset($_POST['login'])) {
    session_start();
    include_once ('classes/ManageUsers.php');
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($username) && empty($password)) {
        $error = "All fields are requied";
    } else {
        $password = md5($password);
        $login_user = new ManageUsers();
        $auth_user = $login_user->loginUsers($name, $surname, $email, $password);
        if ($auth_user == 1) {
            $make_sessions = $login_user->GetUserInfo($email);
            foreach ($make_sessions as $userSessions) {
                $_SESSION['store'] = $userSessions['Email'];
                if (isset($_SESSION['store'])) {
                    header("location: index.php");
                }
            }
        } else {
            $error = 'Invalid credetintials';
        }
    }
}
