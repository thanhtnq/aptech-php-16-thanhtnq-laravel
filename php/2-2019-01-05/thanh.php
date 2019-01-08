<h1>
<?php
    // declare variable named a and assign 5 for it
    $a = '5a';
    $b = '6';
    echo $a . $b;
?>
</h1>
<?php
$gia = 50000;
$soLuong = 2;
if ($soLuong >=2) {
    $tongGia = $gia * 0.8 * $soLuong;
    echo "Tong gia cua ban la: ".$tongGia
$products = [
    'iphone X' => ['price' => 18200000, 'color' => 'rose'],
    'ipad' => ['price' => 9000000, 'color' => 'gray'],
];
foreach ($products as $key => $value) {
    foreach ($value as $key1 => $value1) {
        echo $value1;
    }
}


/*echo "<table>";
echo "<tr>";
echo "<th>STT</th>";
echo "<th>Product</th>";
echo "<th>Price</th>";
echo "<th>Color</th>";
echo "</tr>";
echo "<tr>";*/
foreach ($products as $key => $value) {
    $namePro = $key;
    $pricePro = $key['price'];
    $colorPro = $key['color'];
    echo $namePro;
}
/*for ($i = 0; $i < count($products); $i++) {
    $namePro = $products[$i];
    foreach ($namePro as $key => $value) {
        $pricePro = $namePro['price'];
        $colorPro = $namePro['color'];
        echo "<td>$pricePro</td>";
        echo "<td>$colorPro</td>";
    }
}*/
echo "</tr>";