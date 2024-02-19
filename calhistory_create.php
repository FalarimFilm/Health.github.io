<!DOCTYPE html>
<html lang="en">
<head>
<link type="text/css" rel="stylesheet" href="main.css">
</head>
<body>
    <?php include('nav.php'); ?>
    <br><br>
    <center>
<form action="calhistory_create_submit.php" method="post">
    <table>
    <tr>
            <td>ลำดับ</td>
            <td><input type="number" name="accountcal_id"> </td>
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
            <td>LDL</td>
            <td><input type="number" name="ldl"> </td>
        </tr>
        <tr>
            <td>HDL</td>
            <td><input type="number" name="hdl"> </td>
        </tr>
        <tr>
            <td>Triglycerides</td>
            <td><input type="number" name="triglycerides"> </td>
        </tr>
            <td>Cholesterol</td>
            <td><input type="text" name="cholesterol"> </td>
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
