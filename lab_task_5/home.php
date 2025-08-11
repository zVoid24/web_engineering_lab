<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>
        body {
            font-family: Arial;
            margin: 20px;
        }

        table {
            border-collapse: collapse;
            width: 50%;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        a {
            margin-right: 10px;
        }
    </style>

</head>

<body>
    <a href="create.php">Add New User</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM user");
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>{$row['id']}</td>
                <td>{$row["name"]}</td>
                <td>{$row["email"]}</td>
                <td>{$row["age"]}</td><tr>";
        }
        ?>
    </table>
</body>

</html>