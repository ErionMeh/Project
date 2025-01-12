<?php
include_once('config.php');	

if(isset($_POST['submit']))
{
    try {
        $name = trim($_POST['name']);
        $surname = trim($_POST['surname']);
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $tempPass = $_POST['password'];
        
        // Input validation
        if(empty($name) || empty($surname) || empty($username) || empty($email) || empty($tempPass))
        {
            throw new Exception("You need to fill all the fields.");
        }
        
        $password = password_hash($tempPass, PASSWORD_BCRYPT);

        // Check if username exists
        $sql = "SELECT username FROM users WHERE username=:username";
        $tempSQL = $conn->prepare($sql);
        $tempSQL->bindParam(':username', $username);
        $tempSQL->execute();

        if($tempSQL->rowCount() > 0)
        {
            throw new Exception("Username already exists!");
        }

        // Insert new user
        $sql = "INSERT INTO users (name, surname, username, email, password) 
                VALUES (:name, :surname, :username, :email, :password)";
        $insertSql = $conn->prepare($sql);
        
        $insertSql->bindParam(':name', $name); 
        $insertSql->bindParam(':surname', $surname); 
        $insertSql->bindParam(':username', $username);
        $insertSql->bindParam(':email', $email);
        $insertSql->bindParam(':password', $password);

        if($insertSql->execute()) {
            echo "Data saved successfully...";
            header("refresh:2; url=login.php");
        } else {
            throw new Exception("Failed to save data: " . implode(" ", $insertSql->errorInfo()));
        }
        
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
        error_log("Registration error: " . $e->getMessage());
        header("refresh:2; url=signup.php");
    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
        error_log("Database error: " . $e->getMessage());
        header("refresh:2; url=signup.php");
    }
}
?>
