<?php
echo "<a href=\"./\">BACK</a>";

echo "<h1>13. REVIEW</h1>";
/* EXERCISE 1 :
1. Create an Array about data of authors like :
$authors = [
[
"name" => "Lorem",
"age" => "18",
"posts_quantity" => "5",
],
[
"name" => "Lorem",
"age" => "18",
"post_quantity" => "5",
],
];

+ At least 5 authors.

2. Display it into website depends on Bootstrap 4 Table, in 4 column : Name, Age, Post Counting, Salary.

3. Make sure, if posts_quantity > 10, show at Salary Column = posts_quantity * 10000, otherwise, display 0.

 */

/* 
 * Write a program to calculate the total price of your phone purchase . You will keep purchasing phones(hint : loop !) until you run out of money in your bank account . You 'll also buy accessories for each phone as long as your purchase amount is below your mental spending threshold.
 * 
 * After you' ve calculated your purchase amount, add in the tax, then print out the calculated purchase amount, properly formatted .
 * 
 * Finally, check the amount against your bank account balance to see if you can afford it or not .
 * 
 * You should set up some constants for the "tax rate," "phone price," "accessory price," and "spending threshold,"  as well as a variable for your "bank account balance." "
 * 
 * You should define functions for calculating the tax and for formatting the price with a " $ " and rounding to two decimal places.
 */

echo " < br > < br > do EXERCISE INSIDE COMMENT CODE BELOW THIS LINE < hr > ";

$authors = [
    [
        "name" => "Lorem",
        "age" => "58",
        "posts_quantity" => "5",
    ],
    [
        "name" => "Tran",
        "age" => "48",
        "posts_quantity" => "7",
    ],
    [
        "name" => "Nguyen",
        "age" => "38",
        "posts_quantity" => "10",
    ],
    [
        "name" => "Quang",
        "age" => "28",
        "posts_quantity" => "15",
    ],
    [
        "name" => "Thanh",
        "age" => "18",
        "posts_quantity" => "14",
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
  <thead>
    <tr>
      <th>Name</th>
      <th>Age</th>
      <th>posts_quantity</th>
      <th>salary</th>
    </tr>
  </thead>
  <tbody>
  <?php
    foreach ($authors as $key => $value) {
        $name = $value['name'];
        $age = $value['age'];
        $p_q = $value['posts_quantity'];
        if ($p_q > 10) {
            $salary = $p_q * 10;
        } else {
            $salary = 0;
        }
        echo "<tr>";
        echo "<td>".$name."</td>";
        echo "<td>".$age."</td>";
        echo "<td>".$p_q."</td>";
        echo "<td>".$salary."</td>";
        echo "</tr>";
    }    
  ?>
  </tbody>
</table>

