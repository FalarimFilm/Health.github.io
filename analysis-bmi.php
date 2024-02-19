<html>
<head><link type="text/css" rel="stylesheet" href="main.css"></head>
<body>
    <?php require_once "nav.php"; ?>
    <div class="container">
    <center>
    <a href="analysis-bmi.php">BMI</a>
    <a href="analysis-bmr.php">BMR</a>
    <a href="analysis-cal.php">TC</a>  
    
<form class="form" action="analysis-bmi-submit.php" method="post">
    <h1>คำนวณค่าดัชนีมวลกาย (Body Mass Index : BMI)</h1>
    <div>
        <table>
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
            <td>Date</td>
            <td><?php require_once ('current_time.php');?></td>
        </tr>
        <tr><td><input id="bmi-submit" class="submit-btn" type="submit" value="คำนวณ"></td>
    </div>
    </table>
    </div></center>
    <div>
        <center>
            <img src="image/561000010883002.jpeg" border="0" width="650">
        </center>
    </div>
    <center>
        <h1>เครื่องคำนวณหาค่าดัชนีมวลกาย (BMI)</h1>
        <p><b>การหาค่าดัชนีมวลกาย (Body Mass Index : BMI) คือ</b> เป็นมาตรการที่ใช้ประเมินภาวะอ้วนและผอมในผู้ใหญ่ ตั้งแต่อายุ 20 ปีขึ้นไป
            <br>สามารถทำได้โดยการชั่งน้ำหนักตัวเป็นกิโลกรัม และวัดส่วนสูงเป็นเซนติเมตร<br>
            แล้วนำมาหาดัชมีมวลกาย โดยใช้โปรแกรมวัดค่าความอ้วนข้างต้น</p>
    </center>
    <center>
        <img src="image/Screen Shot 2565-03-09 at 02.06.54.png" border="0" width="650">
    </center>
</form>
</body>
</html>
