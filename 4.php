<?php
global $date, $r;
// 全局变量
function fn($x, $y)
{
    $date = 'Thu, 21 Dec 2000 16:01:07';
    $data = array("Mon", "Tues", "Wed", "Thu", "Fri", "Sat", "Sun");
    $dataMouth = array("01", "02", "03", "04", "05", "06", "07",'08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','00');
    $arrlength = count($data);
    $dataMouthlength = count($dataMouth);
    for ($i = 0; $i < $arrlength; $i++) {
        if ($data[$i] == "Thu") {
            $xx = $i + $x;
           $str= str_replace('Thu',$data[($xx % 7)],$date);

        }
    }
    for ($ii = 0; $ii < $dataMouthlength; $ii++) {
        if ($dataMouth[$ii] == "16") {
            $xx = $ii + $y;
            echo ($xx);
            $str= str_replace('16',$dataMouth[($xx % 25)],$str);
        }
    }
    echo($str);
}
fn(3, 4)
?>