<html>
<body style="font-size: 25px ; text-align: center;"><br><br><br>
        The form is completed!<br><br>
        <font style="color:darkcyan"> submited successfully!</font>
    <?php

$directory = "C:/xampp/htdocs/webserver-401110364";

$files = scandir($directory);

$num_files = count($files)-13;
    $s = $num_files.".txt";
 $file = fopen($s,"w");
 echo fwrite($file,"Name: ".$_POST["Name"]."\n");
 echo fwrite($file,"Email: ".$_POST["Email"]."\n");
 echo fwrite($file,"Subject: ".$_POST["Subject"]."\n");
 fclose($file);
 ?>
</body>
</html>