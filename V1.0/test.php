<?php
@$f= $_POST['father'];
@$m = $_POST['mother'];

if($f=='' or $m == ''){
	echo '请填写完整信息';
	exit();
}
if($f == '0' and $m == '0'){
	echo '子女会出现的血型是O型,子女不会出现的血型A、B、AB';
}
if($f == '1' and $m == '0' or $m == '1' and $f == '0'){
	echo '子女会出现的血型是A、O型,子女不会出现的血型B、AB';
}
if($f == '1' and $m == '1' ){
	echo '子女会出现的血型是A、O型,子女不会出现的血型B、AB';
}
if($f == '1' and $m == '2' or $m == '1' and $f == '2'){
	echo '子女会出现的血型是A、B、AB、O型';
}
if($f == '1' and $m == '12' or $m == '1' and $f == '12'){
	echo '子女会出现的血型是A、B、AB型,子女不会出现的血型O';
}
if($f == '2' and $m == '0' or $m == '1' and $f == '0'){
	echo '子女会出现的血型是B、O型,子女不会出现的血型A、AB';
}
if($f == '2' and $m == '2'){
	echo '子女会出现的血型是B、O型,子女不会出现的血型A、AB';
}
if($f == '2' and $m == '12' or $m == '2' and $f == '12'){
	echo '子女会出现的血型是A、B、AB型,子女不会出现的血型O';
}
if($f == '12' and $m == '0' or $m == '12' and $f == '0'){
	echo '子女会出现的血型是A、B型,子女不会出现的血型O、AB';
}
if($f == '12' and $m == '12'){
	echo '子女会出现的血型是A、B、AB型,子女不会出现的血型O';
}
?>