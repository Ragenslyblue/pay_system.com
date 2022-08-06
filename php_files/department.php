<?php
include('./config.php');
//$department=$_POST['txtDepartmentName'];
?>
<div class="divTable">
<div class="divRow">
<div class="divColumn50"><h1>Department</h1></div>
</div>

<form action="<?php //echo $BASE_URL;?>index.php?page=save_department" method="post" enctype="multipart/form-data">

<!--<div class="divRow">
<div class="divColumn">Department ID:</div>
<div class="divColumn50"><input type="text" name="txtDepartmentID" value="" /></div>
</div>-->

<div class="divRow">
<div class="divColumn">Department Name:</div>
<div class="divColumn50"><input type="text" placeholder="Department Types..." name="txtDepartmentName" value="" /></div>
</div>

<div class="divRow">
<div class="divColumn"><input type="submit" id="add_loan" name="Submit" value="Add department"/></div>
</div>
</form>

<form action="<?php echo $BASE_URL;?>index.php?page=delete_department" method="post" enctype="multipart/form-data">

<div class="divRow">
<div class="divColumn">Department Type:</div>
<div class="divColumn50"><select multiple="yes" name="department_id" id="department_id">
<?php
$sql="SELECT * from department";
$qry=mysqli_query($CON, $sql);

if(!$qry){
    die('Error:' . mysqli_error($qry));
}else{
    while($row=mysqli_fetch_array($qry)){
        echo '<option value="' . $row['department_id'] . '">';
        echo $row['department_name'];
        echo '</option>';
    }
}
mysqli_close($CON);
?>
</select></div>
</div>

<div class="divRow">
<div class="divColumn"><input type="submit" id="add_loan" name="btnDelete" value="Remove"
onclick="return confirm('Are you sure you wish to remove this record?');" /></div>
</div>
</form>

<!--<div class="divRow">
<div class="divColumn"><input type="submit" name="Submit" value="Add" /></div>
</div>-->

</div>