<html>
<head>
<link type="text/css" rel="stylesheet" href="main.css">
</head>
<body>
    <?php require_once "nav.php"; ?>
    <center>
    <a href="analysis-bmi.php">BMI</a>
    <a href="analysis-bmr.php">BMR</a>
    <a href="analysis-cal.php">TC</a>  
    </center>
    <center>
    <form action="analysis-bmr-submit.php" method="POST">
        <h1>คำนวณการเผาผลาญพลังงาน (Basal Metabolic Rate : BMR)</h1>
          <div>
            <div class="div-input">
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
            <tr>
            <td>sex</td>
            <td><input type="radio" name="gender" value="male" checked> male</td>
            <td><input type="radio" name="gender" value="female"> female</td>
            </tr>
            </div>
            <div class="div-input">
            <td>height/centimate</td>
            <td><input name="height" type="text"></td>
            </div>
            <div class="div-input">
            <tr>
            <td>weight/kilogram </td>
            <td><input name="weight" type="text"></td>              
            </tr>
            </div>
            <div class="div-input">
            <tr>
              <td>age/year</td>
              <td><input name="age" type="text"></td>
            </tr>
            </div>
            <tr>
            <td><br>
            <select name="rate">
              <option value="0">no</option>
              <option value="1">1-3 day/week</option>
              <option value="2">3-5 day/week</option>
              <option value="3">6-7 day/week</option>
              <option value="4">pro</option>
            </select>              
            </td>
            </tr>
            <div class="div-input">
            <tr>
              <td>
                <br><input class="submit" type="submit" value="Cal">
              </td>
            </tr>
            </div>            
            </table>
          </div>
      </form>      
    </center>
    <center>
        <img src="image/bmr-formula.jpeg" border="0" width="500">
    </center>
    <center>
        <h1>เครื่องคำนวณการเผาผลาญพลังงาน (BMR)</h1>
        <h1>BMR</h1>
        <p><b>BMR</b> ย่อมาจาก Basal Metabolic Rate หรือเราสามารถเรียกได้ว่าเป็นอัตราการเผาผลาญพลังงานในแต่ละวัน 
        <br>โดยค่าพลังงานนี้ร่างกายจะใช้ในการขับเคลื่อนระบบเเละควบคุมอวัยวะต่างๆ ในร่างกาย</p>
    </center>
    <center>
        <img src="image/Picbmrtdee.png" border="0" width="650">
    </center>
    <center>
        <h1>TDEE</h1>
        <p><b>TDEE</b> คือ Total Daily Energy Expenditure หรือ ค่าของพลังงานที่ใช้กิจกรรมอื่นในแต่ละวัน โดยเลือกจากกิจกรรมตาม list
      <br>ค่าที่ออกมาจะได้ค่าของการเผาผลาญพลังงานที่เป็นค่าเพียวๆ เเละค่าจากการทำกิจกรรม</p>
    </center>
</body>