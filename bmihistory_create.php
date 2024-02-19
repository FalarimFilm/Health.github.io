<!DOCTYPE html>
<html lang="en">
<head>
<link type="text/css" rel="stylesheet" href="main.css">
</head>
<body>
    <?php include('nav.php'); ?>
    <br><br>
    <center>
<form action="bmihistory_create_submit.php" method="post">
    <table>
        <tr>
            <td>ลำดับ</td>
            <td><input type="number" name="accountbmi_id"> </td>
        </tr>
        <tr>
            <td>ชื่อจริง</td>
            <td><input type="text" name="firstname"> </td>
        </tr>
        <tr>
            <td>นามสกุล</td>
            <td><input type="text" name="lastname"> </td>
        </tr>
        <tr>
            <td>อายุ</td>
            <td><input type="number" name="age"> </td>
        </tr>
        <tr>
            <td>น้ำหนัก</td>
            <td><input type="number" name="weight"> </td>
        </tr>
        <tr>
            <td>ส่วนสูง</td>
            <td><input type="number" name="height"> </td>
        </tr>
        <tr>
            <td>BMI</td>
            <td><input type="text" name="BMI"> </td>
        </tr>
        <tr>
            <td>Standard</td>
            <td><input type="text" name="Standard"> </td>
        </tr>
        <tr>
            <td>Date</td>
            <td><?php require_once ('current_time.php');?></td>
        </tr>

    </table>
        <input type="submit">
        </form>
    </center>
</body>
</html>
