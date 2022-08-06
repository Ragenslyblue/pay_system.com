<?php

/**
 * @author pakisab
 * @copyright 2016
 */

include('./config.php');

$txtSearch=mysqli_real_escape_string($CON, $_POST['txtSearch']);
$hourdiff=-8;
$site=date('l,  F d,  Y g:i a', time()+($hourdiff * 3600));
$curr_date=date('m/d/Y', time()+($hourdiff * 3600));

$sql='Select employee_info.employee_id, employee_info.first_name, employee_info.last_name
        from employee_info 
        Where employee_id = "'.$txtSearch.'"';    
$qry=mysqli_query($CON, $sql);

if(mysqli_num_rows($qry)<=0){   

echo 
"<div> Employee ID not found. 
 </div>";

}else{
    
while($row=mysqli_fetch_array($qry)){
    $employee_id=$row['employee_id'];
    $first_name=$row['first_name'];
    $last_name=$row['last_name'];

    $sql2='SELECT * FROM `attendance` WHERE `employee_id`="'.$employee_id.'" 
            ORDER BY `attendance_id` ASC';    
    $qry2=mysqli_query($CON, $sql2);
?>

<div class="divTable">
<div class="divRow">
<div class="divColumn50"><h1>Daily Time Record</h1></div>
</div>

<form action="<?php echo $BASE_URL;?>index.php?page=save_attendance" 
    method="post" enctype="multipart/form-data">

<div class="divRow">
<div class="divColumn50"><h2>  
<?php
echo $site;
?>
</h2>
</div>
</div>

<div class="divRow">
<div class="divColumn">Employee ID:</div>
<div class="divColumn50">
    <input type="text" disabled="yes" value="<?php echo $txtSearch; ?>" />
    <input type="text" name="txtSearch" hidden="yes" value="<?php echo $txtSearch; ?>" />
</div>
</div>

<div class="divRow">
<div class="divColumn">Employee Name:</div>
<div class="divColumn50"><input type="text" name="txtEmployeeName" disabled="yes" 
        value="<?php echo $first_name . ' ' . $last_name; ?>" />
    </div>
</div>

<div class="divRow">
    <div class="divColumn50">
<?php 
$n=mysqli_num_rows($qry2);
$row2=mysqli_fetch_array($qry2);
//echo $n;
if(mysqli_num_rows($qry2)<=0){
        $btnLabel = "TIME IN";
?>
    <input type="submit" name="btnAction" 
    value="<?php echo $btnLabel; ?>" />
<?php    
}elseif(mysqli_num_rows($qry2)>=1){
    $last_status=0;
    while($row2=mysqli_fetch_array($qry2)){
    $last_id = $row2['attendance_id'];
    $last_status=$row2['status'];    
    }
    
    if($last_status=='in'){
        $btnLabel = "TIME OUT";
    }else{
        $btnLabel = "TIME IN";
    }   
        
?> 
    <input type="submit" name="btnAction" 
    value="<?php echo $btnLabel; ?>" />
<?php    
}

?>
    </div>
</div>
</form>
<?php }} ?>

</div>