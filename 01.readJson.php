<?php
/**
 * Created by PhpStorm.
 * User: serhiyyarosh
 * Date: 4/8/17
 * Time: 12:48 PM
 */

$file = fopen("/data/100.purchase.json","r"); //put json file in root folder no metter what
    while(! feof($file))
    {
        echo fgets($file)."<br />";
        echo"------------------------";

    }
    fclose($file);
?>

