<h1>Hello from Dr. Chuck's HTML Page</h1>
<p>
<?php

    require("./eiei/reader.php")
    $file = "data.xls";
    $connection = new Spreadsheet_Excel_Reader();
    $connection.read($file);
    $startrow = 0;
    $endrow = 10;
    $coll = 2;

    for ($i = $startrow; $i < $endrow ; $i++){
        echo $connection.sheets[0]["cells"][$i]."<br>";
    }

?>
</p>
<p>Yes another paragraph.</p>
