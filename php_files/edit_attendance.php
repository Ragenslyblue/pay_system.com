<link rel="stylesheet" type="text/css" href="../css/style.css" />
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css"/>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<script>
$(document).ready(function() {
    $("#txtOvertime").datepicker();
  });
  
$(document).ready(function() {
    $("#txtLate").datepicker();
  });
  
  $(document).ready(function(){
    $('#txtTimeIn').datepicker();
});
  
</script>

<?php

/**
 * @author pakisab
 * @copyright 2016
 */
include('../config.php');
include('header.php');
?>

<?php
ob_start();
//include('../config.php');
 
if(isset($_GET['id'])){
    $id=$_GET['id'];
//}
if(isset($_POST['update'])){
    $attendance_id=$_POST['txtAttendance'];
    $employee_id=$_POST['employee_id'];
    $date=$_POST['txtDate'];
    //$department_id=$_POST['department_id'];
    //$overtime=$_POST['txtOvertime'];
    $overtime_hour=$_POST['txtOvertimeHour'];
    //$late=$_POST['txtLate'];
    $late_hour=$_POST['txtLateHour'];
    //$time_in=$_POST['txtTimeIn'];
    $time_in_hour=$_POST['txtTimeInHour'];
    //$time_out=$_POST['txtTimeOut'];
    $time_out_hour=$_POST['txtTimeOutHour'];
    
    $updated=mysqli_query($CON, "Update attendance SET 
        employee_id='$employee_id', date='$date',overtime_hour='$overtime_hour', late_hour='$late_hour', time_in_hour='$time_in_hour', time_out_hour='$time_out_hour' 
        where attendance_id='$attendance_id'") or die();
    
    if($updated){
        //$msg='Successfully Updated!!';
        header('Location:' . $BASE_URL . 'index.php?page=attendance');
        }    
    
    }
}
 
if(isset($_POST['back'])){
    header('Location:' . $BASE_URL . 'index.php?page=attendance');
}
ob_end_flush();
?>

<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $qry=mysqli_query($CON, "Select * from attendance where attendance_id='$id'");
    while($row=mysqli_fetch_array($qry)){
        $attendance_id=$row['attendance_id'];
        //$invID=str_pad($attendance_id, 4, '0', STR_PAD_LEFT);
        $employee_id=$row['employee_id'];
        $txtDate=$row['date'];
        //$department_id=$row['department_id'];
        //$overtime=$row['overtime'];
        $overtime_hour=$row['overtime_hour'];
        //$late=$row['late'];
        $late_hour=$row['late_hour'];
        //$time_in=$row['time_in'];
        $time_in_hour=$row['time_in_hour'];
        //$time_out=$row['time_out'];
        $time_out_hour=$row['time_out_hour'];

?>

<div class="divTable">
<div class="divRow">
<div class="divColumn50"><h1>Edit Post</h1></div>
</div>

<form action="" method="post" enctype="multipart/form-data" name="insertform">

<!--<div class="divRow">
<div class="divColumn">Attendance ID:</div>
<div class="divColumn50"><input type="text" name="txtAttendanceID" value="<?php //echo $attendance_id; ?>" /></div>
</div>-->

<div class="divRow">
<div class="divColumn">Employee:</div>
<div class="divColumn50"><select id="employee_id" name="employee_id">
<option value="<?php echo $employee_id; ?>">Select Employee--- </option>
<?php
$sql="SELECT * FROM `employee_info`";
$qry=mysqli_query($CON, $sql);

if(!$qry){
    die('Error:' . mysqli_error());
}else{
    while($row=mysqli_fetch_array($qry)){
        echo '<option value="' . $row['first_name'] . ' ' . $row['last_name'] . '">';
        echo $row['first_name'] . ' ' . $row['last_name'];
        echo '</option>';
    }
}
mysqli_close($CON);
?>
</select></div>
</div>

<div class="divRow">
<div class="divColumn">Date:</div>
<div class="divColumn50"><input type="text" name="txtDate" id="txtDate" value="<?php echo $txtDate; ?>" /></div>
</div>

<div class="divRow">
<div class="divColumn">Overtime:</div>
<!--<div class="divColumn50"><input type="text" autocomplete="off" id="txtOvertime" name="txtOvertime" value="<?php echo $overtime; ?>" /></div>-->
<div class="divColumn50"><input type="text" autocomplete="off" id="txtOvertimeHour" name="txtOvertimeHour" value="<?php echo $overtime_hour; ?>" /></div>
</div>

<div class="divRow">
<div class="divColumn">Tardiness:</div>
<!--<div class="divColumn50"><input type="text" autocomplete="off" id="txtLate" name="txtLate" value="<?php echo $late; ?>" /></div>-->
<div class="divColumn50"><input type="text" autocomplete="off" id="txtLateHour" name="txtLateHour" value="<?php echo $late_hour; ?>" /></div>
</div>

<div class="divRow">
<div class="divColumn">Time In:</div>
<!--<div class="divColumn50"><input type="text" autocomplete="off" id="txtTimeIn" name="txtTimeIn" value="<?php echo $time_in; ?>" /></div>-->
<div class="divColumn"><input type="text" autocomplete="off" id="txtTimeInHour" name="txtTimeInHour" value="<?php echo $time_in_hour; ?>" /></div>
</div>

<div class="divRow">
<div class="divColumn">Time Out:</div>
<!--<div class="divColumn50"><input type="text" autocomplete="off" id="txtTimeOut" name="txtTimeOut" value="<?php echo $time_out; ?>" /></div>-->
<div class="divColumn"><input type="text" autocomplete="off" id="txtTimeOutHour" name="txtTimeOutHour" value="<?php echo $time_out_hour; ?>" /></div>
</div>


<div class="divRow">
<div class="divColumn"><input type="submit" name="update" value="Update" /></div>
</div>

<div class="divRow">
<div class="divColumn"><input type="submit" name="back" value="Back" /></div>
</div>

</form>

<?php }
}
?>
</div>
<?php include('footer.php'); ?>