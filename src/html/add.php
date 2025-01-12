<?php

include_once('config.php');	

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (name, surname, email) VALUES (:name, :surname, :email)";
    $sqlQuery = $conn->prepare($sql);
    
    $sqlQuery->bindParam(':name', $name); 
    $sqlQuery->bindParam(':surname', $surname); 
    $sqlQuery->bindParam(':email', $email);

    $sqlQuery->execute();

    echo "Data saved successfully ...<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a User</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        /* General reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: url('../../assets/images/all.jpg') no-repeat center center fixed; /* Use your image */
            background-size: cover;
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }

        /* Login container */
        .login {
            background: rgba(0, 0, 0, 0.4); /* Semi-transparent black */
            backdrop-filter: blur(12px);
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
            padding: 2.5rem;
            width: 100%;
            max-width: 400px;
            text-align: center;
            color: #fff;
        }

        h1 {
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: #f8fafc;
            text-shadow: 0 1px 5px rgba(0, 0, 0, 0.3);
        }

        .form-control {
            width: 100%;
            padding: 1rem;
            margin-bottom: 1.2rem;
            font-size: 16px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.1);
            color: #f8fafc;
            transition: all 0.3s ease-in-out;
        }

        .form-control:focus {
            border-color: #38bdf8;
            box-shadow: 0 0 8px #38bdf8;
            outline: none;
        }

        button {
            background: linear-gradient(135deg, #38bdf8, #3b82f6);
            color: #fff;
            font-size: 18px;
            font-weight: 600;
            border: none;
            border-radius: 8px;
            padding: 1rem;
            width: 100%;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.3s ease;
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(59, 130, 246, 0.5);
        }

        button:active {
            transform: translateY(0);
            box-shadow: 0 4px 10px rgba(59, 130, 246, 0.3);
        }

        small {
            display: block;
            margin-top: 1.5rem;
            font-size: 14px;
            color: #94a3b8;
        }

        small a {
            color: #38bdf8;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease-in-out;
        }

        small a:hover {
            color: #3b82f6;
        }

        p {
            margin-top: 2rem;
            font-size: 13px;
            color: #94a3b8;
        }
    </style>
</head>
<body>
    <div class="login">
        <h1>Add a User</h1>
        <form action="add.php" method="POST">
            <input class="form-control" type="text" name="name" placeholder="Name" required>
            <input class="form-control" type="text" name="surname" placeholder="Surname" required>
            <input class="form-control" type="email" name="email" placeholder="Email" required>
            <button type="submit" name="submit">Add</button>
        </form>
        <p><a href="dashboard.php">Go to Dashboard</a></p>
    </div>
</body>
</html>
