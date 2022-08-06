<link rel="stylesheet" type="text/css" href="../css/style.css" />
<link rel='shortcut icon' type='image/x-icon' href='../css/icons/furniture_icon.ico'/>

<?php

/**
 * @author pakisab
 * @copyright 2016
 */

include('../config.php');

?>



<div class="divTable">
<div class="divRow">
<!--<div class="divColumn50"><h1>View Summary</h1></div>-->
</div>


<!--<div id="container">-->

<table>
<?php

/**
 * @author pakisab
 * @copyright 2016
 */

//include('./config.php');

/*if(isset($_POST['btnNext'])){
    header('Location:' . $BASE_URL . 'index.php?page=home');
}*/

$sql="SELECT payroll.*, first_name, last_name
from payroll
INNER JOIN employee_info 
ON payroll.employee_id=employee_info.employee_id
ORDER BY payroll.employee_id ASC";

$qry=mysqli_query($CON, $sql);

echo "<table class='tableSummary2'>
    <tr>
    <!--<td class='view'>Payroll ID</td>-->
    <td class='view'>Employee ID</td>
    <td class='view'>Employee Name</td>
    <td class='view'>Total Salary</td>
    <td class='view'>Date From</td>
    <td class='view'>Date To</td>
    <td class='view'>Date Receieved</td>
    <!--<td class='view'>Delete</td>-->
    </tr>";
    
$i=1;
while($row=mysqli_fetch_array($qry)){
    $payroll_id=$row['payroll_id'];
    $employee_id=$row['employee_id'];
    $netpay=$row['net_pay'];
    $date_received=$row['date_received'];
    $date_from=$row['date_from'];
    $date_to=$row['date_to'];
    //$month_date=$row['date_from'] . ' ' . $row['date_to'];
    $name = $row['first_name'] .' '.$row['last_name'];
    
    //echo $date_from . ' ' . $date_to;
    //echo "<tr><td>" . $payroll_id . "</td>";
    echo "<tr><td>" . $employee_id . "</td>";
    echo "<td>" . $name . "</td>";
    echo "<td>" . $netpay . "</td>";
    echo "<td>" . $date_from . "</td>";
    echo "<td>" . $date_to . "</td>";
    echo "<td>" . $date_received . "</td>";
    
    
    //echo "<td><a href='php_files/delete_print_summary.php?id=" . $payroll_id . "'>Delete</a></td></tr>";
    //echo "<td><a href='php_files/view_summary2.php?id=" . $employee_id . "'>View</a></td></tr>";
}
?>
<!--</div>-->
</table>

<div class="divRow">
<div class="divColumn50">
<form action="" method="post" enctype="multipart/form-data">
<input type="button" id="add_loan" class="hide" value="Print summary" onClick="window.print()">
</form></div>
</div>

