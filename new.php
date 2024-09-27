<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <h2>Please Input Your Name</h2>
        <input type="text" name="name">
        <input type="submit" value="Submit Button">

    </form>

</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'])) {
    $name = $_POST["name"];
    //echo "hello " . $name
    echo "<h3> Hello $name";
}
?>