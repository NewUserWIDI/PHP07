<!DOCTYPE html>
<html>
<head>
    <title>Html_aman</title>
</head>
<body>
    <h3>Input Form Aman</h3>
    <form method="post" action="">
        <input type="text" name="input">
        <input type="submit" value="Kirim">
    </form>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

        echo "<h3>Input yang aman:</h3>";
        echo "<p>$input</p>";
    }
?>
</body>
</html>
