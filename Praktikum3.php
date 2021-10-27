<!DOCTYPE html>
<html lang="en">
<head>


</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
<table border="1" style="background-color: red;">
<tr>
    
</tr>
<?php 
echo"<font color='#ff0000'>rak 1</font>";
$rak1 = array("<tr><td><font color='white'>no 1 Gula</td></tr></font>","<tr><td><font color='white'>no 2 telur</tr></td>","<td><font color='white'>no 3 tepung</td>","<tr><td><font color='white'>no 4 Gula merah</td><tr><tr>");

for($x=0;$x<count($rak1);$x++){
	echo $rak1[$x];
}

$gula=100;
$telur=100;
$tepung=100;
$gulamerah=100;

$konversigulagram=(100*$gula);
$konversigulamili=1000*$gula;
$konversitelurgram=$telur*100;
$konversitelurmili=$telur*1000;
$konversitepunggram=($tepung*100);
$konversitepungmili=($tepung*1000);
$konversigulamerahgram=(100*$gula);
$konversigulamerahmili=1000*$gula;
echo"<td><font color='white'>Gula $gula KG<br> jika dikonfersikan ke Gram=$konversigulagram Gram<br> jika dikonfersikan ke MiliGram=$konversigulamili MiliGram";
echo"<tr><td><font color='white'>Telur $telur KG<br> jika dikonfersikan ke Gram=$konversitelurgram<br> jika dikonfersikan ke Miligram=$konversitelurmili";
echo"<tr><td><font color='white'>Tepung $tepung KG<br> jika dikonfersikan ke Gram=$konversitepunggram <br>jika dikonfersikan ke MiliGram=$konversitepungmili</tr><br>"; 
echo"<tr><td><font color='white'>GulaMerah $gulamerah KG<br> jika dikonfersikan ke Gram=$konversigulamerahgram<br>jika dikonfersikan ke MiliGram=$konversigulamerahmili</tr><br> </font>"; 


?>