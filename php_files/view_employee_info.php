<table>
<?php

/**
 * @author pakisab
 * @copyright 2016
 */

include('./config.php');

$sql="SELECT * FROM `employee_info` order by employee_id ASC";
$qry=mysqli_query($CON, $sql);

echo "<table class='table' style='
    margin-top: 100px;
'>
    <tr>
    <td class='view'>Employee ID</td>
    <td class='view'>First Name</td>
    <td class='view'>Last Name</td>
    <!--<td class='view'>Age</td>-->
    <td class='view'>Gender</td>
    <td class='view'>Address</td>
    <!--<td>Birthdate</td>
    <td class='view'>Email</td>
    <td class='view'>Contact Number</td>
    <td class='view'>Position</td>-->
    <td class='view'>Edit</td>
    <!--<td class='view'>Delete</td>-->
    <td class='view'>View</td>
    </tr>";

$i=1;
while($row=mysqli_fetch_array($qry)){
    $employee_id=$row['employee_id'];
    //$employee_id_num=$row['employee_id_num'];
    //$date=date('y');
    //$id=$employee_id+$date;
    //$invID=str_pad($id, 5, 1, STR_PAD_BOTH);
    
    $first_name=$row['first_name'];
    $last_name=$row['last_name'];
    //$age=$row['age'];
    $gender=$row['gender'];
    $address=$row['address'];
    $birthdate=$row['birthdate'];
    $email=$row['email'];
    //$image=$row['image'];
    $contact_num=$row['contact_num'];
    //$remarks=$row['remarks'];
    //$position=$row['position'];
//}

//echo "<tr><td>" . $employee_id . "</td><td>" . $first_name . "</td><td>"
//     . $last_name . "</td><td>" . $age . "</td><td>asd</td></tr>";
    
    echo "<tr><td>" . $employee_id . "</td>";
    echo "<td>" . $first_name . "</td>";
    echo "<td>" . $last_name . "</td>";
    //echo "<td>" . $age . "</td>"; 
    echo "<td>" . $gender . "</td>";
    echo "<td>" . $address . "</td>";
    //echo "<td>" . $birthdate . "</td>";
    //echo "<td>" . $email . "</td>";
    //echo "<td>" . '<img src=' . "./images/upload/" . $image . ' height="150" width="150" />' . "</td>";
    //echo "<td>" . $contact_num . "</td>";
    //echo "<td>" . $remarks . "</td>";
    //echo "<td>" . $position . "</td>";
    echo "<td><a href='php_files/edit_employee_info.php?id=" . $employee_id . "'>Edit</a></td>";
    //echo "<td><a href='php_files/delete_employee_info.php?id=" . $employee_id . "'>Delete</a></td>";
    echo "<td><a href='php_files/view_employee_info2.php?id=" . $employee_id . "'>View</a></td></tr>";
  //  echo "<table>";
}
?>
</table>

<!--<div>
<div>Employee ID:</div>
<div><span><?php //echo $employee_id; ?></span></div>
</div>

<a href="php_files/delete_employee_info.php?id=<?php //echo $employee_id; ?>"
onclick="return confirm('Are you sure you wish to delete this record?');">
<span class="delete" title="Delete">Delete</span>
</a>

<div>
<div>First Name:</div>
<div><span><?php //echo $first_name; ?></span></div>
</div>

<a href="php_files/edit_employee_info.php?id=<?php //echo $employee_id; ?>"><span class="edit" title="Edit">Edit</span>
</a>

<div>
<div>Last Name:</div>
<div><span><?php //echo $last_name; ?></span></div>
</div>

<div>
<div>Age:</div>
<div><span><?php //echo $age; ?></span></div>
</div>

<?php //} ?>