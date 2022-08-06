<?php

/**
 * @author pakisab
 * @copyright 2016
 */
//include('./config.php');

$txtFrom=mysqli_real_escape_string($CON, $_POST['txtFrom']);
$txtSubject=mysqli_real_escape_string($CON, $_POST['txtSubject']);
$txtMessage=mysqli_real_escape_string($CON, $_POST['txtMessage']);

if(empty($txtFrom)){
    die("<p class='error'>Please enter the fields...</p>");
}
if(empty($txtSubject)){
    die("<p class='error'>Please enter the fields...</p>");
}
if(empty($txtMessage)){
    die("<p class='error'>Please enter the fields...</p>");
}

$duplicate=mysqli_query($CON, "Select * from contact_us WHERE from_contact='$txtFrom' OR subject='$txtSubject'") or exit(mysqli_error());

$num_rows=mysqli_num_rows($duplicate);

if($num_rows==0){
    
$sql="INSERT INTO `contact_us`(`from_contact`, `subject`, `message`) 
    VALUES ('$txtFrom', '$txtSubject', '$txtMessage')";
$qry=mysqli_query($CON, $sql) or die(mysqli_error());  

}

/*if(!$qry){
    die('Error:' . mysqli_error($qry));    
}*/
header('Location:' . $BASE_URL . 'index.php?page=contact_us');
?>