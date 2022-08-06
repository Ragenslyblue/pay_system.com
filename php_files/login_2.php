<!DOCTYPE HTML>
<html>
<head>

<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="./css/superfish.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="./css/flexslider.css">

	<link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style2.css" />
    <link rel="stylesheet" href="../css/style3.css" />
    
    <link href="../css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="../css/templatemo-style.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    
    <link href="../css/codemirror.css" rel="stylesheet">
    <link href="../css/font-awesome.css" rel="stylesheet">
    <link href="../css/summernote.css" rel="stylesheet">
    <link href="../css/summernote-bs2.css" rel="stylesheet">
    <link href="../css/summernote-bs3.css" rel="stylesheet">

	<!-- Modernizr JS -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    
	<script src="../js/modernizr-2.6.2.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap-datetimepicker.min.js"></script>
    
    <script src="../js/codemirror.js"></script>
    <script src="../js/faq.js"></script>
    <script src="../js/npm.js"></script>
    <script src="../js/openbay.js"></script>
    <script src="../js/summernote.js"></script>
    <script src="../js/summernote.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
    
      <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css"/>
      <link rel="stylesheet" href="/resources/demos/style.css">
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
      <!--<script>
      $( function() {
        $("#birthdate").datepicker();
      } );
      </script>-->

    <script>
    
    $(document).ready(function() {
    $("#birthdate").datepicker();
  });
    
    </script>


</head>

<body>

<div id="pagelet_bluebar" data-referrer="pagelet_bluebar">
<div id="blueBarDOMInspector">
<div class="_53jh">
<div class="loggedout_menubar_container">
<div class="clearfix loggedout_menubar">
<div class="lfloat _ohe"><h1><a href="https://www.facebook.com/" title="Go to Facebook home"><i class="fb_logo img sp_UBOLMSeQmAK sx_bc7570"><u>Facebook</u></i></a></h1></div></div></div><div class="signupBanner">
<div class="signup_bar_container"><div class="signup_box clearfix"><span class="signup_box_content"><!--<a class="_42ft _4jy0 signup_btn _4jy4 _4jy2 selected _51sy" role="button" href="/r.php?locale=en_GB">Sign Up</a>--></span>
</div>
</div>
</div>
</div>
</div>
</div>

<?php
include('../config.php');
session_start();

if($_SERVER['REQUEST_METHOD']=='POST'){
    //$email='';
    //$pass='';
    $email=addslashes($_POST['email']);
    $pass=addslashes($_POST['pass']);
    
    $sql='SELECT * FROM `sign_up` WHERE username="'.$email.'" AND password="'.$pass.'"';
    $qry=mysqli_query($CON, $sql);
    $row=mysqli_fetch_array($qry);
    $num_rows=mysqli_num_rows($qry);
    
    if($num_rows==1){
        $_SESSION['login_user']=$email;
        header('Location:index.php?page=home');
    }else{
        $error='<strong class="error" style="color: red; text-align: center;">***Your username and password is Invalid try to register now!!!***</strong>';
        echo $error;
    }
}
?>


<div id="globalContainer" class="uiContextualLayerParent">
<div class="fb_content clearfix " id="content" role="main">
<div class="_4-u5 _30ny"><span class="muffin_tracking_pixel_start"></span><img class="tracking_pixel"><span class="muffin_tracking_pixel_end"></span><div class="_4-u2 _1w1t _4-u8 _52jv"><div class="_xku"><span class="_50f6">Log in to Nice Furniture</span></div>
<div class="login_form_container">

<form id="login_form" action="" method="post" enctype="multipart/form-data">
<input type="hidden" name="lsd" value="AVp2XCwd" autocomplete="off">
<div id="loginform">
<input type="hidden" autocomplete="off" id="display" name="display" value="">
<input type="hidden" autocomplete="off" id="enable_profile_selector" name="enable_profile_selector" value="">
<input type="hidden" autocomplete="off" id="isprivate" name="isprivate" value="">
<input type="hidden" autocomplete="off" id="legacy_return" name="legacy_return" value="0">
<input type="hidden" autocomplete="off" id="profile_selector_ids" name="profile_selector_ids" value="">
<input type="hidden" autocomplete="off" id="return_session" name="return_session" value="">
<input type="hidden" autocomplete="off" id="skip_api_login" name="skip_api_login" value="">
<input type="hidden" autocomplete="off" id="signed_next" name="signed_next" value="">
<input type="hidden" autocomplete="off" id="trynum" name="trynum" value="1">
<input type="hidden" autocomplete="off" name="timezone" value="-480" id="u_0_0">
<input type="hidden" autocomplete="off" name="lgndim" value="eyJ3IjoxMzY2LCJoIjo3NjgsImF3IjoxMzY2LCJhaCI6NzI4LCJjIjoyNH0=" id="u_0_1">
<input type="hidden" name="lgnrnd" value="194647_J4U6">
<input type="hidden" id="lgnjs" name="lgnjs" value="1474912063">
<div class="clearfix _5466 _44mg">
<input type="text"style="
    margin-left: -120px;
