<?php 
//  if($_SESSION['level'] != 4)
//    {
//   header('Location: position.php');
//     }

require('config.php');
$id= $_GET['id'];
$sql="SELECT * FROM historyBMI WHERE accountbmi_id = $id";
$result = mysqli_query($connect,$sql);
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link type="text/css" rel="stylesheet" href="main.css">
    <title>BMI History Edit</title>
</head>
<body>
    <?php include('nav.php'); ?>
    <br><br>
    <center>
   <form action="bmihistory_edit_submit.php?id=<?php echo $row['accountbmi_id']?>" method="post">
    <table>
        <tr>
            <td>ลำดับ</td>
            <td><input type="number" value="<?php echo $row['accountbmi_id']?>" name="accountbmi_id"> </td>
        </tr>
        <tr>
            <td>ชื่อจริง</td>
            <td><input type="text" value="<?php echo $row['firstname']?>" name="firstname"> </td>
        </tr>
        <tr>
            <td>นามสกุล</td>
            <td><input type="text" value="<?php echo $row['lastname']?>" name="lastname"> </td>
        </tr>
        <tr>
            <td>อายุ</td>
            <td><input type="number" value="<?php echo $row['age']?>" name="age"> </td>
        </tr>
        <tr>
            <td>น้ำหนัก</td>
            <td><input type="number" value="<?php echo $row['weight']?>" name="weight"> </td>
        </tr>
        <tr>
            <td>ส่วนสูง</td>
            <td><input type="number" value="<?php echo $row['height']?>" name="height"> </td>
        </tr>
        <tr>
            <td>BMI</td>
            <td><input type="text" value="<?php echo $row['BMI']?>" name="BMI"> </td>
        </tr>
        <tr>
            <td>Standard</td>
            <td><input type="text" value="<?php echo $row['Standard']?>" name="Standard"> </td>
        </tr>
        
    </table>
        <input type="submit">
        </form>
    </center>
</body>
</html>