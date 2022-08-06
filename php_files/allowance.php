<div class="divTable">
<div class="divRow">
<div class="divColumn50"><h1>Allowances</h1></div>
</div>

<form action="<?php //echo $BASE_URL;?>index.php?page=save_allowance" method="post" enctype="multipart/form-data"> 

<!--<div class="divRow">
<div class="divColumn">Allowance ID:</div>
<div class="divColumn50"><input type="text" name="txtAllownacesID" value="" /></div>
</div>-->

<div class="divRow">
<div class="divColumn">Allowance Name:</div>
<div class="divColumn50"><input type="text" placeholder="Allowance Types" name="txtAllowance" value="" /></div>
</div>

<div class="divRow">
<div class="divColumn"><input type="submit" id="add_loan" name="Submit" value="Add Allowance"/></div>
</div>

</form>

<form action="<?php echo $BASE_URL;?>index.php?page=delete_allowance" method="post" enctype="multipart/form-data">

<div class="divRow">
<div class="divColumn">Allowance Type:</div>
<div class="divColumn50"><select multiple="yes" name="allowance_id" id="allowance_id">
<?php

$sql="SELECT * FROM `allowances`";
$qry=mysqli_query($CON, $sql);

if(!$qry){
    die('Error:' . mysqli_error($qry));
}else{
    while($row=mysqli_fetch_array($qry)){
        echo '<option value="' . $row['allowance_id'] . '">';
        echo $row['allowance_name'];
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

<!--<form action="<?php //echo $BASE_URL;?>index.php?page=save_allowance" method="post" enctype="multipart/form-data">
<div class="divRow">
<div class="divColumn"><input type="submit" name="Submit" value="Submit" /></div>
</div>-->

</div>