" class="inputtext _55r1 inputtext _1kbt inputtext _1kbt" name="email" id="email" tabindex="1" placeholder="Username..." value="" autofocus="1" aria-label="Email address or phone number"></div>
<div class="clearfix _5466 _44mg">
<input type="password" style="
    margin-left: -120px;
" class="inputtext _55r1 inputtext _1kbt inputtext _1kbt" name="pass" id="pass" tabindex="1" placeholder="Password..." aria-label="Password"></div>
<div class="_xkt">
<button value="1" class="_42ft _4jy0 _52e0 _4jy6 _4jy1 selected _51sy" id="loginbutton" name="login" tabindex="1" type="submit">Log In</button></div>
<input type="hidden" autocomplete="off" checked="1" name="persistent">
<input type="hidden" autocomplete="off" id="default_persistent" name="default_persistent" value="1">
<div class="_wp9">
<a class="_42ft _4jy0 _4jy4 _517h _51sy" role="button" href="">Recover Your Account</a></div><div class="_xkv"><!--<a href="/r.php?next=https%3A%2F%2Fwww.facebook.com%2F%3Fstype%3Dlo%26jlou%3DAfegbqGG3_0uD5U6t6zFnOcNkjo3QHxCT8Arz_jWYxQxaqUyKBAgsRi8TthB-XeHcVVNzEFHD3ztwd9KPcb4CqGcmVraDw7riD9UH2aL2xNXXg%26smuh%3D42243%26lh%3DAc-XQ1Qk23L8MPT5&amp;locale=en_GB&amp;display=page" rel="nofollow" id="reg-link">Sign up for Facebook</a>-->
</div>
</div>
<input type="hidden" name="qsstamp" value="W1tbMiwzOCw0MCw1MSw4NiwxMDYsMTA3LDEzOCwxNDgsMTc2LDIzNywyNDgsMjU0LDI2MywyNjUsMjkyLDI5MywzMDIsMzA4LDM1NSwzNzUsMzkwLDM5MSw0MTEsNDIzLDQzMCw0NDEsNDc3LDQ3OSw1MDAsNTA1LDUxMyw1MjMsNTM5LDU1NSw1NzUsNjE0LDYzOCw2NDcsNjcyLDY3NSw4NjVdXSwiQVprWlVWZmtkaFFMMDhGX1Q2T29xRTFJODJ2Qm9TNnJsYm9DT1Fjc2pSYjd4OWRXRDNtUnVwajNRb3JwcDI2Y3FIRVctX3h2c203NVFlZ0NpYVJPdDNuOWMwQjVtME9CQ1Y5VFEwVXlxRUpUb1VQZ3l2anpLZkhsUVEtZjU5b2IyeUF4THlhaU4wSUZ3d2hwYUpJa0F5NTY4bnhlTEo4ZlNVYk5GZlYwLXpoendzMFdmbzhieWFUeVpIQmJCTmVydU81QUlhNFRVV0E1QkZFWWx4c0ZOYS1kS1lWZnpBanNGZTdEa0FwNlZUZXZ4QSJd">
</form>
<script>if(!window.ge)window.ge=function(a){return document.getElementById(a);};window.onload=function(a){return function(){var b=ge('email'),c=ge('pass');try{if(b&&!b.value){b.focus();}else if(c)c.focus();}catch(d){if(!(d.number==-2146826178))throw d;}return a&&a.call(window);};}(window.onload);function pop(a){window.open(a);}function reload_on_new_cookie(a){function b(c){var d=new RegExp(c+'=(.*?)(;|$)');return d.test(document.cookie)?RegExp.$1:null;}if(b('c_user')||b('csm')){window.clearInterval(window.__cookieReload);window.location=a;}}function begin_polling_login_cookies(a){window.__cookieReload=setInterval(function(){reload_on_new_cookie(a);},5000);}</script>
</div>
</div>
</div>
</div>
<div id="pageFooter" data-referrer="page_footer">
<!--<ul class="uiList localeSelectorList _2pid _509- _4ki _6-h _6-j _6-i" data-nocookies="1">
<li>English (UK)</li>
<li><a dir="ltr" href="https://tl-ph.facebook.com/login.php?login_attempt=1&amp;lwv=110" onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;tl_PH&quot;, &quot;en_GB&quot;, &quot;https:\/\/tl-ph.facebook.com\/login.php?login_attempt=1&amp;lwv=110&quot;, &quot;www_list_selector&quot;, 0); return false;" title="Filipino">Tagalog</a>
</li>
<li><a dir="ltr" href="https://cx-ph.facebook.com/login.php?login_attempt=1&amp;lwv=110" onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;cx_PH&quot;, &quot;en_GB&quot;, &quot;https:\/\/cx-ph.facebook.com\/login.php?login_attempt=1&amp;lwv=110&quot;, &quot;www_list_selector&quot;, 1); return false;" title="Cebuano">Bisaya</a>
</li>
<li><a dir="ltr" href="https://es-la.facebook.com/login.php?login_attempt=1&amp;lwv=110" onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;es_LA&quot;, &quot;en_GB&quot;, &quot;https:\/\/es-la.facebook.com\/login.php?login_attempt=1&amp;lwv=110&quot;, &quot;www_list_selector&quot;, 2); return false;" title="Spanish">Español</a>
</li>
<li><a dir="ltr" href="https://ja-jp.facebook.com/login.php?login_attempt=1&amp;lwv=110" onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;ja_JP&quot;, &quot;en_GB&quot;, &quot;https:\/\/ja-jp.facebook.com\/login.php?login_attempt=1&amp;lwv=110&quot;, &quot;www_list_selector&quot;, 3); return false;" title="Japanese">???</a></li><li><a dir="ltr" href="https://ko-kr.facebook.com/login.php?login_attempt=1&amp;lwv=110" onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;ko_KR&quot;, &quot;en_GB&quot;, &quot;https:\/\/ko-kr.facebook.com\/login.php?login_attempt=1&amp;lwv=110&quot;, &quot;www_list_selector&quot;, 4); return false;" title="Korean">???</a></li><li><a dir="ltr" href="https://zh-cn.facebook.com/login.php?login_attempt=1&amp;lwv=110" onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;zh_CN&quot;, &quot;en_GB&quot;, &quot;https:\/\/zh-cn.facebook.com\/login.php?login_attempt=1&amp;lwv=110&quot;, &quot;www_list_selector&quot;, 5); return false;" title="Simplified Chinese (China)">??(??)</a></li><li><a dir="rtl" href="https://ar-ar.facebook.com/login.php?login_attempt=1&amp;lwv=110" onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;ar_AR&quot;, &quot;en_GB&quot;, &quot;https:\/\/ar-ar.facebook.com\/login.php?login_attempt=1&amp;lwv=110&quot;, &quot;www_list_selector&quot;, 6); return false;" title="Arabic">???????</a></li><li><a dir="ltr" href="https://pt-br.facebook.com/login.php?login_attempt=1&amp;lwv=110" onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;pt_BR&quot;, &quot;en_GB&quot;, &quot;https:\/\/pt-br.facebook.com\/login.php?login_attempt=1&amp;lwv=110&quot;, &quot;www_list_selector&quot;, 7); return false;" title="Portuguese (Brazil)">Português (Brasil)</a></li><li><a dir="ltr" href="https://fr-fr.facebook.com/login.php?login_attempt=1&amp;lwv=110" onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;fr_FR&quot;, &quot;en_GB&quot;, &quot;https:\/\/fr-fr.facebook.com\/login.php?login_attempt=1&amp;lwv=110&quot;, &quot;www_list_selector&quot;, 8); return false;" title="French (France)">Français (France)</a></li><li><a dir="ltr" href="https://de-de.facebook.com/login.php?login_attempt=1&amp;lwv=110" onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;de_DE&quot;, &quot;en_GB&quot;, &quot;https:\/\/de-de.facebook.com\/login.php?login_attempt=1&amp;lwv=110&quot;, &quot;www_list_selector&quot;, 9); return false;" title="German">Deutsch</a></li><li><a class="_42ft _4jy0 _517i _517h _51sy" role="button" href="#" rel="dialog" ajaxify="/settings/language/language/?uri=https%3A%2F%2Fde-de.facebook.com%2Flogin.php%3Flogin_attempt%3D1%26lwv%3D110&amp;source=www_list_selector_more" title="Show more languages"><i class="img sp_UBOLMSeQmAK sx_78c510"></i></a></li></ul><div id="contentCurve"></div><div role="contentinfo" aria-label="Facebook site links"><table class="uiGrid _51mz navigationGrid" cellspacing="0" cellpadding="0"><tbody><tr class="_51mx"><td class="_51m- hLeft plm"><a href="/r.php" title="Sign up for Facebook">Sign Up</a></td><td class="_51m- hLeft plm"><a href="/login/" title="Log in to Facebook">Log In</a></td><td class="_51m- hLeft plm"><a href="https://messenger.com/" title="Check out Messenger.">Messenger</a></td><td class="_51m- hLeft plm"><a href="/lite/" title="Facebook Lite for Android.">Facebook Lite</a></td><td class="_51m- hLeft plm"><a href="/mobile/?ref=pf" title="Check out Facebook Mobile.">Mobile</a></td><td class="_51m- hLeft plm"><a href="/find-friends?ref=pf" title="Find anyone on the web.">Find Friends</a></td><td class="_51m- hLeft plm"><a href="/badges/?ref=pf" title="Embed a Facebook badge on your website.">Badges</a></td><td class="_51m- hLeft plm"><a href="/directory/people/" title="Browse our people directory.">People</a></td><td class="_51m- hLeft plm"><a href="/directory/pages/" title="Browse our Pages directory.">Pages</a></td><td class="_51m- hLeft plm"><a href="/places/" title="Check out popular places on Facebook.">Places</a></td><td class="_51m- hLeft plm _51mw"><a href="/games/" title="Check out Facebook games.">Games</a></td></tr><tr class="_51mx"><td class="_51m- hLeft plm"><a href="/directory/places/" title="Browse our places directory.">Locations</a></td><td class="_51m- hLeft plm"><a href="/directory/celebrities/" title="Browse our Public figures &amp; celebrities directory.">Celebrities</a></td><td class="_51m- hLeft plm"><a href="/directory/groups/" title="Browse our Groups directory.">Groups</a></td><td class="_51m- hLeft plm"><a href="http://l.facebook.com/l.php?u=http%3A%2F%2Fmomentsapp.com%2F&amp;h=1AQHtDzOJ&amp;s=1" title="Check out Moments." target="_blank" rel="nofollow" onmouseover="LinkshimAsyncLink.swap(this, &quot;http:\/\/momentsapp.com\/&quot;);" onclick="LinkshimAsyncLink.referrer_log(this, &quot;http:\/\/momentsapp.com\/&quot;, &quot;\/si\/ajax\/l\/render_linkshim_log\/?u=http\u00253A\u00252F\u00252Fmomentsapp.com\u00252F&amp;h=1AQHtDzOJ&amp;render_verification=0&amp;enc&amp;d&quot;);">Moments</a></td><td class="_51m- hLeft plm"><a href="/facebook" accesskey="8" title="Read our blog, discover the resource centre and find job opportunities.">About</a></td><td class="_51m- hLeft plm"><a href="/campaign/landing.php?placement=pflo&amp;campaign_id=402047449186&amp;extra_1=auto" title="Advertise on Facebook">Create Advert</a></td><td class="_51m- hLeft plm"><a href="/pages/create/?ref_type=sitefooter" title="Create a Page">Create Page</a></td><td class="_51m- hLeft plm"><a href="https://developers.facebook.com/?ref=pf" title="Develop on our platform.">Developers</a></td><td class="_51m- hLeft plm"><a href="/careers/?ref=pf" title="Make your next career move to our brilliant company.">Careers</a></td><td class="_51m- hLeft plm"><a data-nocookies="1" href="/privacy/explanation" title="Learn about your privacy and Facebook.">Privacy</a></td><td class="_51m- hLeft plm _51mw"><a href="/policies/cookies/" title="Learn about cookies and Facebook." data-nocookies="1">Cookies</a></td></tr><tr class="_51mx"><td class="_51m- hLeft plm"><a class="_41ug" data-nocookies="1" href="https://www.facebook.com/help/568137493302217" title="Learn about Ad Choices.">AdChoices<i class="img sp_UBOLMSeQmAK sx_0e38b5"></i></a></td><td class="_51m- hLeft plm"><a data-nocookies="1" href="/policies/?ref=pf" accesskey="9" title="Review our terms and policies.">Terms</a></td><td class="_51m- hLeft plm"><a href="/help/?ref=pf" accesskey="0" title="Visit our Help Centre.">Help</a></td><td class="_51m- hLeft plm"><a class="accessible_elem" accesskey="6" href="/settings" title="View and edit your Facebook settings.">Settings</a></td><td class="_51m- hLeft plm"><a class="accessible_elem" accesskey="7" href="/allactivity?privacy_source=activity_log_top_menu" title="View your activity log">Activity Log</a></td></tr></tbody></table></div><div class="mvl copyright"><div><span> Facebook © 2016</span></div></div></div></div>
-->
</body>

</html>