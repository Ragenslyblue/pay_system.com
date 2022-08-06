<div class="divTable">
<div class="divRow">
<div class="divColumn50"><h1>Employee Contribution</h1></div>
</div>

<form action="<?php //echo $BASE_URL;?>index.php?page=save_employee_contribution" method="post" enctype="multipart/form-data">

<!--<div class="divRow">
<div class="divColumn">Employee Contribution ID:</div>
<div class="divColumn50"><input type="text" name="txtEmpContributionID" value="<?php //echo $employee_contribution_id; ?>" /></div>
</div>-->

<div class="divRow">
<div class="divColumn">Employee:</div>
<div class="divColumn50"><select id="employee_id" name="employee_id">
<option value="0">Select Employee---</option>
<?php
$sql="SELECT employee_info.employee_id,employee_info.last_name, employee_info.first_name, 
        employee_contribution.employee_contribution
        FROM `employee_info` INNER JOIN `employee_contribution` 
         ON employee_info.employee_id = employee_contribution.employee_id
         WHERE employee_contribution.employee_id='".$_POST['employee_id']."'";

$qry=mysqli_query($CON, $sql);

if(!$qry){
    die('Error:' . mysqli_error($qry));
}else{
    if(mysqli_num_rows($qry)<=0){
        $sql="SELECT * FROM employee_info";
        $qry=mysqli_query($CON, $sql);
        }
    }
    while($row=mysqli_fetch_array($qry)){
            echo '<option value="' . $row['employee_id'] . '">';
            echo $row['first_name'] . ' ' . $row['last_name'];
            echo '</option>';
}
mysqli_close($CON);
?>
</select></div>
</div>

<!--
<div class="divRow">
<div class="divColumn"><input type="submit" name="btnRemove" value="Remove"/></div>
</div>
-->

<div class="divRow">
<div class="divColumn">Contribution</div>
<div class="divColumn50"><select id="contribution_id"  name="contribution_id">
<option value="0">Select Contribution---</option>
<?php
include('./config.php');
/*$sql="SELECT contribution.contribution_id,contribution.contribution_name, 
        employee_contribution.employee_contribution, employee_contribution.employer_contribution
        FROM `contribution` LEFT JOIN `employee_contribution` 
         ON contribution.contribution_id = employee_contribution.contribution_id";

$qry=mysqli_query($CON, $sql);

if(!$qry){
    die('Error:' . mysqli_error($qry));
}else{
    if(mysqli_num_rows($qry)<=0){*/
        $sql="SELECT * FROM contribution";
        $qry=mysqli_query($CON, $sql);
        //}
    //}
    while($row=mysqli_fetch_array($qry)){
            echo '<option value="' . $row['contribution_id'] . '">';
            echo $row['contribution_name'];
            echo '</option>';
}
mysqli_close($CON);
?>
</select></div>
</div>

<div class="divRow">
<div class="divColumn">Employee Contribution:</div>
<div class="divColumn50"><input type="text" placeholder="Enter Employee Contribution" name="txtEmployeeContribution" value="" /></div>
</div>

<div class="divRow">
<div class="divColumn">Applicable Month:</div>
<div class="divColumn50"><select name="month">
<option value="January" >January</option>
<option value="February" >February</option>
<option value="March" >March</option>
<option value="April" >April</option>
<option value="May" >May</option>
<option value="June" >June</option>
<option value="July" >July</option>
<option value="August" >August</option>
<option value="September" >September</option>
<option value="October" >October</option>
<option value="November" >November</option>
<option value="December" >December</option>
</select></div>
</div>

<!--<div class="divRow">
<div class="divColumn">Employer Contribution:</div>
<div class="divColumn50"><input type="text" placeholder="Enter Employer Contribution" name="txtEmployerContribution" value="" /></div>
</div>-->

<div class="divRow">
<div class="divColumn"><input type="submit" class="center" name="Submit" value="Add Employee Contributions"
onclick="return confirm('Are you sure you wish to add this record?');" /></div>
</div>

</form>

<?php include('view_employee_contribution.php'); ?>

</div>