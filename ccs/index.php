<!DOCTYPE HTML>
<html>
<head>
<title>
C compiler simulator
</title>
<style type="text/css">
#txt{
height:400px;
width:800px;
}
#inp{
height:100px;
width:800px;
}
</style>
</head>
<body>
<form method="post" action="compile.php">
<label>INPUT</label>
<br />
<textarea name="inp" id="inp">
<?php
$file=fopen("input","r");
$con=fread($file,filesize("input"));
echo $con;
fclose($file);
?>
</textarea>
<br />
<br />
<label>SOURCE CODE</label>
<br />
<textarea name="txt" id="txt">
<?php
$file=fopen("srcc.c","r");
$con=fread($file,filesize("srcc.c"));
echo $con;
fclose($file);
?>
</textarea>
</br>
<input type="submit" />
</form>
</br>
</br>
<div>
<?php
$file=fopen("output","r");
$con=fread($file,filesize("output"));
$con2=nl2br($con);
echo $con2;
fclose($file);
?>
</div>
</body>
</html>
