<div class="divTable">
<div class="divRow">
<div class="divColumn50"><h1>Employees</h1></div>
</div>

<form action="<?php echo $BASE_URL;?>index.php?page=delete_employees" method="post" enctype="multipart/form-data">

<div class="divRow">
<div class="divColumn">Employees:</div>
<div class="divColumn50"><select multiple="yes" name="employee_id" id="employee_id">
<?php
$sql="SELECT * FROM `employee_info`";
$qry=mysqli_query($CON, $sql);

if(!$qry){
    die('Error:' . mysqli_error($qry));
}else{
    while($row=mysqli_fetch_array($qry)){
        echo '<option value="' . $row['employee_id'] . '">';
        echo $row['first_name'] . ' ' . $row['last_name'];
        echo '</option>';
    }
}
//mysqli_close($CON);
?>
</select></div>
</div>

<div class="divRow">
<div class="divColumn"><input type="submit" name="btnRemove" value="Remove"
onclick="return confirm('Are you sure you want to remove this employee??');" /></div>
</div>
</form>

</div>