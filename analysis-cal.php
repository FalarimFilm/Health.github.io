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
<form class="form" action="analysis-cal-submit.php" method="post">
    <h1>คำนวณค่าคอเลสเตอร์รอลรวม (Total cholesterol : TC)</h1>
      <div>
        <table width="500">
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
            <td><div class="div-input-tc">ไขมันแอลดีแอล (Low density lipoprotein) </td>
            <td><input name="ldl" type="text"> mg/dL </div></td>
          </tr>
          <tr>
            <td><div class="div-input-tc">ไขมันเอชดีแอล (High density lipoprotein) </td>
            <td><input name="hdl" type="text"> mg/dL</div></td>
          </tr>
          <tr>
            <td><div class="div-input-tc">ไตรกลีเซอไรด์ (Triglyseraid) </td>
            <td><input name="tri" type="text"> mg/dL </div></td>
          </tr>
        </table>
        <div class="div-input"><input class="submit-btn" id="tc-submit" type="submit" value="คำนวณ"></div><br>
      <div id="tc-result" class="result"></div>
      </div>
  </form>
</center>
<center>
        <img src="image/v4-460px-Calculate-Total-Cholesterol-Step-5-Version-4.jpeg" border="0" width="500">
    </center>
    <center>
        <h1>สิ่งที่จำเป็นต่อการคำนวณค่าคลอเลสเตอรอล</h1>
        <table>
          <tr>
            <td><h3>ไขมันแอลดีแอล (LDL)</h3> คือลิโพโปรตีนที่มีความหนาแน่นต่ำ 
            <br>มักหมายถึงปริมาณไขมันแอลดีแอล (LDL) กับไขมันวีแอลดีแอล <br>(VLDL) ซึ่งคือลิโพโปรตีนที่มีความหนาแน่นต่ำมากรวมกัน เมื่อเวลาผ่านไป 
            <br>ไขมันแอลดีแอลจะรวมตัวเป็นก้อนเกาะตามหลอดเลือดแดง 
            <br>ทำให้หลอดเลือดแดงตีบลงและเพิ่มโอกาสเสี่ยงที่จะเป็นโรคหัวใจ 
            <br>โรคหลอดเลือดในสมองแตกหรืออาการแทรกซ้อนที่เกี่ยวข้องกับหัวใจ 
            <br>และหลอดเลือดได้ไขมันแอลดีแอลจึงจัดเป็นคอเลสเตอรอลที่ไม่ดีต่อร่างกาย</td>
          </tr>
          <tr>
            <td><h3><br>ไขมันเอชดีแอล (HDL)</h3> คือโพโปรตีนที่มีความหนาแน่นสูง 
              <br>ซึ่งทำหน้าที่ขนส่งคอเรสเตอรอลภายในกระแสเลือดกลับไปที่ตับ
              <br>และลดปริมาณคอเลสเตอรอลในเลือด 
              <br>ดังนั้นเราจึงเรียกไขมันเอชดีแอลว่าคอเลสเตอรอลชนิดดี</td>
          </tr>
          <tr>
            <td>
              <h3><br>ไตรกลีเซอไรด์</h3> เป็นโมเลกุลไขมันอีกชนิดหนึ่งที่อยู่ในเลือดของมนุษย์ 
              <br>ซึ่งสามารถทำให้หลอดเลือดแดงตีบและแข็งตัว 
              <br>ปริมาณไตรกลีเซอไรด์สูงสามารถเพิ่มโอกาสเสี่ยงที่จะเป็นโรคและอาการแทรกซ้อน
              <br>ที่เกี่ยวข้องกับหัวใจและหลอดเลือดเช่นเดียวกับไขมันแอลดีแอล
            </td>
          </tr>
        </table>
        <br>
    </center>
    <center>
        <img src="image/v4-728px-Calculate-Total-Cholesterol-Step-8-Version-4.jpg.jpeg" border="0" width="650">
    </center>
</body>