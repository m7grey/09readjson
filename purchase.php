<?php
// Read JSON file
$url = "http://bandungtourism.com/data/json/data-ttd.php";
$json = file_get_contents($url);
//$json_file = file_get_contents("100.purchase.json");
//Decode JSON
$data = json_decode($json_file);

//var_dump($data);
echo $data['ttd'][50]['kategori'];

//$output = "<ul>";
//foreach ($json_data as $idio){
//    $output .= "h4".$idio['customerID']."</h4>";
//    $output .= "li".$idio['description']."</h4>";
//}
//$output .= "</ul>";
//echo $output;


//$totalItems = $jfo['totalItems'];
//$totalPrice = $jfo['totalPrice'];
//$shortDate = $jfo['shortDate'];
//$description = $jfo['description'];
//$location = $jfo['location'];

//$customerId = $jfo['customerId'];
//$totalItems = $jfo['totalItems'];
//$totalPrice = $jfo['totalPrice'];
//$shortDate = $jfo['shortDate'];
//$description = $jfo['description'];
//$location = $jfo['location'];


//$customerId = $jfo['customerId'];
//$totalItems = $jfo->totalItems;
//$totalPrice = $jfo->totalPrice;
//$shortDate = $jfo->shortDate;
//$description = $jfo->description;
//$location = $jfo->location;
//$output = "";
//foreach ($json['employee'] as $employee) {
//    $output .= "ID : " . $employee['id'] . "<br />";
//    $output .= "Name : " . $employee['name'] . "<br />";
//    $output .= "eMail : " . $employee['email'] . "<br />";
//    $output .= "Salary : " . $employee['salary'] . "<br />";
//    $output .= "<br />";
//    echo $output;
//}
//echo $json['employee'] [1] ['salary'];

?>
<!---->
<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <title>Purchase.</title>-->
<!--    <link rel="stylesheet" href="format.css">-->
<!--</head>-->
<!--<body>-->
<!--<h1>Purchases</h1>-->
<!--<table>-->
<!--    <tr>-->
<!--        <th>Customer Id</th>-->
<!--        <th>TotalItems</th>-->
<!--        <th>Total Price</th>-->
<!--        <th>Date</th>-->
<!--        <th>Description</th>-->
<!--        <th>Location Code</th>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        --><?php
//        $output="";
//        foreach ($json_data as $data){
//        ?>
<!--        <td>--><?php //$output .= $data['customerId']; ?><!--</td>-->
<!--        <td>--><?php //echo $data->totalItems; ?><!--</td>-->
<!--        <td>--><?php //echo $data->totalPrice; ?><!--</td>-->
<!--        <td>--><?php //echo $data->date; ?><!--</td>-->
<!--        <td>--><?php //echo $data->description; ?><!--</td>-->
<!--        <td>--><?php //echo $data->location; ?><!--</td>-->
<!--        --><?php
//        } // end foreach
////        ?>
<!--    </tr>-->
<!--</table>-->


<div class="footer">
    Powered by <a href="#">Serhiy Yarosh</a>
</div><!-- footer -->
</body>
</html>
