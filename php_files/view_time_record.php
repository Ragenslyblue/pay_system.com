<?php

/**
 * @author pakisab
 * @copyright 2016
 */

include('./config.php');

$emp_id = $_POST['emp_id'];
$date_from =$_POST['txtDateFrom'];
$date_to =$_POST['txtDateTo']; 
$date_received=$_POST['txtDateReceived'];
//$txtOvertime=$_POST['txtOvertime'];

//header('Location:' . $BASE_URL . 'index.php?page=time_recorder');

/*if(isset($_POST['btnViewSummary'])){
    header('Location:' . $BASE_URL . 'index.php?page=view_summary');
}*/
?>
<div class="divTable">
<div class="divRow">
<div class="divColumn"><h1>Time Recorder</h1></div>
</div>

<!--<form action="" method="post" enctype="multipart/form-data">
<div class="divRow">
<div class="divColumn"><input type="submit" name="btnViewSummary" value="View Summary" /></div>
</div>
</form>-->

<div class="divRow">
<div class="divColumn">Employee Number: <?php echo $emp_id;  ?></div>
<div class="divColumn50"></div>
</div>

<div class="divRow">
<div class="divColumn">Employee Name: <?php echo $_POST['emp_name'];  ?></div>
<div class="divColumn50"></div>
</div>

<div class="divRow">
<div class="divColumn">Date From: <?php echo $date_from;  ?></div>
<div class="divColumn50"></div>
</div>

<div class="divRow">
<div class="divColumn">Date To: <?php echo $date_to; ?></div>
<div class="divColumn50"></div>
</div>

<!--<form action="<?php //echo $BASE_URL;?>index.php?page=save_overtime" method="post" enctype="multipart/form-data">

<div class="divRow">
<div class="divColumn">Overtime Hours:</div>
<div class="divColumn50"><input type="text" name="txtOvertime" value="" id="txtOvertime" placeholder="Input Overtime..." /></div>
</div>

</form>-->

<table>
<?php
$sql="Select * from attendance 
       where date_value BETWEEN '$date_from'
       AND '$date_to' 
       AND employee_id = ".$emp_id." 
       ORDER by attendance_id ASC";
$qry=mysqli_query($CON, $sql);

echo "<table class='table'>
            <tr><td class='view'>Date</td>
                <td class='view'>Time In</td>
                <td class='view'>Time out</td>
                <td class='view'>Number of Hours</td>";

$total_hrs=0;
while($row=mysqli_fetch_array($qry)){
    
    $date_value= $row['date_value'];
    $time_value= $row['time_value'];
    $status= $row['status'];
    
    if($status=="in"){
        
    $time_in = $time_value;
    
    echo "<tr>"; 
    echo "<td>" . $date_value . "</td>";
    echo "<td>" . $time_in . "</td>";   

    
    }else{
        
    $time_out = $time_value;
    
    $start = date_create($time_in);
    $end = date_create($time_out);
    $diff=date_diff($end,$start);
 // print_r($diff);
  
  $num = $diff->h;
  
    echo "<td>" . $time_out . "</td>";
    echo "<td>" . $num . "</td>";
    
    $total_hrs=$total_hrs+$num;
    
    
   /* echo "<td>
            <select id='txtreg_hrs[$ctr]' name='txtreg_hrs[$ctr]' 
            onchange='document.getElementById('txt_ot[$ctr]').value=this.options[this.selectedIndex].text'
            >";
    $i=$num;
        while($i>=0){        
            echo '<option value="'. $i . '">'.$i.'</option>';
        $i--;
        }
        echo "</select></td>";    
    echo "<td><input type='text' name='txt_ot[$ctr]' id='txt_ot[$ctr]' value=''            
             /></td>";
    */
    echo "</tr>";    
    } 
     
}
echo "</table>";

?>
</table>


<!-- PAYROLL -->
<?php
$sql5="Select * from payroll_received";
$qry5=mysqli_query($CON, $sql5);

$regular_hours=0;

while($row2=mysqli_fetch_array($qry5)){
    $overtime=$row2['overtime'];
    
    $regular_hours=$total_hrs-$overtime;
}
?>

<?php
$sql="Select * from salary where employee_id=" . $emp_id;
$qry=mysqli_query($CON, $sql);

//echo var_dump($qry);

