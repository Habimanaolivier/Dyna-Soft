<?php
include "header.php";
include_once "register.php";
$re =new Register();
if(isset($_GET['delStd'])){
    $id= base64_decode($_GET['delStd']);
    $delStudent=$re->delStudent($id);
}
?>

        <h2>All students</h2>
        <div class="col-md-6">
            <a href="form.php" class="btn btn-info float-left">Add Student</a>
        </div>
    <table class="table table-hover table-bordered table-striped ">
        <thead>
            <tr>
                <th>Id</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Age</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
<?php
$allStd = $re -> allStudent();
if($allStd){
    while($row = mysqli_fetch_assoc($allStd)){
        ?>
            <tr>
                <td><?= $row['id'];?></td>
                <td><?= $row['First_Name'];?></td>
                <td><?= $row['Last_Name'];?></td>
                <td><?= $row['Age'];?></td>
                <td>
                    <a href="edit.php?id=<?= base64_encode($row['id'])?>" class="btn btn-sm btn-success">Edit</a>
                    <a href="index.php?delStd=<?= base64_encode($row['id'])?>"
                    class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
        <?php
    }
}
?>


        </tbody>
    </table>
   <?php
   include "footer.php"
   ?>