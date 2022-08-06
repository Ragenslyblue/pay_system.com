<!DOCTYPE HTML>
<html>
<head>
<title>Nice Furniture & Glass Supply</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel='shortcut icon' type='image/x-icon' href='css/icons/furniture_icon.ico'/>
<!--<link href="css/ui-lightness/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" type="text/css" />-->

<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<script>
    $(document).ready(function() {
    $("#txtDateReceived").datepicker();
  });

    $(document).ready(function() {
    $("#txtBirthDate").datepicker();
  });

    $(document).ready(function() {
    $("#txtDateFrom").datepicker();
  });
   
   $(document).ready(function() {
    $("#txtDateTo").datepicker();
  });
  
  $(document).ready(function() {
    $("#txtApplicableMonth").datepicker();
  });
  
  $(document).ready(function(){
    $('#txtTimeIn').datepicker();
});
  
  $(document).ready(function() {
    $("#txtTimeOut").datepicker();
  });
  
</script>


</head>

<body>
<div id="container">
<h1>
<a href="<?php //echo $BASE_URL;?>index.php?page=home">
<img class="img-responsive" src="./css/container_image/header/gallega2.png" width="268" height="50" />
</a>
</h1>

<div id="nav">

<ul>
<li><a href="<?php //echo $BASE_URL;?>index.php?page=home">Home</a></li>
<li><a href="<?php //echo $BASE_URL;?>index.php?page=employee_info">Employee Information</a></li>
<!--<li><a href="<?php //echo $BASE_URL;?>index.php?page=employees">Employees</a></li>-->
<li><a href="<?php //echo $BASE_URL;?>index.php?page=loan">Loans</a></li>
<li><a href="<?php //echo $BASE_URL;?>index.php?page=department">Department</a></li>
<li><a href="<?php //echo $BASE_URL;?>index.php?page=salary">Salary</a></li>
<li><a href="<?php //echo $BASE_URL;?>index.php?page=allowance">Allowances</a></li>
<li><a href="<?php //echo $BASE_URL;?>index.php?page=employee_allowance">Employee Allowances</a></li>
<!--<li><a href="<?php echo $BASE_URL;?>index.php?page=attendance">Daily Time Record</a></li>-->
<!--<li><a href="<?php echo $BASE_URL;?>index.php?page=time_recorder">Time Recorder</a></li>-->
<li><a href="<?php //echo $BASE_URL;?>index.php?page=contribution">Contributions</a></li>
<li><a href="<?php //echo $BASE_URL;?>index.php?page=employee_contribution">Employee Contributions</a></li>
<li><a href="<?php //echo $BASE_URL;?>index.php?page=employee_loan">Employee Loan</a></li>
<li><a href="<?php //echo $BASE_URL;?>index.php?page=attendance">Daily Time Record</a></li>
<li><a href="<?php //echo $BASE_URL;?>index.php?page=time_recorder">Time Recorder</a></li>
<li><a href="<?php //echo $BASE_URL;?>index.php?page=view_summary">View Summary</a></li>
</ul>

</div>

<form action="<?php echo $BASE_URL;?>index.php?page=searching" class="txtSearch" id="txtSearch" name="txtSearch" method="post">
<div>
<div><input type="text" placeholder="Search Here..." id="txtsearch" name="txtsearch" class="txtSearch2" /></div>
<div><button type="submit" name="btnSubmit" class="content_search_button"></button></div>
</div>
</form>