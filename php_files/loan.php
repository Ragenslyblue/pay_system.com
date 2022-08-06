<div class="divTable">
<div class="divRow">
<div class="divColumn50"><h1>Loan</h1></div>
</div>

<form action="<?php //echo $BASE_URL;?>index.php?page=save_loan" method="post" enctype="multipart/form-data">

<div class="divRow">
<div class="divColumn">Loan Name:</div>
<div class="divColumn50"><input type="text" placeholder="Loan Types..." name="txtLoanName" value="" /></div>
</div>

<div class="divRow">
<div class="divColumn"><input type="submit" id="add_loan" name="Submit" value="Add Loan"/></div>
</div>
</form>

<form action="<?php echo $BASE_URL;?>index.php?page=delete_loan" method="post" enctype="multipart/form-data">

<div class="divRow">
<div class="divColumn">Loan Type:</div>
<div class="divColumn50"><select multiple="yes" name="loan_id" id="loan_id">
<?php
$sql="SELECT * FROM `loan`";
$qry=mysqli_query($CON, $sql);

if(!$qry){
    die('Error:' . mysqli_query($qry));
}else{
    while($row=mysqli_fetch_array($qry)){
        echo '<option value="' . $row['loan_id'] . '">';
        echo $row['loan_name'];
        echo '</option>';
    }
}
mysqli_close($CON);
?>
</select></div>
</div>

<?php
if(isset($_POST['btnDelete'])){
    $tbl='loan';
$loan_id=$_POST['loan_id'];

$sql="DELETE FROM $tbl WHERE loan_id='$loan_id'";

$qry=mysqli_query($CON, $sql);

if(!$qry){
    die('Error:' . mysqli_error($qry));
}
}
?>

<div class="divRow">
<div class="divColumn"><input type="submit" id="add_loan" name="btnDelete" value="Remove"
onclick="return confirm('Are you sure you wish to remove this record?');" /></div>
</div>
</form>

<!--
<div class="divRow">
<div class="divColumn"><input type="submit" name="Submit" value="Add" /></div>
</div>-->

</div>