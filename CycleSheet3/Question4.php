<?php
    $fn1 = "file1.txt";
    $toread = fopen('file1.txt','r');
    $towrite = fopen('file2.txt','w');
    $text = fread($toread,filesize($fn1));
    fwrite($towrite,$text);
    echo "Content Copied";
    fclose($towrite);
    fclose($toread);
    $str = file_get_contents("file2.txt");
    echo "<br>";
    echo "<h2>File Content</h2>";
    echo $str;
?>