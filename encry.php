<html><head></head>
<body>
<br>
<h3>Encrypt word by replacing method</h3>
<form action="" method="post">
<table><tr><td>Enter word to encrypt :</td><td><input type="text" name="chr" require/></td></tr> 
<tr><td>Enter number :</td><td><input type="number" name="num" require/></td></tr>
<tr><td><input type="submit" value="Show Result"/></td></tr></table>
</form><br>
<?php

$numCo = $_POST["num"];
$chrStr = $_POST["chr"];
$chrAry = str_split($chrStr);


for($a = 0 ; $a < count($chrAry) ; $a++)
 {
 	$chNum = CharToChar($chrAry[$a]);
 	$numAry[$a] = $chNum;
}

$result = printEny($numAry,$numCo);
echo "<h4>The encrypt of word ' ".$chrStr."' is '".$result."' .</h4><br>";






function printEny($numAry,$numCo) {
	$temChr = "";
foreach($numAry as $no)
{
  $temChr .= retChar($no,$numCo);
}
return $temChr;
}

function retChar($inte,$numCo) 
{
	 	if($inte < 91) {
//if  upper letter
$inte = $inte + $numCo;
			if($inte>90) 
			{
				//if more than 90  after adding 3
				//will add to 64 
				$inte = $inte -90;
				// inte =  1 or 2 or 3 or etc which over 90
				$inte = 64 + $inte;
				//inte = A or B or C or etc by adding 1 or 2 or 3
				$temChr = chr($inte);
				return $temChr;
			}
 }elseif($inte > 90) {
//if lower letter
$inte = $inte + $numCo;
	if($inte> 122) 
			{
				//if more than 122  after adding 3
				//will add to 96 
				$inte = $inte -122;
				// inte =  1 or 2 or 3 or etcwhich over 122
				$inte = 96 + $inte;
				//inte = A or B or C  or etc by adding 1 or 2 or 3
				$temChr = chr($inte);
				return $temChr;
			}

 }
	
	$temChr = chr($inte);

return $temChr;
}
?>
<br>
<?php
function CharToChar($char) {
$i = 0;
$num = ' ';
while(isset($char{$i})) {
$num .= ord($char{$i});
++$i;
}
return $num;
}

?>


<a href="index.php">HOME</a>
</body>
</html>