<table>
<?php

/**
 * @author pakisab
 * @copyright 2016
 */

include('./config.php');

$sql="SELECT * FROM `attendance` order by attendance_id ASC";
$qry=mysqli_query($CON, $sql);

echo "<table class='table'>
    <tr>
    <td>Employee</td>
    <td>Date</td>
    <td>Overtime</td>
    <td>Late</td>
    <td>Time In</td>
    <td>Time Out</td>
    <td>Edit</td>
    <td>Delete</td>
    </tr>";

$i=1;
while($row=mysqli_fetch_array($qry)){
    $attendance_id=$row['attendance_id'];
    //$invID=str_pad($attendance_id, 4, '0', STR_PAD_LEFT);
    
    $employee_id=$row['employee_id'];
    $date=$row['date'];
    //$overtime=$row['overtime'];
    $overtime_hour=$row['overtime_hour'];
    //$late=$row['late'];
    $late_hour=$row['late_hour'];
    //$time_in=$row['time_in'];
    $time_in_hour=$row['time_in_hour'];
    //$time_out=$row['time_out'];
    $time_out_hour=$row['time_out_hour'];
    //$department_id=$row['department_id'];
    
    //echo "<tr><td>" . $attendance_id . "</td>";
    echo "<tr><td>" . $employee_id . "</td>";
    echo "<td>" . $date . "</td>";
    echo "<td>" .  $overtime_hour . "</td>";
    //echo "<td>" . $overtime_hour . "</td>";
    echo "<td>" .  $late_hour . "</td>";
    echo "<td>" .  $time_in_hour . "</td>";
    echo "<td>" .  $time_out_hour . "</td>";
    //echo "<td>" . $department_id . "</td>";
    echo "<td><a href='php_files/edit_attendance.php?id=" . $attendance_id . "'>Edit</a></td>";
    echo "<td><a href='php_files/delete_attendance.php?id=" . $attendance_id . "'>Delete</a></td></tr>";
}
?>
</table>