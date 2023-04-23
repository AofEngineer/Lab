<meta charset="utf-8">
<?php 

//จำนวนที่กู้
$loan = 1000000;
echo "จำนวนที่กู้ ";
echo number_format($loan,2) . " บาท";
echo "<br>"; 
//ดอกเบี้ย
$fee  = 1/100; //1%
$calculate_free = $loan * $fee;
echo "จำนวนดอกเบี้ย ";
echo number_format($calculate_free,2) ." บาท";
echo "<br>";
echo "เงินกู้ + จำนวนดอกเบี้ย ";
$total = $loan * $fee + $loan;
echo number_format($total,2) ." บาท";
echo "<br>";
echo "จำนวนงวดที่ผ่อนชำระ ";
$month = 36 ;
$total_month =$month + 1;//เอามาบวก 1 เพื่อให้ต้วแปร i เริ่มต้นที่ 1 เพราะปกติตัวแปรอาเรย์จะเริ่มต้นที่ 0 
echo $month. " เดือน";
echo "<br>";
echo "ชำระงวดละ ";
$pay = $total/$month;
echo number_format($pay,2). " บาท";



for($i=1; $i < $total_month; $i++){
	$myDate = date("Y-m-d", strtotime( date( "Y-m-d", strtotime( date("Y-m-d") ) ) . "+$i month" ) );
	echo "<pre>";
	echo " งวดที่ " .$i;
	echo " กำหนดชำระ ";
	echo date('d/m/Y' , strtotime($myDate));
	echo "<b>";	
	echo " จำนวน " .  number_format($pay,2). " บาท";
	echo "</b>";
	echo "</pre>";
}

?>