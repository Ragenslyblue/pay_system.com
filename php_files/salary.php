<div class="divTable">
<div class="divRow">
<div class="divColumn50"><h1>Salary</h1></div>
</div>

<form action="<?php //echo $BASE_URL;?>index.php?page=save_salary" method="post" enctype="multipart/form-data">

<div class="divRow">
<div class="divColumn">Employee:</div>
<div class="divColumn50"><select id="employee_id" name="employee_id">
<option value="0">Select Employee---</option>
<?php

//$sql="SELECT * FROM employee_info";

/*$sql="SELECT employee_info.employee_id, employee_info.last_name, employee_info.first_name, 
        salary.position, salary.daily_rate
        FROM `employee_info` INNER JOIN `salary` ON employee_info.employee_id != salary.employee_id
        ";*/

$sql="Select * from employee_info";

$qry=mysqli_query($CON, $sql) or die(mysqli_error($qry));

while($row=mysqli_fetch_array($qry)){
            echo '<option value="' . $row['employee_id'] . '">';
            echo $row['first_name'] . ' ' . $row['last_name'];
            echo '</option>';
}
mysqli_close($CON);
?>
</select></div>
</div>

<div class="divRow">
<div class="divColumn">Department:</div>
<div class="divColumn50"><select id="department_id" name="department_id">
<option value="0"> Select Department---</option>
<?php
include('config.php');
$sql="SELECT DISTINCT department.department_id, department_name,  
        salary.daily_rate, salary.position
        FROM `department` LEFT JOIN `salary` 
         ON department.department_id = salary.department_id";
         
$qry=mysqli_query($CON, $sql) or die(mysqli_error());

if(!$qry){
    die('Error:' . mysqli_error($qry));
}else{
    if(mysqli_num_rows($qry<=0)){
        $sql="Select * from department";
        $qry=mysqli_query($CON, $sql);
    }
}
while($row=mysqli_fetch_array($qry)){
    //echo var_dump($row);
    echo '<option value="'. $row['department_id'] .'">';
    echo $row['department_name'];
    echo '</option>';
}
mysqli_close($CON);
?>
</select></div>
</div>


<div class="divRow">
<div class="divColumn">Position:</div>
<div class="divColumn50"><input type="text" placeholder="Enter Position" name="txtPosition" value="" /></div>
</div>

<div class="divRow">
<div class="divColumn">Daily Rate:</div>
<div class="divColumn50"><input type="text" placeholder="Enter Daily Rate" name="txtDailyRate" value="" /></div>
</div>

<div class="divRow">
<div class="divColumn"><input type="submit" class="center" name="Submit" value="Add Salary"
onclick="return confirm('Are you sure you wish to add this record?');" /></div>
</div>

</form>

<?php include('view_salary.php'); ?>

</div>