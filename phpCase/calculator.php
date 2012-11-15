<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>四则运算</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>
    <input name="y" type="text" id="y" size="10" />
    <select name="y0" id="y0">
      <option>+</option>
      <option>-</option>
      <option>*</option>
      <option>/</option>
    </select>
    <input name="y1" type="text" id="y1" size="10" />
    <input type="submit" name="Submit" value="计算" />
  </p>
  <p> </p>
  <p> </p>
</form>
<?php
$y0=make_safe($_REQUEST["y0"]);
$y1=make_safe($_REQUEST["y1"]);
$y=make_safe($_REQUEST["y"]);

function make_safe($variable) {
$variable = addslashes(trim($variable));
return $variable;
}

function checking_format()
{
if($y0>=a&&$y0<=z){

}
}

if ($y0 != "")
{
switch($y0)
{
case "+":
$chaxuntj =$y+$y1;
break;

case "-":
$chaxuntj =$y-$y1;
break;

case "*":
$chaxuntj =$y*$y1;
break;

case "/":
$chaxuntj =$y/$y1;
break;


default:
}


echo $y.$y0.$y1."=".$chaxuntj;
}
?>
</body>
</html>