<?php
/*С помощью цикла заполните массив нечетными числами в промежутке от 1 до 99.*/

$arr = [];

for ($i=1; $i<=99; $i++){
    if($i%2==1){
        $arr[] = $i;
    }
}

echo "С помощью цикла заполните массив нечетными числами в промежутке от 1 до 99." . "<br>";
var_dump($arr);

/*С помощью готовой функции range заполните массив нечетными числами в промежутке от 1 до 99.*/
$arr_range = [];
$arr_range = range(1, 99, 2);
echo "<br>" . 'С помощью цикла заполните массив нечетными числами в промежутке от 1 до 99'. "<br>";
var_dump($arr_range);