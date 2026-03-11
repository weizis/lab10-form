<!DOCTYPE html>
<html>
<body>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//1 задание
$arr = array('a', 'b', 'c', 'd', 'e');
$result = array_map(function($n) {
    return strtoupper($n);
}, $arr);
echo "Исходный массив: " . implode(", ", $arr) . "<br>";
echo "Результат: " . implode(", ", $result) . "<br>";

//2 задание
$arr = array('a', 'b', 'c', 'd', 'e');
$last_index = count($arr) - 1;
echo "Количество элементов: " . count($arr) . "<br>";
echo "Последний элемент: " . $arr[$last_index] . "<br>";

//3 задание
$arr = array(1, 2, 3, 4, 5);
$pos = array_search(3, $arr);
if($pos !== false) {
    echo "В массиве есть элемент со значением 3<br>";
} else {
    echo "В массиве нет элемента со значением 3<br>";
}

//4 задание
$arr1 = array(1, 2, 3);
echo "Первый массив: " . implode(", ", $arr1) . "<br>";
$arr2 = array('a', 'b', 'c');
echo "Второй массив: " . implode(", ", $arr2) . "<br>";
$result = array_merge($arr1, $arr2);
echo "Результат: " . implode(", ", $result) . "<br>";

//5 задание
$arr = array(1, 2, 3, 4, 5);
echo "Исходный массив: " . implode(", ", $arr) . "<br>";
$result = array_slice($arr, 1, 3);
echo "Результат: " . implode(", ", $result) . "<br>";

//6 задание
$arr = array('a' => 1, 'b' => 2, 'c' => 3);
$keys = array_keys($arr);
$values = array_values($arr);
echo "Ключи: " . implode(", ", $keys) . "<br>";
echo "Значения: " . implode(", ", $values) . "<br>";

//7 задание
$keys = array('a', 'b', 'c');
echo "Массив ключей: " . implode(", ", $keys) . "<br>";
$values = array(1, 2, 3);
echo "Массив значений: " . implode(", ", $values) . "<br>";
$result = array_combine($keys, $values);
echo "Результат: ";
foreach($result as $key => $value) {
    echo "$key=>$value ";
}
echo "<br>";

//8 задание
$arr = array('a', '-', 'b', '-', 'c', '-', 'd');
echo "Массив: " . implode(", ", $arr) . "<br>";
$pos = array_search('-', $arr);
echo "Позиция первого '-': " . $pos . "<br>";

//9 задание
echo "Исходный массив: ";
foreach($arr as $key => $value) {
    echo "$key=>$value ";
}
echo "<br>";
asort($arr);
echo "asort (по значениям): ";
foreach($arr as $key => $value) {
    echo "$key=>$value ";
}
echo "<br>";
$arr = array('3' => 'a', '1' => 'c', '2' => 'e', '4' => 'b');
ksort($arr);
echo "ksort (по ключам): ";
foreach($arr as $key => $value) {
    echo "$key=>$value ";
}
echo "<br>";
$arr = array('3' => 'a', '1' => 'c', '2' => 'e', '4' => 'b');
arsort($arr);
echo "arsort (по значениям обратно): ";
foreach($arr as $key => $value) {
    echo "$key=>$value ";
}
echo "<br>";

//10 задание
$str = '1234567890';
echo "Строка: " . $str . "<br>";
$arr = str_split($str);
echo "Сумма цифр: " . array_sum($arr) . "<br>";

//11 задание
$arr = array_fill(0, 10, 'x');
echo "Массив из 10 'x': " . implode(", ", $arr) . "<br>";

//12 задание
$arr1 = array(1, 2, 3, 4, 5);
echo "Первый массив: " . implode(", ", $arr1) . "<br>";
$arr2 = array(3, 4, 5, 6, 7);
echo "Второй массив: " . implode(", ", $arr2) . "<br>";
$result = array_intersect($arr1, $arr2);
echo "Общие элементы: " . implode(", ", $result) . "<br>";
 
?>


</body>
</html>
