<?php

/**
 * @author pakisab
 * @copyright 2016
 */
include('config.php');
$txtsearch=mysqli_real_escape_string($CON, $_POST['txtsearch']);

$sql='Select * from employee_info Where employee_id REGEXP "'. $txtsearch .'" 
    OR first_name REGEXP "' . $txtsearch . '" OR last_name REGEXP "' . $txtsearch . '"';

$qry=mysqli_query($CON, $sql);

if(mysqli_num_rows($qry)>0){
    
//}

?>

<div><?php mysqli_num_rows($qry) . "Results Found"; ?></div>


<div class="divTable">
<div class="divRow">
<div class="divColumn50"><h1>Employee Informations</h1></div>
</div>

<?php
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
//}
//header('Location:' . $BASE_URL . 'index.php?page=searching');
?>

<br /><br />

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
<div class="divColumn50"><img src="<?php echo './images/upload/' . $image; ?>" height="150" width="150" /></div>
</div>

<div class="divRow">
<div class="divColumn">Contact Number:</div>
<div><?php echo $contact_num; ?></div>
</div>

<div class="divRow">
<div class="divColumn">Remarks:</div>
<div class="divColumn50"><?php echo $remarks; ?></div>
</div>

<?php 
    }
}else{
    
//}
 ?>
 <div class="divRow">No results Found!!!</div>
 <?php } ?>