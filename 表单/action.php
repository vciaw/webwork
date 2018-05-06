<?php
$name1 = $_POST['name1'];
$number = $_POST['number'];
$class1 = $_POST{'class1'};
$gender = $_POST{'gender'};
if (empty($name1)||empty($number)||empty($gender)) {
    echo "<h1>提交失败</h1>";
    echo "<br>";
    echo "<h1>必须输入必填信息为空</h1>";
  	echo "<input onclick=\"history.go(-1)\" type=\"button\" value=\"返回重新填写\">";
}
    else{
  	echo "<h1>提交成功</h1>";
    echo "<h2>你的名字为 $name1";
  	echo "<br>";
  	echo "你的学号为 $number";
  	echo "<br>";
  if(empty($class1)){echo "你没有填写班级信息哦~";
  }
      else{
  	echo "你的班级为 $class1";}
  	echo "<br>";
  	echo "你的性别为 $gender<h2>";
  	echo "<br>";
}
?>