<?php
include_once("config.php"); // Use existing config with session_start()

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    $_SESSION['redirect_url'] = 'edit.php';
    header("Location: login.php");
    exit();
}

try {
    // Get current user's details
    $stmt = $conn->prepare("SELECT id FROM users WHERE username = :username");
    $stmt->bindParam(':username', $_SESSION['username']);
    $stmt->execute();
    $userData = $stmt->fetch();
    
    // Determine which ID to use
    if (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1) {
        // Admin can edit other users if ID is provided
        $id =$userData['id'];
    } else {
        // Regular users can only edit their own profile
        $id = $userData['id'];
    }

    // Get user data for editing
    $sql = "SELECT * FROM users WHERE id = :id";
    $prep = $conn->prepare($sql);
    $prep->bindParam(':id', $id);
    $prep->execute();
    $data = $prep->fetch();

    if (!$data) {
        throw new Exception("User not found");
    }

} catch(PDOException $e) {
    error_log("Database error: " . $e->getMessage());
    header("Location: error.php");
    exit();
} catch(Exception $e) {
    error_log("Error: " . $e->getMessage());
    header("Location: error.php");
    exit();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    if (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1) {
        header("Location: dashboard.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: url('../../assets/images/all.jpg') no-repeat center center fixed; /* Update image path */
            background-size: cover;
            font-family: 'Poppins', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }

        /* Form Container */
        .form-container {
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

        .form-container h2 {
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

        .btn-custom {
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

        .btn-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(59, 130, 246, 0.5);
        }

        .btn-custom:active {
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
    </style>
</head>
<body>
<div class="form-container">
    <h2>Update User Information</h2>
    <form action="update.php" method="POST">
        <div class="mb-3">
            <label for="id" class="form-label">User ID</label>
            <input type="number" name="id" id="id" class="form-control" value="<?php echo htmlspecialchars($data['id']); ?>" readonly>
        </div>

        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" id="username" class="form-control" value="<?php echo htmlspecialchars($data['username']); ?>">
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="<?php echo htmlspecialchars($data['name']); ?>">
        </div>

        <div class="mb-3">
            <label for="surname" class="form-label">Surname</label>
            <input type="text" name="surname" id="surname" class="form-control" value="<?php echo htmlspecialchars($data['surname']); ?>">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="<?php echo htmlspecialchars($data['email']); ?>">
        </div>

        <button type="submit" name="update" class="btn-custom">Update</button>
    </form>
</div>
</body>
</html>
