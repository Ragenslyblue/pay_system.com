<table>
<?php

/**
 * @author pakisab
 * @copyright 2016
 */
 
include('./config.php');
$sql="SELECT salary.*, first_name, last_name, department_name
from salary
LEFT JOIN employee_info 
ON salary.employee_id=employee_info.employee_id
LEFT JOIN department 
ON salary.department_id=department.department_id ORDER BY salary.department_id ASC";

$qry=mysqli_query($CON, $sql);

echo "<table class='tableSalary'>
        <tr>
        <!--<td>ID Number</td>-->
        <td class='view'>Employee Name</td>
        <td class='view'>Department</td>
        <td class='view'>Daily Rate</td>
        <td class='view'>Position</td>
        <td class='view'>Edit</td>
        <td class='view'>Delete</td>
        </tr>";

$i=1;
while($row=mysqli_fetch_array($qry)){
    $salary_id=$row['salary_id'];
    $employee_id=$row['employee_id'];
    $department_id=$row['department_id'];
    $department=$row['department_name'];
    $daily_rate=$row['daily_rate'];
    $txtPosition=$row['position'];
    $name = $row['first_name'] .' '.$row['last_name'];

    
    //echo "<tr><td>" . $employee_id . "</td>";
    echo "<tr><td>" . $name . "</td>";
    echo "<td>" . $department . "</td>";
    echo "<td>" . $daily_rate . "</td>";
    echo "<td>" . $txtPosition . "</td>";
    echo "<td><a href='php_files/edit_salary.php?id=" . $salary_id . "&emp=".$employee_id. "&emp=".$department_id."'>Edit</a></td>";
    echo "<td><a href='php_files/delete_salary.php?id=" . $salary_id . "&emp=" . $employee_id . "&emp=" . $department_id . "'>Delete</a></td></tr>";
}
?>
</ol>
</table>
<?php //} ?>