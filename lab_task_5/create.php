<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name  = $_POST["name"];
    $age   = $_POST["age"];
    $email = $_POST["email"];

    $pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
    if (preg_match($pattern, $email)) {
        $conn->query("INSERT INTO user(name,email,age) VALUES('$name','$email','$age')");
        echo "<p style='color:green;'>User added successfully!</p>";
        header("Location: home.php");
    } else {
        echo "<p style='color:red;'>Invalid email format. Please try again.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f9f9f9;
        }

        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            width: 300px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        input, button {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        h2 {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <h2>Create Account</h2>
    <form method="post">
        <label>Name:</label>
        <input type="text" name="name" required>

        <label>Email:</label>
        <input type="text" name="email" required>

        <label>Age:</label>
        <input type="number" name="age" required>

        <button type="submit">Add</button>
    </form>

</body>
</html>
