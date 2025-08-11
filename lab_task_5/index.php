<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum</title>
</head>

<body>
    <form method="post">
        Number 1: <input type="number" name="num1" required><br><br>
        Number 2: <input type="number" name="num2" required><br><br>
        <input type="submit" value="Calculate Sum">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['num1'];
        $b = $_POST['num2'];
        $sum = $a + $b;
        echo "<h3>Sum: $sum</h3>";
    }
    ?>
    <a href="index2.php">Next page</a>
</body>

</html>