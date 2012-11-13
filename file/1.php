<html>
<head>
<title>
test
</title>
</head>
<body>
<!--获取html5表单元素传递过来的值：$_GET['name']-->
<?php
echo "你好";
$text=$_GET['user_date'];
echo $text."<br/>";
echo "测试<br/>";
echo "<input type='button' value='返回' onclick='history.back()'/>";
?>
</body>
</html>