<table>
<?php

/**
 * @author pakisab
 * @copyright 2016
 */
include('./config.php');

$sql="SELECT employee_allowance.*, first_name, last_name, allowance_name
from employee_allowance
INNER JOIN employee_info 
ON employee_allowance.employee_id=employee_info.employee_id
INNER JOIN allowances 
ON employee_allowance.allowance_id=allowances.allowance_id ORDER BY employee_allowance.allowance_id ASC";

$qry=mysqli_query($CON, $sql);

echo "<table class='tableEmployeeAllow'>
    <tr>
    <td class='view'>Employee</td>
    <td class='view'>Allowance</td>
    <td class='view'>Amount</td>
    <td class='view'>Edit</td>
    <!--<td class='view'>Delete</td>-->
    </tr>";

$i=1;
while($row=mysqli_fetch_array($qry)){
    $employee_allowance_id=$row['employee_allowance_id'];
    $employee_id=$row['employee_id'];
    $allowance_id=$row['allowance_id'];
    $allowance=$row['allowance_name'];
    $amount=$row['amount'];
    $name = $row['first_name'] .' '.$row['last_name'];
    
    //echo "<tr><td>" . $employee_allowance_id . "</td>";
    echo "<tr><td>" . $name . "</td>";
    echo "<td>" . $allowance . "</td>";
    echo "<td>" . $amount . "</td>";
    echo "<td><a href='php_files/edit_employee_allowance.php?id=" . $employee_allowance_id . "&emp=".$employee_id. "&emp=".$allowance_id. "'>Edit</a></td>";
    //echo "<td><a href='php_files/delete_employee_allowance.php?id=" . $employee_allowance_id . "&emp=".$employee_id. "&emp=".$allowance_id. "'>Delete</a></td></tr>";
}
?>
</table>