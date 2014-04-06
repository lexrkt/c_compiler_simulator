<!DOCTYPE HTML>
<html>
<head>
<title>Program received</title>
<script type="text/javascript">
setTimeout("window.location.href=('index.php')",3000);
</script>
</head>
<body>
<?php
$isrc=$_POST['inp'];
$isrc=$isrc."\n";
$src=$_POST['txt'];
$src=$src."\n";
$file=fopen("srcc.c","w");
fwrite($file,$src);
fclose($file);
$file=fopen("input","w");
fwrite($file,$isrc);
fclose($file);
`bash link.sh`;
echo 'Sending you back in 3s...';
?>
</body>
</html>
