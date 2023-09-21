<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTTH01A</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        .table{
            width: 200px;
            border: 1px solid black;
            margin-left: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <?php  
                    function tinhtong($arr){
                        return array_sum($arr);
                    }

                    function tinhhieu($arr){
                        $hieu = $arr[0];
                        for ($i=1;$i<count($arr);$i++){
                            $hieu -= $arr[$i];
                        }
                        return $hieu;
                    }

                    function tinhtich($arr){
                        $tich = 1;
                        foreach ($arr as $num){
                            $tich *= $num; 
                        }
                        return $tich;
                    }

                    function tinhthuong($arr){
                        $thuong = $arr[0];
                        for ($i=1;$i<count($arr);$i++){
                            $thuong /= $arr[$i];
                        }
                        return $thuong;
                    }

                    $arr = [2,5,6,9,2,5,6,12,5];
                    echo "[1]." .'<br>'.'<br>';
                    echo "Tổng các phần tử      = 2 + 5 + 6 + 9 + 2 + 5 + 6 + 12 + 5 = ".tinhtong($arr).'<br>'.'<br>';
                    echo "Tích các phần tử      = 2 * 5 * 6 * 9 * 2 * 5 * 6 * 12 * 5 = ".tinhtich($arr).'<br>'.'<br>';
                    echo "Hiệu các phần tử      = 2 - 5 - 6 - 9 - 2 - 5 - 6 - 12 - 5 = ".tinhhieu($arr).'<br>'.'<br>';
                    echo "Thương các phần tử    = 2 / 5 / 6 / 9 / 2 / 5 / 6 / 12 / 5 = ".tinhthuong($arr).'<br>'.'<br>';

                    echo "[2]." .'<br>'.'<br>';
                    $arrs = ['đỏ','xanh','cam','trắng'];
                    echo '"Màu <span style="color: red;">'.$arrs[0].'</span> là màu yêu thích của Anh, <span style="color: red;">'.$arrs[1].'</span> là màu yêu thích của Sơn, <span style="color: red;">'.$arrs[2].'</span> là màu yêu thích của Thắng, còn màu yêu thích của tôi là màu <span style="color: red;">'.$arrs[3].'</span>"';
                    echo '<br>'.'<br>';
                    
                    echo "[3]." .'<br>'.'<br>';
                    $arrs = ['PHP','HTML','CSS','JS'];         
                ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Tên khóa học</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($arrs as $num){
                        ?>
                            <tr>
                                <td><?=$num;?></td>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                <?php
                    echo "[4]." .'<br>'.'<br>';
                    $arrs = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => 
                    "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => 
                    "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", 
                    "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", 
                    "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => 
                    "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw");
                    // echo '<pre>';
                    // print_r($arrs);
                    // echo '</pre>';

                    foreach($arrs as $key => $value){
                        echo "Thủ đô của ".$key." là ".$value.'<br>'.'<br>';
                    }
                ?>
                <?php
                    echo "[5]." .'<br>'.'<br>';
                    $a = [
                        'a' => [
                        'b' => 0,
                        'c' => 1
                        ],
                        'b' => [
                        'e' => 2,
                        'o' => [
                        'b' => 3
                        ]
                        ]
                       ];
                    // echo '<pre>';
                    // print_r($a);
                    // echo '</pre>';
                    echo 'Giá trị = 3 mà có key là b từ mảng trên là $a["b"]["o"]["b"]'.'<br>'.'<br>';
                    echo 'Giá trị = 1 mà có key là c từ mảng trên là $a["a"]["c"]'.'<br>'.'<br>';
                    echo "Thông tin của phần tử có key là a:";
                    echo '<pre>';
                    print_r($a['a']);
                    echo '</pre>';
                ?>     
                <?php
                    echo "[6]." .'<br>'.'<br>';
                    $keys = array(
                        "field1"=>"first",
                        "field2"=>"second",
                        "field3"=>"third"
                    );
                    $values = array(
                        "field1value"=>"dinosaur",
                        "field2value"=>"pig",
                        "field3value"=>"platypus"
                    );
                    $keysAndValues = array();
                    foreach ($keys as $key => $value) {
                        $fieldName = $value;
                        $valueKey = $key . "value";

                        if (isset($values[$valueKey])) {
                            $keysAndValues[$fieldName] = $values[$valueKey];
                        }
                    }
                    echo '<pre>';
                    print_r($keysAndValues);
                    echo '</pre>';
                ?>       
                <?php
                    echo "[7]." .'<br>'.'<br>';
                    $array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];
                    echo "Các số từ 100 đến 200 và chia hết cho 5 trong mảng là:";
                    foreach($array as $num){
                        if($num>=100 && $num<=200 && $num % 5 == 0){
                            echo " ".$num;
                        }
                    }
                    echo '<br>'.'<br>';
                ?>        
                <?php
                    echo "[8]." .'<br>'.'<br>';
                    $array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

                    $maxLength = 0;
                    $minLength = PHP_INT_MAX;
                    $maxLengthString = '';
                    $minLengthString = '';

                    foreach ($array as $string) {
                    $length = strlen($string);

                    if ($length > $maxLength) {
                        $maxLength = $length;
                        $maxLengthString = $string;
                    }

                    if ($length < $minLength) {
                        $minLength = $length;
                        $minLengthString = $string;
                    }
                    }

                    echo "Chuỗi lớn nhất là $maxLengthString, độ dài = $maxLength" .'<br>'.'<br>';
                    echo "Chuỗi nhỏ nhất là $minLengthString, độ dài = $minLength" .'<br>'.'<br>';
                ?>   
                <?php
                    echo "[9]." .'<br>'.'<br>';
                    function convertToLowercase($array) {
                        return array_map('strtolower', $array);
                    }
                      
                    $arrs = ['1', 'b', 'c', 'd'];
                    $arrs1 = ['a',0,null,false];
                    $result = convertToLowercase($arrs);
                    $result1 = convertToLowercase($arrs1);
                    echo '<pre>';
                    print_r($result);
                    echo '</pre>';
                    echo '<pre>';
                    print_r($result1);
                    echo '</pre>';
                ?>
                <?php
                    echo "[10]." .'<br>'.'<br>';
                    function convertToUppercase($array) {
                        return array_map('strtoupper', $array);
                    }
                    $arrs = ['1', 'b', 'c', 'd'];
                    $arrs1 = ['a',0,null,false];
                    $result = convertToUppercase($arrs);
                    $result1 = convertToUppercase($arrs1);
                    echo '<pre>';
                    print_r($result);
                    echo '</pre>';
                    echo '<pre>';
                    print_r($result1);
                    echo '</pre>';
                ?>
                <?php
                    echo "[11]." .'<br>'.'<br>';
                    $array = array(1, 2, 3, 4, 5);
                    $indexToRemove = 3; // Vị trí phần tử cần xóa

                    array_splice($array, $indexToRemove, 1); // Xóa một phần tử tại vị trí $indexToRemove
                    echo '<pre>';
                    print_r($array);
                    echo '</pre>';
                ?>
                <?php
                    echo "[12]." .'<br>'.'<br>';
                    $numbers = [
                        'key1' => 12, 
                        'key2' => 30, 
                        'key3' => 4, 
                        'key4' => -123, 
                        'key5' => 1234, 
                        'key6' => -12565, 
                       ];
                       
                       // Lấy phần tử đầu tiên
                       $firstElement = reset($numbers);
                       echo "Phần tử đầu tiên: " . $firstElement .'<br>'.'<br>';
                       
                       // Lấy phần tử cuối cùng
                       $lastElement = end($numbers);
                       echo "Phần tử cuối cùng: " . $lastElement .'<br>'.'<br>';
                       
                       // Tìm số lớn nhất, số nhỏ nhất, tổng các giá trị
                       $maxValue = max($numbers);
                       $minValue = min($numbers);
                       $sum = array_sum($numbers);
                       echo "Số lớn nhất: " . $maxValue .'<br>'.'<br>';
                       echo "Số nhỏ nhất: " . $minValue .'<br>'.'<br>';
                       echo "Tổng các giá trị: " . $sum .'<br>'.'<br>';
                       
                       // Sắp xếp mảng theo chiều tăng, giảm các giá trị
                       asort($numbers);
                       echo '<pre>';
                       print_r($numbers);
                       echo '</pre>';
                       
                       arsort($numbers);
                       echo '<pre>';
                       print_r($numbers);
                       echo '</pre>';
                       
                       // Sắp xếp mảng theo chiều tăng, giảm các key
                       ksort($numbers);
                       echo '<pre>';
                       print_r($numbers);
                       echo '</pre>';
                       
                       krsort($numbers);
                       echo '<pre>';
                       print_r($numbers);
                       echo '</pre>';
                ?>
                <?php
                    echo "[13]." .'<br>'.'<br>';
                    $numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

                    // Tính toán giá trị trung bình của mảng
                    $average = array_sum($numbers) / count($numbers);
                    echo "Giá trị trung bình: " . $average .'<br>'.'<br>';

                    // Liệt kê các số lớn hơn giá trị trung bình
                    echo "Các số lớn hơn giá trị trung bình: ";
                    foreach ($numbers as $number) {
                    if ($number > $average) {
                        echo $number . " ";
                    }
                    }
                    echo '<br>'.'<br>';

                    // Liệt kê các số nhỏ hơn hoặc bằng giá trị trung bình
                    echo "Các số nhỏ hơn hoặc bằng giá trị trung bình: ";
                    foreach ($numbers as $number) {
                    if ($number <= $average) {
                        echo $number . " ";
                    }
                    }
                    echo '<br>'.'<br>';
                ?>
                <?php
                    echo "[14]." .'<br>'.'<br>';
                    $array1 = [
                        [77, 87],
                        [23, 45]
                       ];
                       $array2 = [
                        'giá trị 1', 'giá trị 2'
                       ];
                       
                       $result = [];
                       foreach ($array1 as $key => $value) {
                         $result[$key] = array_merge([$array2[$key]], $value);
                       }
                       
                       echo '<pre>';
                       print_r($result);
                       echo '</pre>';
                ?>
            </div>
        </div>
    </div>
</body>
</html>