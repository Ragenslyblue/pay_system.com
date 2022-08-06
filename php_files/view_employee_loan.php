<table>
<?php

/**
 * @author pakisab
 * @copyright 2016
 */
include('./config.php');

$sql="SELECT employee_loan.*, first_name, last_name, loan_name
    from employee_loan
    INNER JOIN employee_info 
    ON employee_loan.employee_id=employee_info.employee_id
    INNER JOIN loan 
    ON employee_loan.loan_id=loan.loan_id ORDER BY employee_loan.loan_id ASC";

$qry=mysqli_query($CON, $sql);

echo "<table class='tableEmployeeLoan'>
    <tr>
    <td class='view'>Employee</td>
    <td class='view'>Loan</td>
    <td class='view'>Loan Amount</td>
    <td class='view'>Edit</td>
    <!--<td class='view'>Delete</td>-->
    </tr>";

$i=1;
while($row=mysqli_fetch_array($qry)){
    $employee_loan_id=$row['employee_loan_id'];
    $employee_id=$row['employee_id'];
    $loan_id=$row['loan_id'];
    $loan=$row['loan_name'];
    $loan_amount=$row['loan_amount'];
    $name = $row['first_name'] .' '.$row['last_name'];
    
    //echo "<tr><td>" . $employee_loan_id . "</td>";
    echo "<tr><td>" . $name . "</td>";
    echo "<td>" . $loan . "</td>";
    echo "<td>" . $loan_amount . "</td>";
    //echo "<td>" . $employer_contribution . "</td>";
    echo "<td><a href='php_files/edit_employee_loan.php?id=" . $employee_loan_id . "&emp=".$employee_id. "&emp=".$loan_id. "'>Edit</a></td>";
    //echo "<td><a href='php_files/delete_employee_loan.php?id=" . $employee_loan_id . "&emp=".$employee_id. "&emp=".$loan_id. "'>Delete</a></td></tr>";
}
?>
</table>