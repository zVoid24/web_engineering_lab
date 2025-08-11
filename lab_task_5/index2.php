<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check vowel</title>
</head>
<body>
    <form method="post">
        Text: <input type="text" name="val1" required><br><br>
        <input type="submit" value="Count">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $str = $_POST['val1'];
            $count = 0;
            for($i=0;$i<strlen($str);$i++){
                if($str[$i]=='a'||$str[$i]=='e'||$str[$i]=='i'||$str[$i]=='o'||$str[$i]=='u'||$str[$i]=='A'||$str[$i]=='E'||$str[$i]=='I'||$str[$i]=='O'||$str[$i]=='U'){
                    $count++;
                }
            }
            echo "<h3>Vowel count: $count</h3>";
        }
    ?>
    <a href="index3.php">Next page</a>
</body>
</html>