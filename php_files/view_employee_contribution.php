<table>
<?php

/**
 * @author pakisab
 * @copyright 2016
 */
include('./config.php');

$sql="SELECT employee_contribution.*, first_name, last_name, contribution_name
from employee_contribution
INNER JOIN employee_info 
ON employee_contribution.employee_id=employee_info.employee_id
INNER JOIN contribution 
ON employee_contribution.contribution_id=contribution.contribution_id ORDER BY employee_contribution.contribution_id ASC";

$qry=mysqli_query($CON, $sql);

echo "<table class='tableEmployeeContrib'>
    <tr>
    <td class='view'>Employee</td>
    <td class='view'>Contribution</td>
    <td class='view'>Employee Contribution</td>
    <td class='view'>Month</td>
    <td class='view'>Edit</td>
    <!--<td class='view'>Delete</td>-->
    </tr>";

$i=1;
while($row=mysqli_fetch_array($qry)){
    $employee_contribution_id=$row['employee_contribution_id'];
    $employee_id=$row['employee_id'];
    $contribution_id=$row['contribution_id'];
    $contribution=$row['contribution_name'];
    $employee_contribution=$row['employee_contribution'];
    $month=$row['month'];
    $name = $row['first_name'] .' '.$row['last_name'];
    
    //echo "<tr><td>" . $employee_contribution_id . "</td>";
    echo "<tr><td>" . $name . "</td>";
    echo "<td>" . $contribution . "</td>";
    echo "<td>" . $employee_contribution . "</td>";
    echo "<td>" . $month . "</td>";
    echo "<td><a href='php_files/edit_employee_contribution.php?id=" . $employee_contribution_id . "&emp=".$employee_id. "'>Edit</a></td>";
    //echo "<td><a href='php_files/delete_employee_contribution.php?id=" . $employee_contribution_id . "&emp=".$employee_id.  "'>Delete</a></td></tr>";
}
?>
</table>