<form action="#" method="post">
    <p><span>เงินดาวน์</span><input type="text" name="money"></p>
    <input type="submit" class="btn btn-light waves-effect" name="submit" value="Submit">
</form>
    <?php
    if (isset($_POST['submit'])) {

        is_numeric($money = $_POST['money']);

        echo '<table class="mt-5 table align-middle table-nowrap" style="width:100%">
                <thead class="table-light">
                    <tr>
                        <th rowspan="2">รุ่น</th>
                        <th rowspan="2">ราคา</th>
                        <th rowspan="2">เงินดาวน์</th>
                        <th colspan="4" style="text-align:center;">จำนวนงวดผ่อน</th>
                    </tr>
                    <tr>
                        <th>48 เดือน</th>
                        <th>60 เดือน</th>
                        <th>72 เดือน</th>
                        <th>84 เดือน</th>
                    </tr>
                </thead>';

        $car = array("MG VS HEV D" => 859000, "MG VS HEV X" => 919000);

        foreach ($car as $name => $price) {
            $r = 0;

            echo "<tr>";
            echo "<td>";
            echo ($r == 0) ? $name :  "";
            echo "</td>";
            echo "<td>";
            echo number_format($price, 0);
            echo "</td>";
            echo "<td>";
            echo number_format($money, 0);
            echo "</td>";

            $interest = 5;
            $m48 = 4;
            $m60 = 5;
            $m72 = 6;
            $m84 = 7;

            $t_p = $price - $money;

            //48 เดือน
            $c48 =  $t_p + $m48 * (($interest * $t_p) / 100);
            $c48 = $c48 / 48;

            //60 เดือน
            $c60 =  $t_p + $m60 * (($interest * $t_p) / 100);
            $c60 = $c60 / 60;

            //72 เดือน
            $c72 =  $t_p + $m72 * (($interest * $t_p) / 100);
            $c72 = $c72 / 72;

            //84 เดือน
            $c84 =  $t_p + $m84 * (($interest * $t_p) / 100);
            $c84 = $c84 / 84;

            echo "<td>";
            echo number_format($c48, 0);
            echo "</td>";
            echo "<td>";
            echo number_format($c60, 0);
            echo "</td>";
            echo "<td>";
            echo number_format($c72, 0);
            echo "</td>";
            echo "<td>";
            echo number_format($c84, 0);
            echo "</td>";
        }

        echo '</table>';
    }
    ?>