<?php

/**
 * @author pakisab
 * @copyright 2016
 */

include('./config.php');

?>

<div class="divTable">

<!-- this area is for time recorder-->

<div class="divRow">
<div class="divColumn50"><h1>TIME RECORDER</h1></div>
</div>

<form action="<?php echo $BASE_URL;?>index.php?page=view_time_record" method="post" enctype="multipart/form-data">

<div class="divRow">
<div class="divColumn">Employee:</div>
<div class="divColumn50">
    <select id="emp_id" name="emp_id" 
        onchange="document.getElementById('emp_name').value=this.options[this.selectedIndex].text"
        >
        <option value="0" >Please select</option>
<?php
$info="Select * from employee_info";
$query_info=mysqli_query($CON, $info);

if(!$query_info){
    die('Error:' . mysqli_error($query_info));
}else{
    while($row_info=mysqli_fetch_array($query_info)){
        echo '<option value="' . $row_info['employee_id'] . '">';
        echo $row_info['first_name'] . ' ' . $row_info['last_name'];
        echo '</option>';
    }
}
?>
</select></div>
</div>
<input name="emp_name" id="emp_name" value="" hidden="yes" />

<div class="divRow">
<div class="divColumn">Date From:</div>
<div class="divColumn50">
    <input type="text" name="txtDateFrom" id="txtDateFrom" 
     value="" placeholder="Enter Date from..." 
     
     /></div>
</div>

<div class="divRow">
<div class="divColumn">Date To:</div>
<div class="divColumn50">
    <input type="text" name="txtDateTo" id="txtDateTo" value="" placeholder="Enter Date to..."/></div>
</div>

<div class="divRow">
<div class="divColumn">Date Received:</div>
<div class="divColumn50">
    <input type="text" name="txtDateReceived" id="txtDateReceived" placeholder="Received by date..." value="" /></div>
</div>

<div class="divRow">
<div class="divColumn"><input type="submit" id="add_loan" name="btnProceed" value="Proceed" /></div>
</div>

</form>


<form action="<?php echo $BASE_URL;?>index.php?page=save_overtime" method="post" enctype="multipart/form-data">


<div class="divRow">
<div class="divColumn">Overtime Hours:</div>
<div class="divColumn50"><input type="text" name="txtOvertime" value="" id="txtOvertime" placeholder="Input Overtime..." /></div>
</div>


<div class="divRow">
<div class="divColumn"><input type="submit" id="add_loan" name="Submit" value="Submit" /></div>
</div>

</form>

<?php // include('view_time_record.php'); ?>

</div>