<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Highest grade</title>
</head>

<body>
    <form method="post">
        <h3>Enter Grades for 5 Students:</h3>
        <input type="number" name="grades[]" step="any"  required><br><br>
        <input type="number" name="grades[]" step="any"  required><br><br>
        <input type="number" name="grades[]" step="any"  required><br><br>
        <input type="number" name="grades[]" step="any"  required><br><br>
        <input type="number" name="grades[]" step="any"  required><br><br>

        <input type="submit" value="Submit Grades">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $grades = $_POST["grades"];
        $highest = -1;
        foreach($grades as $index => $grade){
            if($grade>$highest){
                $highest = $grade;
            }
        }
        echo "<h3>Highest grade: $highest</h3>";
    }
    ?>
</body>

</html>