$rate_hours=0;
$basic=0;
while($row=mysqli_fetch_array($qry)){
    $daily_rate=$row['daily_rate'];
    
    
    $rate_hours=$daily_rate/8;
    $basic=$rate_hours*$total_hrs;
}
$sql2="SELECT employee_allowance.*, allowance_name
from employee_allowance
INNER JOIN employee_info 
ON employee_allowance.employee_id=employee_info.employee_id
INNER JOIN allowances 
ON employee_allowance.allowance_id=allowances.allowance_id ORDER BY employee_allowance.allowance_id ASC";

$qry2=mysqli_query($CON, $sql2);

$allowance=0;
while($row2=mysqli_fetch_array($qry2)){
    $employee_allowance_id=$row2['employee_allowance_id'];
    $employee_id=$row2['employee_id'];
    $allowance_id=$row2['allowance_id'];
    $allowance_name=$row2['allowance_name'];
    $amount=$row2['amount'];
    //$name = $row2['first_name'] .' '.$row2['last_name'];
    
    $allowance=$amount;
}
?>
<?php
$sql3="SELECT employee_loan.*, loan_name
from employee_loan
INNER JOIN loan 
ON employee_loan.loan_id=loan.loan_id 
WHERE employee_id=$emp_id
ORDER BY employee_loan.loan_id ASC";

$qry3=mysqli_query($CON, $sql3) or die('Error'. mysqli_error($CON));

$loan=0;
$loan_name = "LOAN";
if(mysqli_num_rows($qry3) > 0){
    while($row=mysqli_fetch_array($qry3)){ 
        $employee_loan_id=$row['employee_loan_id'];
        $employee_id=$row['employee_id'];
        $loan_id=$row['loan_id'];
        $loan_name=$row['loan_name'];
        $loan_amount=$row['loan_amount'];
        //$name = $row['first_name'] .' '.$row['last_name'];
        
        $loan=$loan_amount;
    }
}

$sql4="SELECT employee_contribution.*, contribution_name
from employee_contribution
INNER JOIN contribution 
ON employee_contribution.contribution_id=contribution.contribution_id 
WHERE employee_id=$emp_id
ORDER BY employee_contribution.contribution_id ASC";

$qry4=mysqli_query($CON, $sql4) or die('Error:'. mysqli_error($CON));

$contribution=0;
$contribution_name="CONTRIBUTION";
$month='';
if(mysqli_num_rows($qry4) > 0){
    $i=1;
    //$month='';
    while($row=mysqli_fetch_array($qry4)){
        $employee_contribution_id=$row['employee_contribution_id'];
        $employee_id=$row['employee_id'];
        $contribution_id=$row['contribution_id'];
        $employee_contribution=$row['employee_contribution'];
        $month=$row['month'];
        $employer_contribution=$row['employer_contribution'];
        $contribution_name=$row['contribution_name'];
        
        $contribution=$employee_contribution;
    }
}

/*echo "<table class='tableSummary2'>
    <tr>
    <!--<td class='view'>employee_contribution_id</td>-->
    <!--<td class='view'>employee</td>-->
    <!--<td class='view'>contribution_id</td>-->
    <td class='view'>employee_contribution</td>
    <td class='view'>contribution_name</td>
    <td class='view'>Delete</td>
    </tr>";
    
    $contribution=0;
    $contribution_name="CONTRIBUTION";
    if(mysqli_num_rows($qry4) > 0){
    $i=1;
    while($row=mysqli_fetch_array($qry4)){
        $employee_contribution_id=$row['employee_contribution_id'];
        $employee_id=$row['employee_id'];
        $contribution_id=$row['contribution_id'];
        $employee_contribution=$row['employee_contribution'];
        $employer_contribution=$row['employer_contribution'];
        $contribution_name=$row['contribution_name'];
        
        $contribution=$employee_contribution;
        
    //}
//}

    
    //echo $date_from . ' ' . $date_to;
    echo "<tr><td>" . $employee_contribution . "</td>";
    //echo "<td>" . $employee_id . "</td>";
    //echo "<td>" . $contribution_id . "</td>";
    //echo "<td>" . $employee_contribution . "</td>";
    echo "<td>" . $contribution_name . "</td>";
    //echo "<td>" . $contribution . "</td>";
    //echo "<td>" . $date_received . "</td>";
    
    
    echo "<td><a href='php_files/delete_summary.php?id=" . $employee_contribution_id . "'>Delete</a></td></tr>";
    //echo "<td><a href='php_files/view_summary2.php?id=" . $employee_id . "'>View</a></td></tr>";
}}
echo '</table>';*/
?>

