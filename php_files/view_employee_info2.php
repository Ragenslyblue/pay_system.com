<link rel="stylesheet" type="text/css" href="../css/style.css" />
<link rel='shortcut icon' type='image/x-icon' href='../css/icons/furniture_icon.ico'/>
<!--<link href="css/ui-lightness/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" type="text/css" />-->

<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script>
    $(document).ready(function() {
    $("#txtDateReceived").datepicker();
  });

    $(document).ready(function() {
    $("#txtBirthDate").datepicker();
  });

    $(document).ready(function() {
    $("#txtDateFrom").datepicker();
  });
   
   $(document).ready(function() {
    $("#txtDateTo").datepicker();
  });
  
  $(document).ready(function() {
    $("#txtApplicableMonth").datepicker();
  });
  
  $(document).ready(function(){
    $('#txtTimeIn').datepicker();
});
  
  $(document).ready(function() {
    $("#txtTimeOut").datepicker();
  });
  
</script>

<?php

/**
 * @author pakisab
 * @copyright 2016
 */

include('../config.php');
include('./header.php');

ob_start();

if(isset($_GET['id'])){
    $id=$_GET['id'];
    
    $qry=mysqli_query($CON, "Select * from employee_info where employee_id='$id'");
    while($row=mysqli_fetch_array($qry)){
        $employee_id=$row['employee_id'];
        $first_name=$row['first_name'];
        $last_name=$row['last_name'];
        $age=$row['age'];
        $gender=$row['gender'];
        $address=$row['address'];
        $birthdate=$row['birthdate'];
        $email=$row['email'];
        $image=$row['image'];
        $contact_num=$row['contact_num'];
        $remarks=$row['remarks'];
        //$position=$row['position'];
    //}
//}
//header('Location:' . $BASE_URL . 'index.php?page=employee_info');

//if(isset($_POST['submit'])){
 // header('Location:' . $BASE_URL . 'index.php?page=employee_info');  
//}

if(isset($_POST['btnAdd'])){
    header('Location:' . $BASE_URL . 'index.php?page=employee_info');
}

ob_end_flush();
?>

<div class="divTable">
<div class="divRow">
<div class="divColumn50"><h1>Employee Informations</h1></div>
</div>

<div class="divRow">
<div class="divColumn">Employee ID:</div>
<div class="divColumn50"><?php echo $employee_id; ?></div>
</div>


<div class="divRow">
<div class="divColumn">First Name:</div>
<div class="divColumn50"><?php echo $first_name; ?></div>
</div>

<div class="divRow">
<div class="divColumn">Last Name:</div>
<div class="divColumn50"><?php echo $last_name; ?></div>
</div>

<div class="divRow">
<div class="divColumn">Age:</div>
<div class="divColumn50"><?php echo $age; ?></div>
</div>

<div class="divRow">
<div class="divColumn">Gender:</div>
<div class="divColumn50"><?php echo $gender; ?></div>
</div>

<div class="divRow">
<div class="divColumn">Birthdate:</div>
<div class="divColumn50"><?php echo $birthdate; ?></div>
</div>

<div class="divRow">
<div class="divColumn">Email:</div>
<div class="divColumn50"><?php echo $email; ?></div>
</div>

<div class="divRow">
<div class="divColumn">Address:</div>
<div class="divColumn50"><?php echo $address; ?></div>
</div>

<div class="divRow">
<div class="divColumn">Image:</div>
<div class="divColumn50"><img src="<?php echo '../images/upload/' . $image; ?>" height="150" width="150" /></div>
</div>

<div class="divRow">
<div class="divColumn">Contact Number:</div>
<div><?php echo $contact_num; ?></div>
</div>

<div class="divRow">
<div class="divColumn">Remarks:</div>
<div class="divColumn50"><?php echo $remarks; ?></div>
</div>

<!--<div class="divRow">
<div class="divColumn">Position:</div>
<div class="divColumn50"><?php //echo $position; ?></div>
</div>-->

<form action="" method="post" enctype="multipart/form-data">

<div class="divRow">
<div class="divColumn"><input type="submit" name="btnAdd" value="Add Another?" /></div>
</div>

</form>

</div>

<?php } 
}
?>

<?php include('footer.php'); ?>