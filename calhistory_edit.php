<?php 
require('config.php');
$id= $_GET['id'];
$sql="SELECT * FROM historyCAL WHERE  accountcal_id = $id";
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
<form action="calhistory_edit_submit.php?id=<?php echo $row['accountcal_id']?>" method="post">
    <table>
        <tr>
            <td>ลำดับ</td>
            <td><input type="text" value="<?php echo $row['accountcal_id']?>" name="accountcal_id"> </td>
        </tr>
        <tr>
            <td>ชื่อจริง</td>
            <td><input type="text" value="<?php echo $row['firstname']?>" name="firstname"> </td>
        </tr>
        <tr>
            <td>นามสกุล</td>
            <td><input type="text"value="<?php echo $row['lastname']?>" name="lastname"> </td>
        </tr>
        <tr>
            <td>อายุ</td>
            <td><input type="number"value="<?php echo $row['age']?>" name="age"> </td>
        </tr>
        <tr>
            <td>LDL</td>
            <td><input type="number"value="<?php echo $row['ldl']?>" name="ldl"> </td>
        </tr>
        <tr>
            <td>HDL</td>
            <td><input type="number"value="<?php echo $row['hdl']?>" name="hdl"> </td>
        </tr>
        <tr>
            <td>Triglycerides</td>
            <td><input type="number"value="<?php echo $row['triglycerides']?>" name="triglycerides"> </td>
        </tr>
            <td>Cholesterol</td>
            <td><input type="number"value="<?php echo $row['cholesterol']?>" name="cholesterol"> </td>
        </tr>
        </tr>
            <td>Standard</td>
            <td><input type="text"value="<?php echo $row['Standard']?>" name="Standard"> </td>
        </tr>

    </table>
        <input type="submit">
        </form>
    </center>
</body>
</html>
