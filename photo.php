<pre>
<?php
	
	$submitted_Name = $_FILES["profilepicture"];
	
	$fileName = $submitted_Name["name"];
	
	$fileType = $submitted_Name["type"];
	
	$fileSize = $submitted_Name["size"];
	
	$fileTmpName = $submitted_Name["tmp_name"];
	
	echo "File Name : ".$fileName;
	echo '<br/>';
	echo '<br/>';
	
	echo "File Type : ".$fileType;
	echo '<br/>';
	echo '<br/>';
	
	$convertimg = floor($fileSize/1000);
	if($convertimg > 1000){
		echo "File Size : ".($convertimg/1000)." MB";
	}else{
		echo "File Size : ".$convertimg." KB";
	}
	echo '<br/>';
	echo '<br/>';
	
	echo "File TmpName : ".$fileTmpName;
	echo '<br/>';
	echo '<br/>';
	
	move_uploaded_file($fileTmpName,"img/$fileName");
	echo "<img src = 'img/$fileName'/>";

?>
</pre>