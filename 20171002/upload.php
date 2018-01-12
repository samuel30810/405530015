<?php
if ($_POST["height"] == 0 ) {
	echo " height :" . "請輸入0以上的值" . "<br/>";
}
else{
	echo "height: = " . $_POST["height"] . "<br/>";
}

if ( $_POST["weight"] == 0) {
	echo " weight :" . "請輸入0以上的值" . "<br/>";
}
else{
	echo "weight: = " . $_POST["weight"]. "<br/>";
}	
if ($_POST["height"] == 0 &&  $_POST["weight"] == 0) {
	echo " BMI :" .  "請出入適當的height和weight" . "<br/>";
}
else{
	echo " BMI :" .  $_POST["weight"]/($_POST["height"] * $_POST["height"]). "<br/>";
}


if ($_FILES["file"]["error"] >0)
{
	echo " error :" . $_FILES["file"]["error"];
}

else
{
	echo "檔案名稱: " . $_FILES["file"]["name"] . "<br/>";
	echo "檔案類型: " . $_FILES["file"]["type"] . "<br/>";
	echo "檔案大小: " . ($_FILES["file"]["size"] / 1024) . "<br/>";
	echo "站存名稱: " . $_FILES["file"]["tmp_name"] . "<br/>";
	
$filename = $_FILES["file"]["name"];
move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $filename);
echo '<img src = "upload/' . $filename .'"/>';
	
}
?>
