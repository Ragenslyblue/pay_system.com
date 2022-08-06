<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<?php
include('./config.php');


$qry=mysqli_query($CON, "Select * from employee_info");

$employee_id=0;
while($row=mysqli_fetch_array($qry)){
    $employee_id=$row['employee_id']+1;
    //$date=date('y');
    //$id=$employee_id+$date;
    //$last_id=str_pad($id, 5, 1, STR_PAD_BOTH);
}
?>

<?php

?>

<div class="divTable">
<div class="divRow">
<div class="divColumn50"><h1>Employee Information</h1></div>
</div>

<?php include('view_employee_info.php'); ?>

<!--<br /><br />-->

<form action="<?php //echo $BASE_URL;?>index.php?page=save_employee" method="post" enctype="multipart/form-data">

<br /><br />

<div class="divRow">
<div class="divColumn">Employee ID:</div>
<div class="divColumn50"><label for="employee_id"><?php echo $employee_id+1; ?></label></div>
</div>

<br /><br />

<div class="divRow">
<div class="divColumn">First Name:</div>
<div class="divColumn50"><input type="text" placeholder="Enter First Name" name="txtFirstName" value="<?php //echo $query3['first_name']; ?>" /></div>
</div>

<div class="divRow">
<div class="divColumn">Last Name:</div>
<div class="divColumn50"><input type="text" placeholder="Enter Last Name" name="txtLastName" value="<?php //echo $query3['last_name']; ?>" /></div>
</div>

<script type="text/javascript">
function ageCount() {
    var date1 = new Date();
    var dob = document.getElementById("txtBirthDate").value;
    var date2 = new Date(dob);
    var pattern = /^\d{1,2}\/\d{1,2}\/\d{4}$/;
    //Regex to validate date format (dd/mm/yyyy)       
    if (pattern.test(dob)) {
        var y1 = date1.getFullYear();
        //getting current year            
        var y2 = date2.getFullYear();
        //getting dob year            
        var age = y1 - y2;
        //calculating age                       
        document.getElementById("ageId").value = age;
        doucment.getElementById("ageId").focus ();
        return true;
    } else {
        alert("Invalid date format. Please Input in (dd/mm/yyyy) format!");
        return false;
    }

}
</script>

<div class="divRow">
<div class="divColumn">Birthdate:</div>
<div class="divColumn50"><input type="text" name="txtBirthDate" id="txtBirthDate"
                        onblur="ageCount()" placeholder="Enter Birthdate..." /></div>
</div>

<div class="divRow">
<div class="divColumn">Age:</div>
<div class="divColumn50"><input type="text" name="age" id="ageId" placeholder="Age value..." /></div>
</div>

<div class="divRow">
<div class="divColumn">Gender:</div>
<div class="divColumn50"><input type="radio" name="radbtnSex" value="male" />Male</div>
<div class="divColumn" id="female"><input type="radio" name="radbtnSex" value="female" />Female</div>
</div>

<div class="divRow">
<div class="divColumn">Address:</div>
<div class="divColumn50"><input type="text" placeholder="Enter Address" name="txtAddress" value="" /></div>
</div>

<div class="divRow">
<div class="divColumn">Email:</div>
<div class="divColumn50"><input type="text" placeholder="Enter Email" name="txtEmail" value="" /></div>
</div>

<div class="divRow">
<div class="divColumn">Image:</div>
<div class="divColumn50"><input type="file" name="fileImage" value="" /></div>
</div>

<div class="divRow">
<div class="divColumn">Contact Number:</div>
<div class="divColumn50"><input type="text" placeholder="Enter Contact Number" name="txtContactNumber" value="" /></div>
</div>

<div class="divRow">
<div class="divColumn">Remarks:</div>
<div class="divColumn50"><textarea name="txtRemarks" placeholder="Say something or post comment..." rows="10" cols="50"></textarea></div>
</div>


<div class="divRow">
<div class="divColumn"><input type="submit" class="center" name="Submit" value="Add Employee"
onclick="return confirm('You wish to add all of these records??');" /></div>
</div>

</form>

<?php //include('view_employee_info.php'); ?>

<!--
<form action="<?php //echo $BASE_URL;?>index.php?page=view_employee_info2" method="post" enctype="multipart/form-data">
<div class="divRow">
<div class="divColumn"><input type="submit" name="submit" value="View" /></div>
</div>
</form>
-->
</div>