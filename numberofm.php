<?php
    $myfile = fopen("numberofm.txt","r+");
    $mycontent = fgets($myfile);
    $m = (int)$mycontent;
    $m = $m + 1;
    file_put_contents("numberofm.txt", $m);
    fclose($myfile);
    header("Location: about.php");

?>
