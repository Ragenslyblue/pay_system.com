<table>
<?php

/**
 * @author pakisab
 * @copyright 2016
 */
include('./config.php');

//function view_compute_payroll(){ 
$sql="SELECT * FROM `payroll` order by payroll_id ASC";
$qry=mysqli_query($CON, $sql);

echo "<table><tr><td>Payroll ID</td><td>Employee</td><td>PayDate From</td><td>PayDate To</td><td>Gross Pay</td><td>Net Pay</td><td>Edit</td><td>Delete</td><td>View</td>";

$i=1;
while($row=mysqli_fetch_array($qry)){
    $payroll_id=$row['payroll_id'];
    $employee_id=$row['employee_id'];
    $date_from=$row['date_from'];
    $date_to=$row['date_to'];
    //$employer_contribution=$row['employer_contribution'];
    
    //echo "<tr><td>" . $employee_loan_id . "</td>";
    echo "<tr><td>" . $payroll_id . "</td>";
    echo "<td>" . $employee_id . "</td>";
    echo "<td>" . $date_from . "</td>";
    echo "<td>" . $date_to . "</td>";
    //echo "<td>" . $employer_contribution . "</td>";
    echo "<td><a href='php_files/edit_compute_payroll.php?id=" . $payroll_id . "'>Edit</a></td>";
    echo "<td><a href='php_files/delete_compute_payroll.php?id=" . $payroll_id . "'>Delete</a></td></tr>";
//}
}
?>
</table>