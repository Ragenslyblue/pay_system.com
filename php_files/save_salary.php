<?php
$employee_id=mysqli_real_escape_string($CON, $_POST['employee_id']);
$department_id=mysqli_real_escape_string($CON, $_POST['department_id']);
$txtDailyRate=mysqli_real_escape_string($CON, $_POST['txtDailyRate']);
$txtPosition=mysqli_real_escape_string($CON, $_POST['txtPosition']);

if(empty($employee_id)){
    die("<p class='error'>Please enter the fields...</p>");
}
if(empty($department_id)){
    die("<p class='error'>Please enter the fields...</p>");
}
if(empty($txtDailyRate)){
    die("<p class='error'>Please enter the fields...</p>");
}
if(empty($txtPosition)){
    die("<p class='error'>Please enter the fields...</p>");
}

$duplicate=mysqli_query($CON, "Select * from salary WHERE employee_id='$employee_id' OR department_id='$department_id' AND position='$txtPosition'") or exit(mysqli_error());
echo var_dump($duplicate);

$num_rows=mysqli_num_rows($duplicate);

if($num_rows==0){

$sql="INSERT INTO salary(employee_id, department_id, daily_rate, position) 
    VALUES ('$employee_id', '$department_id','$txtDailyRate','$txtPosition')";

$qry=mysqli_query($CON, $sql) or die(mysqli_error());

}

//if(mysqli_num_rows($qry)>0){
header('Location:index.php?page=salary');
//}else{
//    header('Location:' . $BASE_URL . 'index.php?page=attendance');
//}

?>