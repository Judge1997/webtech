<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP Script: List the Capital of a country</title>
    </head>
    <body>
        <?php

        include 'excel_reader.php'; // include the class
        $excel = new PhpExcelReader; // creates object instance of the class
        $excel->read('data.xls'); // reads and stores the excel file data

        $array = array();

        for ($i = 1; $i <= ($excel->sheets[0])['numRows']; $i++){
            $array[($excel->sheets[0])['cells'][$i][1]] = ($excel->sheets[0])['cells'][$i][2];
        }

        foreach ($array as $k => $v){
            echo $k,$v,"<br>";
        }

        ?>
    </body>
</html>
