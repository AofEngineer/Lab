<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>โปรแกรมหาดอกเบี้ย</title>
    <style type="text/css"></style>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>

</head>

<body>  
    <form action="#" method="post">
        <table width="393" border="0" align="center">
            <tr>
                <td colspan="2">
                    <div align="center"><strong>โปรแกรมหาดอกเบี้ย</strong></div>
                </td>
            </tr>
            <tr>
                <td width="171">
                    <div align="right">จำนวนเงินดาวน์ : </div>
                </td>
                <td width="212"><input type="text" name="money" size="20" maxlength="100" value=0>บาท</td>
            </tr>

            <tr>
                <td colspan="2">
                    <div align="center"><input type="submit" value="คำนวณ" /></div>
                </td>
            </tr>
        </table>

    </form>
    

    <div class="padding:50px">
        <?php if (!empty($_POST['money']))
            cal($_POST['money']);
        
        function cal($a)
        {
            $honda = 579400;
            $toyota = 610000;
            $suzuki = 480000;
            $MG = 389000;
            $Ford = 849000;

            $money = $a;
            $interest = 20;
            $y48=4;
            $y60=5;
            $y72=6;
            $y84=7;

            $h = $honda - $money ;
            $t = $toyota - $money ;
            $s = $suzuki - $money ;
            $m = $MG - $money ;
            $f = $Ford - $money ;

            //48เดือน
            $h48 =  $h + $y48 * ($interest/100*$h);
            $h48 = $h48 / 48;

            $t48 = $t + $y48 * ($interest/100*$t);
            $t48 = $t48 / 48;

            $s48 = $s + $y48 * ($interest/100*$s);
            $s48 = $s48 / 48;

            $m48 = $m + $y48 * ($interest/100*$m);
            $m48 = $m48 / 48;

            $f48 = $f + $y48 * ($interest/100*$f);
            $f48 = $f48 / 48;

            //60เดือน

            $h60 = $h + $y60 * ($interest/100*$h);
            $h60 = $h60 / 60;

            $t60 = $t + $y60 * ($interest/100*$t);
            $t60 = $t60 / 60;

            $s60 = $s + $y60 * ($interest/100*$s);
            $s60 = $s60 / 60;

            $m60 = $m + $y60 * ($interest/100*$m);
            $m60 = $m60 / 60;

            $f60 = $f + $y60 * ($interest/100*$f);
            $f60 = $f60 / 60;

            echo ('<p align="center">จำนวนเงินดาวน์ : ' . number_format($money, 2) . ' บาท <br />
                ดอกเบี้ย :  ' . number_format($interest)  . ' %|ต่อปี <br />               
                </p>
                <table style="width:100%">
                <tr>
                    <th>รุ่น</th>
                    <th>ราคา</th>                                       
                    <th>48 เดือน</th>
                    <th>60 เดือน</th>                    
                </tr>
                <tr>
                    <td>Honda</td>
                    <td> '.$honda.'</td>                   
                    <td>'.number_format($h48, 2) .' </td>
                    <td>'.number_format($h60, 2) .' </td>
                </tr>
                <tr>
                    <td>Toyota</td>            
                    <td>'.$toyota.'</td>                    
                    <td>'.number_format($t48, 2) .'</td>
                    <td>'.number_format($t60, 2) .' </td>
                </tr>
                <tr>
                    <td>Suzuki</td>
                    <td>'.$suzuki.'</td>                    
                    <td>'.number_format($s48, 2) .'</td>
                    <td>'.number_format($s60, 2) .' </td>
                </tr>
                <tr>
                    <td>MG</td>
                    <td>'.$MG.'</td>                    
                    <td>'.number_format($m48, 2) .'</td>
                    <td>'.number_format($m60, 2) .' </td>
                </tr>
                <tr>
                    <td>Ford</td>
                    <td>'.$Ford.'</td>                    
                    <td>'.number_format($f48, 2) .'</td>
                    <td>'.number_format($f60, 2) .' </td>
                </tr>
            </table>
            '          
            
            
            
            
            
            
            
            
            
            
            
            );
        }
        ?>
    </div>

</body>

</html>