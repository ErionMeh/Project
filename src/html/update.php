<?php
session_start();
include_once('config.php');

if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];

    // First verify that the user has permission to make this update
    if(!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] != 1) {
        // Regular users can only edit their own profile
        // Get the username associated with this ID
        $check_sql = "SELECT username FROM users WHERE id = :id";
        $check_stmt = $conn->prepare($check_sql);
        $check_stmt->bindParam(':id', $id);
        $check_stmt->execute();
        $user_data = $check_stmt->fetch();

        // If the logged-in user is not editing their own profile, redirect them
        if($_SESSION['username'] !== $user_data['username']) {
            header("Location: home.php");
            exit();
        }
    }

    $sql = "UPDATE users SET username=:username, name=:name, surname=:surname, email=:email WHERE id=:id";
    $prep = $conn->prepare($sql);
    $prep->bindParam(':id', $id);
    $prep->bindParam(':username', $username);
    $prep->bindParam(':name', $name);
    $prep->bindParam(':surname', $surname);
    $prep->bindParam(':email', $email);

    $prep->execute();

    // Redirect based on user type
    if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1) {
        header("Location: dashboard.php");
    } else {
        header("Location: home.php");
    }
    exit();
}
?>