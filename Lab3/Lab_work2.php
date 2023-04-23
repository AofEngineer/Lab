<form method="post">
    ราคาเงินดาวน์<input name="money" type="number" size="4"> <input type="submit" name="submit" value="คำนวน">
</form>
<?php
if (!empty($_POST['money']))
    table($_POST['money']);

function table($a)
{
    $cars = array(
        array("Honda", 509000, 48, 60, 72, 84),
        array("Toyota", 623000, 48, 60, 72, 84),
        array("BMW", 1430000, 48, 60, 72, 84),
        array("Benz", 2344000, 48, 60, 72, 84),
        array("Ford", 973400, 48, 60, 72, 84)
    );
    $count = count($cars);
    $ccars = count($cars[0]);
    $money = $a;
    $interest = 5;

    echo ('<p align="center">จำนวนเงินดาวน์ : ' . number_format($money, 2) . ' บาท </br> ดอกเบี้ย :  ' . number_format($interest)  . ' % ต่อปี </br></p>
                <table width = 90% border = "1" cellspacing = "5" cellpadding = "0" align="center" >
                <tr><th>รุ่น</th><th>ราคา</th><th>48 เดือน</th><th>60 เดือน</th><th>72 เดือน</th><th>84 เดือน</th></tr>');
    for ($x = 0; $x <= $count - 1; $x++) {
        echo "<tr>";
        echo "<td align='center'>" . $cars[$x][0] . "</td>";
        echo "<td align='center'>" . number_format($cars[$x][1], 2) . "</td>";
        echo "<td align='center'>" . number_format(cal($money, $cars[$x][1], $interest, $cars[$x][2]), 2) . "</td>";
        echo "<td align='center'>" . number_format(cal($money, $cars[$x][1], $interest, $cars[$x][3]), 2) . "</td>";
        echo "<td align='center'>" . number_format(cal($money, $cars[$x][1], $interest, $cars[$x][4]), 2) . "</td>";
        echo "<td align='center'>" . number_format(cal($money, $cars[$x][1], $interest, $cars[$x][5]), 2) . "</td>";
        echo "</tr>";
    }
    echo ("</table>");
}
function cal($getmoney, $carprice, $inter, $month)
{
    $year = $month / 12;
    $carcal =  $carprice - $getmoney;
    $carcal =  $carcal + $year * ($inter / 100 * $carcal);
    $carcal =  $carcal / ($year * 12);
    return $carcal;
}

?>