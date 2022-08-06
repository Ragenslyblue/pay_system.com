<?php

/**
 * @author pakisab
 * @copyright 2016
 */
 include('./config.php');

//$txtPayrollID=mysqli_real_escape_string($CON, $_POST['txtPayrollID']);
$employee_id=mysqli_real_escape_string($CON, $_POST['employee_id']);
$txtDateFrom=mysqli_real_escape_string($CON, $_POST['txtDateFrom']);
$txtDateTo=mysqli_real_escape_string($CON, $_POST['txtDateTo']);

$select=mysqli_query($CON, "Select * from attendance where attendance_id='$txtDateTo'");
while($row=mysqli_fetch_array($select)){
    $attendance_id=$row['attendance_id'];
    $time_in_hour=$row['time_in_hour'];
    $overtime_hour=$row['overtime_hour'];
    
    if($time_in_hour>40){
        $qry=mysqli_query($CON, "Select * from salary");
        while($row=mysqli_fetch_array($qry)){
            $salary_id=$row['salary_id'];
            $daily_rate=$row['daily_rate'];
            
            $gross=$daily_rate*40;
            
            $ot=($time_in_hour-40)*($daily_rate*1.5);
            $totGross=$gross+$ot;
        }
    }else{
        $gross=$daily_rate*$time_in_hour;
    }if($gross<=850){
        $tax=$gross*.15;
    }elseif($gross>850&&$gross<=2060){
        $tax=$gross*.28;
    }elseif($gross>2060&&$gross<=3900){
        $tax=$gross*.32;
    }else{
        $tax=$gross*.40;
    }
    $net=$gross-$tax;
    
    //echo '<p>worked</p>';
    //echo $employee_id . ' ' . $txtDateFrom . ' ' . $txtDateTo .
    // ' ' . $time_in_hour . ' ' . $net . ' ' . $tax;
}

$duplicate=mysqli_query($CON, "Select * from payroll Where employee_id='$employee_id' OR date_from='$txtDateFrom' OR date_to='$txtDateTo'");

$num_rows=mysqli_num_rows($duplicate);

if($num_rows==0){

$sql="INSERT INTO `payroll`(employee_id,`date_from`, `date_to`) 
    VALUES ('$employee_id','$txtDateFrom','$txtDateTo')";
    
$qry=mysqli_query($CON, $sql) or die(mysqli_error());

}

echo '<p>test</p>';
    echo $employee_id . ' ' . $txtDateFrom . ' ' . $txtDateTo .
     ' ' .  ' ' . $net . ' ' . $tax;


//echo 'test' . ' ' . $totGross . ' ' . $employee_id . ' ' . $txtDateFrom . ' ' . $txtDateTo . ' ' . $time_in_hour;

//echo $payroll_id . ' ' . $employee_id . ' ' . $txtDateFrom . ' ' . $txtDateTo . ' ' . $time_in_hour . ' ' . $totGross . ' ' . $tax . ' ' . $net;
//if(!$qry){
//    die('Error' . mysqli_error($qry));
//}
//header('Location:' . $BASE_URL . 'index.php?page=view_compute_payroll2');
?>