<div class="divRow">
<div class="divColumn" id="total_hrs">Total Number of Hours: <?php echo $total_hrs;  ?></div>
<div class="divColumn50"></div>
</div>


<div class="divRow">
<div class="divColumn">Regular Hours:<?php echo $regular_hours; ?></div>
</div>

<div class="divRow">
<div class="divColumn">Overtime Pay:
<?php 
$overtime_pay=$overtime*$basic*0.25;
echo $overtime_pay;
?></div>
</div>


<div class="divRow">
<div class="divColumn">Rate per hour: <?php echo $rate_hours; ?></div>
<div class="divColumn50"></div>
</div>

<div>
<div><br /><br /></div>
</div>

<div class="divRow">
<div class="divColumn">Basic pay: 
<?php 
$basic=$basic+$allowance*$regular_hours;
echo $basic;
?>
</div>
<div class="divColumn50"></div>
</div>

<div>
<div><br /><br /></div>
</div>

<div class="divRow">
<div class="divColumn">Less deductions: <?php //echo $allowance_name .':'.' '. $allowance; ?></div>
<div class="divRow"><?php //echo $allowance_id .':'.' '. $allowance; ?></div>
<div class="divRow"><?php echo $loan_name . ':' . ' ' . $loan; ?></div>
<div class="divRow"><?php echo $contribution_name . ':' . ' ' . $contribution .' '. '->' .$month; ?></div>

<div class="divRow">
<div class="divColumn"><hr /></div>
</div>

<div class="divRow">
<?php 
$total_deduction=$loan+$contribution;
echo "TOTAL DEDUCTIONS : ".$total_deduction;
?></div>
<div class="divColumn50"></div>
</div>

<div>
<div><br /><br /></div>
</div>

<div class="divRow">
<div class="divColumn">Net Pay:
<?php 
$netpay=$basic+$overtime_pay-$total_deduction;
echo $netpay;
?></div>
<div class="divColumn50"></div>
</div>

<div class="divRow">
<div class="divColumn"><br /><br /></div>
</div>

<div class="divRow">
<div class="divColumn">Date Received:<?php echo $date_received; ?></div>
<div class="divColumn50"></div>
</div>

<div class="divRow">
<div class="divColumn"><br /><br /></div>
</div>

<?php

$time_in=0;
$time_out=0;
$num=0;
$date_value=0;
$duplicate=mysqli_query($CON, "Select * from payroll WHERE employee_id='$emp_id' AND date_received='$date_received'") or exit(mysqli_error());

$num_rows=mysqli_num_rows($duplicate);

if($num_rows==0){

/*$sql="INSERT INTO `payroll`(employee_id, date_received, date_from, date_to, time_in, time_out, num_hours, rate_hours, regular_hours, overtime_pay, basic_pay, total_deductions, date_value, net_pay, overtime) 
    VALUES ('$emp_id', '$date_received', '$date_from', '$date_to', '$time_in','$time_out', '$num', '$rate_hours', '$regular_hours', '$overtime_pay', '$basic', '$total_deduction', '$date_value','$netpay', '$txtOvertime')";
$qry=mysqli_query($CON, $sql) or die(mysqli_error());*/

$sql="INSERT INTO `payroll`(`employee_id`, `date_received`, `date_from`, `date_to`, `time_in`, `time_out`, `num_hours`, `regular_hours`, `overtime_pay`, `rate_hours`, `basic_pay`, `total_deductions`, `date_value`, `net_pay`) 
    VALUES ('$emp_id', '$date_received', '$date_from', '$date_to', '$time_in', '$time_out', '$num', '$regular_hours', '$overtime_pay', '$rate_hours', '$basic', '$total_deduction', '$date_value', '$netpay')";
$qry=mysqli_query($CON, $sql) or die(mysqli_error());
}
?>

<!--<div class="divRow">
<div class="divColumn50">
<form>
<input type="button" value="Print this page" onClick="window.print()">
</form></div>
</div>-->

</div>