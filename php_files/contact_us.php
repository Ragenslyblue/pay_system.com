<?php

/**
 * @author pakisab
 * @copyright 2016
 */



?>
<div class="divTable">
<div class="divRow">
<div class="divColumn50"><h1>Contact Us</h1></div>
</div>

<form action="<?php echo $BASE_URL;?>index.php?page=save_contact_us" method="post" enctype="multipart/form-data">

<div class="divRow">
<div class="divColumn">From:</div>
<div class="divColumn50"><input type="text" name="txtFrom" placeholder="Place..." id="txtFrom" /></div>
</div>
	
<div class="divRow">
<div class="divColumn">Subject:</div>
<div class="divColumn50"><input type="text" name="txtSubject" placeholder="Write about the subject here..." /></div>
</div>

<div class="divRow">
<div class="divColumn">Message:</div>
<div class="divColumn50"><textarea name="txtMessage" rows="10" cols="50" id="txtMessage" placeholder="Write about your message here..."></textarea></div>
</div>

<div class="divRow">
<div class="divColumn"><input type="submit" name="btnSubmit" value="Submit Feedback" id="btnSubmit" /></div>
</div>

</form>

</div>