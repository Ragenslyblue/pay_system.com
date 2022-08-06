<?php

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["fileImage"]["name"]);
$extension = end($temp);

if (!isset($_FILES["fileImage"])){ echo "null"; }
if ((($_FILES["fileImage"]["type"] == "image/gif")
|| ($_FILES["fileImage"]["type"] == "image/jpeg")
|| ($_FILES["fileImage"]["type"] == "image/jpg")
|| ($_FILES["fileImage"]["type"] == "image/pjpeg")
|| ($_FILES["fileImage"]["type"] == "image/x-png")
|| ($_FILES["fileImage"]["type"] == "image/png"))
&& in_array($extension, $allowedExts)) {
  if ($_FILES["fileImage"]["error"] > 0) {
    echo "Error: " . $_FILES["fileImage"]["error"] . "<br>";
    die();
  } else {
    if (file_exists("./images/upload/" . $_FILES["fileImage"]["name"])) {
      echo $_FILES["fileImage"]["name"] . " already exists. ";
      die();
    } else {
      move_uploaded_file($_FILES["fileImage"]["tmp_name"],
      "./images/upload/" . $_FILES["fileImage"]["name"]);
      echo "Stored in: " . "./images/upload/" . $_FILES["fileImage"]["name"];
    }
  }
} else {
    
  echo "Please select an image file.";
  die();
}

$file   = $_FILES['fileImage']['name'];
if(!isset($file)){
	echo "Please select cover picture.";
	echo "<div> <a href='<?php echo $BASE_URL;?>index.php?page=employee_info'> Back </a> </div>";
	die();
}


//$employee_id=mysqli_real_escape_string($CON, $_POST['employee_id']);
$txtFirstName=mysqli_real_escape_string($CON, $_POST['txtFirstName']);
$txtLastName=mysqli_real_escape_string($CON, $_POST['txtLastName']);
$age=mysqli_real_escape_string($CON, $_POST['age']);
$radbtnSex=mysqli_real_escape_string($CON, $_POST['radbtnSex']);
$txtAddress=mysqli_real_escape_string($CON, $_POST['txtAddress']);
$txtBirthDate=mysqli_real_escape_string($CON, $_POST['txtBirthDate']);
$txtEmail=mysqli_real_escape_string($CON, $_POST['txtEmail']);
$txtContactNumber=mysqli_real_escape_string($CON, $_POST['txtContactNumber']);
$txtRemarks=mysqli_real_escape_string($CON, $_POST['txtRemarks']);
//$txtPosition=mysqli_real_escape_string($CON, $_POST['txtPosition']);

$duplicate=mysqli_query($CON, "Select * from employee_info WHERE first_name='$txtFirstName' AND image='$file' OR contact_num='$txtContactNumber'") or exit(mysqli_error());

$num_rows=mysqli_num_rows($duplicate);

if($num_rows==0){

$sql="INSERT INTO `employee_info`(`first_name`, `last_name`, `age`,`gender`, `address`, birthdate,`email`, `image`, `contact_num`, `remarks`) 
    VALUES ('$txtFirstName','$txtLastName','$age','$radbtnSex','$txtAddress', '$txtBirthDate','$txtEmail','$file','$txtContactNumber','$txtRemarks')";

$qry=mysqli_query($CON, $sql) or die(mysqli_error());

}

if($qry){
   //die('Error:' . mysql_error($qry)); 
   $msg='Successfully Updated!!';
   echo "<script type='text/javascript'>alert('$msg');</script>";
   
//}
//mysqli_close($CON);
//header('Location:' . $BASE_URL . 'index.php?page=employee_info');
}else{
    $errormsg='Something went wrong, Try Again';
    echo "<script type='text/javascript'>alert('$errormsg');</script>";
}
header('Location:index.php?page=employee_info');
?>