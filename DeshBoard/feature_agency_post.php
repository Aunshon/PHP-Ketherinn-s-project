<?php
require 'db.php';
//session_start();
$upload_photo=$_FILES['photo'];
$after_explode=explode(".",$upload_photo['name']);
$extension=end($after_explode);
//echo $extension;
$suppported_fild=array('jpg','jpeg','png','JPG');
if (in_array($extension,$suppported_fild)) {
  if ($_POST['one']==null || $_POST['tow']==null ) {
    echo "Please fill up all fild";
  }
  else {
    $n=$_POST['one'];$e=$_POST['tow'];$p=$_POST['three'];
    $contactinsertquery="INSERT into feature_agency(title,sale,rent) VALUES('$n','$e','$p')";
    $contactresult=mysqli_query($connectionQuery,$contactinsertquery);
    $current_user_id=mysqli_insert_id($connectionQuery);
    // echo $current_user_id;
    $uploadFileName=$current_user_id .".". $extension;
    // echo "$uploadFileName";
    $uploadFileLocation='feature_agency_pic/'.$uploadFileName;
    move_uploaded_file($upload_photo['tmp_name'],$uploadFileLocation);
    $uploadPhotoQuery="UPDATE feature_agency SET photo='$uploadFileName' WHERE id=$current_user_id";
    $res=mysqli_query($connectionQuery,$uploadPhotoQuery);
    if (!$contactresult) {
      echo "Could not save contact to database";
    }
    else {
      //echo "Contact saved";
      //header("Refresh:2;URL=contact_list.php");
      //$_SESSION['messageAlert']=1;
      //header("location:contact_list.php");
      header("location:feature_agency.php");
    }
  }
}else {
  header("location:feature_agency.php");
}
 ?>
