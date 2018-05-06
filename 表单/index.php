<!DOCTYPE HTML> 
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 

<?php
$name1Err = $numberErr = $genderErr = "";
$name1 = $number = $gender = $class1 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name1"])) {
     $name1Err = "姓名是必填的";
   } 
  
   else {
     $name1 = test_input($_POST["name1"]);
   }
  
   if (empty($_POST["number"])) {
     $numberErr = "学号是必填的";
   }
  
   else {
     $number = test_input($_POST["number"]);
   }
  
   $class1 = test_input($_POST["class1"]);
  
   if (empty($_POST["gender"])) {
     $genderErr = "性别是必选的";
   } else {
     $gender = test_input($_POST["gender"]);
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h2>表单</h2>
<p><span class="error">* 为必填</span></p>
<form method="post" action="action.php"> 
   姓名：<input type="text" name="name1">
   <span class="error">*<?php echo $name1Err;?></span>
   <br><br>
   学号：<input type="text" name="number">
   <span class="error">*<?php echo $numberErr;?></span>
   <br><br>
   班级：<input type="text" name="class1">
   <span class="error"><?php echo $class1Err;?></span>
   <br><br>
   性别：
   <input type="radio" name="gender" value="女生">女性
   <input type="radio" name="gender" value="男生">男性
   <span class="error">* <?php echo $genderErr;?></span>
   <br><br>
   <input type="submit" name="submit" value="确定"> 
</form>
</body>
</html>