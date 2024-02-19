<?php 

 require('config.php');
$id= $_GET['id'];
$sql="SELECT * FROM systemuser WHERE  user_id = $id";
$result = mysqli_query($connect,$sql);
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link type="text/css" rel="stylesheet" href="main.css">
</head>
<body>
    <?php include('nav.php'); ?>
    <br><br>
    <center>
   <form action="systemuser_edit_submit.php?id=<?php echo $row['user_id']?>" method="post">
    <table>
       
        <tr>
            <td>ลำดับไอดี</td>
            <td><input type="number"  value="<?php echo $row['user_id']?>" name="user_id"> </td>
        </tr>
        <tr>
            <td>ชื่อ</td>
            <td><input type="text"  value="<?php echo $row['username']?>" name="username"> </td>
        </tr>
        <tr>
            <td>รหัส</td>
            <td><input type="number"  value="<?php echo $row['password']?>" name="password"> </td>
        </tr>
        <tr>
            <td>เลเวล</td>
            <td><input type="number"  value="<?php echo $row['level']?>" name="level"> </td>
        </tr>

    </table>
        <input type="submit">
        </form>
    </center>
</body>
</html>