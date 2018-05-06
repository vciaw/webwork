<?php
date_default_timezone_set("PRC");
if(count($_FILES)>0){ 
$sort = array("image/jpeg","image/jpg","image/gif","image/pdg","image/png","image/img"); 
if(in_array($_FILES['img']['type'],$sort)){ 
 $img = "img"; 
if(!file_exists($img)){
   mkdir("$img",0700); 
}
  /*以上内容为获取时区，判断文件类型，创建文件保存目录*/
$time=date("Y_m_d_H_i_s"); //这个应该是在获取时间
$file_name = explode(".",$_FILES['img']['name']);
$file_name[0]=$time;  
$name = implode(".",$file_name);
$img_name = "img/".$name;
if(move_uploaded_file($_FILES['img']['tmp_name'],$img_name)){ 
   echo "<h1>你上传的图片是：</h1>";
   echo "<br>"  ;
   echo "<center><img style='width:250px;' src='$img_name'>
   <p>
   <a href='index.php'>重新上传</a></p></center>";
}else{
     echo "上传失败";  
}
}else{ 
echo "不是图片类型";
}
}
?>