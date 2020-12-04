<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Fatigue Answer</title>
</head>
    <style type="text/css">
        html, body {
            height: 100%;
            margin: 0.5em;
        }
        </style>
<body>
<h3>Fatigue</h3>
<p>The answer is: 
<?php
$n = floatval($_POST['n']);
$sy =  floatval($_POST['sy']);
$kf = floatval($_POST['kf']);
$ma =  floatval($_POST['ma']);
$kfs =  floatval($_POST['kfs']);
$ta =  floatval($_POST['ta']);


$first = (16.00*$n)/(3.14159265*$sy);
$second = 4.00*(($kf*$ma)**2.0);
$third = 3.00*(($kfs*$tm)**2.0);
$fourth = ($second+$third)**0.5;


$result = ($first*$fourth)**0.333;
echo $result;
if(is_nan($result)){
	echo("<br>The output of the function is not a number, i.e there is something wrong with your input.<br>");
}

echo "<p>";
echo "n is {$n}<br>";
echo "sy is {$sy}<br>";
echo "kf is {$kf}<br>";
echo "ma is {$ma}<br>";
echo "kfs is {$kfs}<br>";
echo "ta is {$ta}<br>";


?>
</p>
<a href="http://anton.wasee.xyz/safwan/s"><button>Go Back</button></a>
</body>
</html>