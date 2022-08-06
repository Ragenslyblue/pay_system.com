<div class="divTable">
<div class="divRow">
<div class="divColumn50"><h1>Contribution</h1></div>
</div>

<form action="<?php //echo $BASE_URL;?>index.php?page=save_contribution" method="post" enctype="multipart/form-data">

<!--<div class="divRow">
<div class="divColumn">Contribution ID:</div>
<div class="divColumn50"><input type="text" name="txtContributionID" value="" /></div>
</div>-->

<div class="divRow">
<div class="divColumn">Contribution Name:</div>
<div class="divColumn50"><input type="text" placeholder="Enter Contribution name" name="txtContributionName" value="" /></div>
</div>

<div class="divRow">
<div class="divColumn"><input type="submit" id="add_loan" name="Submit" value="Add Contributions" /></div>
</div>

</form>

<form action="<?php echo $BASE_URL;?>index.php?page=delete_contribution" method="post" enctype="multipart/form-data">

<div class="divRow">
<div class="divColumn">Contribution Type:</div>
<div class="divColumn50"><select multiple="yes" name="contribution_id" id="contribution_id">
<?php
$sql="SELECT * FROM `contribution`";
$qry=mysqli_query($CON, $sql);

if(!$qry){
    die('Error' . mysqli_error($qry));
}else{
    while($row=mysqli_fetch_array($qry)){
        echo '<option value="' . $row['contribution_id'] . '">';
        echo $row['contribution_name'];
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