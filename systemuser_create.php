<!DOCTYPE html>
<html lang="en">
<head>
<link type="text/css" rel="stylesheet" href="main.css">
</head>
<body>
    <?php include('nav.php'); ?>
    <br><br>
    <center>
   <form action="systemuser_create_submit.php" method="post">
    <table>
        <tr>
            <td>ลำดับไอดี</td>
            <td><input type="number" name="user_id"> </td>
        </tr>
        <tr>
            <td>ชื่อ</td>
            <td><input type="text" name="username"> </td>
        </tr>
        <tr>
            <td>รหัส</td>
            <td><input type="number" name="password"> </td>
        </tr>
        <tr>
            <td>เลเวล</td>
            <td><input type="number" name="level"> </td>
        </tr>


    </table>
        <input type="submit">
        </form>
    </center>
</body>
</html>
