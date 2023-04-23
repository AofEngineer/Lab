<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ประมวลผล โปรแกรมหาดอกเบี้ย</title>
</head>

<body>
<div align="center">
  <?php
  $money=$_POST['money'];
  $interest=$_POST ['interest'] ;

  $sum1=$money*$interest/100;
  $sum2=$money+$sum1;
 
   ?>
   <p align="center">จำนวนเงิน : <?php echo number_format($money,2);?> บาท <br />
                     ดอกเบี้ย : <?php echo $interest;?> %|ต่อปี <br />
                     ดอกเบี้ยที่ได้รับ : <?php echo number_format($sum1,2);?> บาท <br />
                     เงินต้น+ดอกเบี้ย : <?php echo number_format($sum2,2);?> บาท
   </p>
</div>
</body>
</html>