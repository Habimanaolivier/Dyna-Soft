<?php
include "header.php";
include_once "register.php";
$re =new Register();
if(isset($_GET['id'])){
    $id = base64_decode($_GET['id']);
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $register =$re -> updateStudent($_POST);

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
<h2>Update Student</h2>
<?php
$getStd = $re->getStdId($id);
if($getStd){
    while($row =mysqli_fetch_assoc($getStd)){
        ?>
    <form  method="post">
        <input type="text" name="firstname" value="<?=$row['First_Name'];?>"placeholder="First Name"><br><br>
        <input type="text" name="lastname"value="<?=$row['Last_Name'];?>"placeholder ="Last Name"><br><br>
        <input type="text" name="age"value="<?=$row['Age'];?>"placeholder="Age"><br><br>x
        <button type="submit" class="btn btn-info float-left"name="submit">Save</button>
    </form>

<?php
    }
}
?>

</body>
</html>