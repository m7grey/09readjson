<?php
/**
 * Created by PhpStorm.
 * User: serhiyyarosh
 * Date: 4/8/17
 * Time: 12:48 PM
 */

$file = fopen("/data/100.purchase.json","r");
    while(! feof($file))
    {
        echo fgets($file)."<br />";
        echo"------------------------";

    }
    fclose($file);
?>

