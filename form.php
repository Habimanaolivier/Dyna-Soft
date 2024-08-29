<?php
include "header.php";
include_once "register.php";
$re =new Register();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $register =$re -> addRegister($_POST);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="col-md-6">
            <a href="index.php" class="btn btn-info float-left">Show Student</a><br><br>
</div>
    <form  method="post">
        <input type="text" name="firstname"placeholder="First Name"><br><br>
        <input type="text" name="lastname"placeholder ="Last Name"><br><br>
        <input type="text" name="age"placeholder="Age"><br><br>
        <button type="submit" class="btn btn-info float-left"name="submit">Save</button>
    </form>
</body>
</html>

<?php
   include "footer.php"
   ?>