<!DOCTYPE html>
<html>
<head>
    <title>Html_aman</title>
</head>
<body>
    <h3>Input Form Aman</h3>
    <form method="post" action="">
        Nama: <input type="text" name="input"><br>
        Email: <input type="text" name="email"><br>
        <input type="submit" value="Kirim">
    </form>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $input = $_POST['input'] ?? '';
        $email = $_POST['email'] ?? '';

        $input = htmlspecialchars($input ?? '', ENT_QUOTES, 'UTF-8');
        $email = htmlspecialchars($email ?? '', ENT_QUOTES, 'UTF-8');

        echo "<h3>Input yang aman:</h3>";
        echo "<p>$input</p>";
        
        if(!empty($email)){
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "Email: $email";
                echo "<br>Email valid.";
            } else {
                echo "Email tidak valid.";
            }
        } else {
            echo "Email belum diisi.";
        }
    }
?>
</body>
</html>
