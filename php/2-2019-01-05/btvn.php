<?php 
$data = [
    [
        'type' => 'iphone',
        'property' => [
            'price' => 100,
            'size' => 6.5,
            'ram' => '2 GB',
            'made' => [
                'by' => 'California',
                'in' => 'China',
            ],
        ],
    ],
    [
        'type' => 'ipad',
        'property' => [
            'price' => 190,
            'size' => 7.9,
            'ram' => '4 GB',
            'made' => [
                'by' => 'California',
                'in' => 'China',
            ],
        ],
    ],
];
?>
<style>
  table {
    border: 1px solid;
    border-collapse: collapse;
  }
  th,
  td {
    border: 1px solid #000;
    padding: 10px 20px;
  }
</style>
<table>
    <tr>
      <th rowspan ="2">Type</th>
      <th rowspan ="2">Price</th>
      <th rowspan ="2">Size</th>
      <th rowspan ="2">Ram</th>
      <th colspan ="2">Made</th>
    </tr>
    <tr>
        <td>By</td>
        <td>In</td>
    </tr>
    <?php 
        foreach ($data as $key => $value) {
            $type = $value['type'];
            $price = $value['property']['price'];
            $size = $value['property']['size'];
            $ram = $value['property']['ram'];
            $by = $value['property']['made']['by'];
            $in = $value['property']['made']['in'];
    ?>
    <tr>
        <td><?php echo $type; ?></td>
        <td><?php echo $price; ?></td>
        <td><?php echo $size; ?></td>
        <td><?php echo $ram; ?></td>
        <td><?php echo $by; ?></td>
        <td><?php echo $in; ?></td>
    </tr>
    <?php
        }
    ?>
</table>
