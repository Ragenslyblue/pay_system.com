<div class="divTable">
<div class="divRow">
<div class="divColumn50"><h1>Daily Time Record</h1></div>
</div>

<form action="<?php echo $BASE_URL;?>index.php?page=search_employee_id" method="post" enctype="multipart/form-data">

<div class="divRow">
<div class="divColumn50">
<h2>
<?php
$hourdiff=-9;
$site=date('l,  F d,  Y g:i a', time()+($hourdiff * 3600));
echo $site;

?>
</h2>
</div>
</div>

<br />

<div class="divRow">
<div class="divColumn">Employee ID:</div>
<div class="divColumn50"><input type="text" name="txtSearch" placeholder="Enter employee ID..." value="" /></div>
</div>

<div class="divRow">
<div class="divColumn50"><input type="submit" hidden="yes" /></div>
</div>

</form>

<?php //include('view_attendance.php');
 
//echo $_GET['txtSearch'];
?>

</div>