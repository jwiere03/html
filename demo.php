<html><head><title>Demo</title>
<style>.table {
		width: 960px;
		margin: 0 auto 50px;		
	}
	.question, .response, .details {    
    padding: 5px;
    display: flex;
    border-top: 2px solid #000000;
min-height: 64px;
    flex: 1;
	}
		.table .row:last-child .response,.table .row:last-child .question, .table .row:last-child .details{
    border-bottom: 2px solid #000000;
		}
.question, .details { 
  width: 30%;
}
.response {
  width: 19%;
  justify-content: center;
		align-items: center;
}
.question, .response {
  border-right: 2px solid #000000;
}
.question {
  border-left: 2px solid #000000;
}
.details {
  border-right: 2px solid #000000;
}
.top{
		background-color: #f5f5f5;
		text-align: center;
		font-weight: 900;
		justify-content: center;
		align-items: center;
}
.yes {
  background-color: green;
  text-align: center;
}
.no {
  background-color: red;
  text-align: center;
}
.table div {
  min-height: 32px;
}
.last {
       border-bottom: 2px solid #000000;
}
.row {
	width: 100%;
	clear: both;
  	justify-content: space-between;  
  display: flex;
  	flex-wrap: wrap;
}
.row div {
flex: 1;
}
h2, h3 {
	text-align:center;
}
</style>
</head><body>
<?php 
$header_domain=null;
$website_name=null;
$header_logo=null;
$header_tagline=null;
$header_phone=null;

$header_domain_details=null;
$header_tagline_details=null;
$header_logo_details=null;
$header=0;
$atf=0;
$btf=0;
$footer=0;
 if($_POST)
    {
    $website_name = $_POST["website-name"];
    $header_domain=$_POST["header-domain"];
    $header_domain_details=$_POST["header-domain-details"];
    $header_logo=$_POST["header-logo"];
    $header_logo_details=$_POST["header-logo-details"];
    $header_tagline=$_POST["header-tagline"];
    $header_tagline_details=$_POST["header-tagline-details"];
    $header_phone = $_POST["header-phone"];
    $header_cta = $_POST["header-cta"];
    $header_top = $_POST["header-top"];
    $header_phone_details=$_POST["header-phone-details"];
    $header_cta_details=$_POST["header-cta-details"];
    $header_top_details=$_POST["header-top-details"];
    //ATF
    $atf_slider= $_POST["atf-slider"];
    $atf_reviews = $_POST["atf-reviews"];
    $atf_info = $_POST["atf-info"];
    $atf_slider_details=$_POST["atf-slider-details"];
    $atf_reviews_details=$_POST["atf-reviews-details"];
    $atf_info_details=$_POST["atf-info-details"];
        //BTF
    $btf_content= $_POST["btf-content"];
    $btf_features = $_POST["btf-features"];
    $btf_internal = $_POST["btf-internal"];
    $btf_content_details=$_POST["btf-content-details"];
    $btf_features_details=$_POST["btf-features-details"];
    $btf_internal_details=$_POST["btf-internal-details"];
    //Footer
     $footer_navigation=$_POST["footer-navigation"];
    $footer_navigation_details=$_POST["footer-navigation-details"];
    $footer_social=$_POST["footer-social"];
    $footer_social_details=$_POST["footer-social-details"];
    $footer_chat=$_POST["footer-chat"];
    $footer_chat_details=$_POST["footer-chat-details"];
    $footer_hours = $_POST["footer-hours"];
    $footer_contact = $_POST["footer-contact"];
    $footer_contact_details = $_POST["footer-contact-details"];
    $footer_hours_details=$_POST["footer-hours-details"];

if ($header_domain=="yes") {
	$header++;
}
if ($header_logo=="yes") {
	$header++;
}
if ($header_tagline=="yes") {
	$header++;
}
if ($header_phone=="yes") {
	$header++;
}
if ($header_cta=="yes") {
	$header++;
}
if ($header_top=="yes") {
	$header++;
}
if ($atf_slider=="yes") {
	$atf++;
}
if ($atf_reviews=="yes") {
	$atf++;
}
if ($atf_info=="yes") {
	$atf++;
}
if ($btf_content=="yes") {
	$btf++;
}
if ($btf_features=="yes") {
	$btf++;
}
if ($btf_internal=="yes") {
	$btf++;
}
if ($footer_navigation=="yes") {
	$footer++;
}
if ($footer_social=="yes") {
	$footer++;
}
if ($footer_chat=="yes") {
	$footer++;
}
if ($footer_hours=="yes") {
	$footer++;
}
if ($footer_contact=="yes") {
	$footer++;
}
}
    ?>
  <div style="height: 50vh; display: flex; align-items: flex-end; justify-content: center;"> <img src="SCS_Logo_IT_Better_clipped_rev_1.png" style="width: 300px; height: auto;"></div>
   <div style="height: 50vh; display: flex; align-items: flex-start; justify-content: center;"> <div style="flex-direction: column;"><h1 style="text-align: center;">Website Evaluation conducted for</h1><h2 style="text-align: center;">
		<?php echo $website_name; ?>
   </h2></div></div>
	
<h2>Page Header</h2>
<h3><?php echo $header;?> / 6 <?php $header = $header/6; echo round($header*100,2);?>%</h3>
<div class="table"><div class="row"><div class="question top">Question</div><div class="response top">Response</div><div class="details top">Details</div></div>
<div class="row"><div class="question">An easily readable and memorable domain name?</div><div class="response <?php echo $header_domain;?>"><?php echo $header_domain;?></div><div class="details"><?php echo $header_domain_details;?></div></div>

<div class="row"><div class="question">Logo?</div><div class="response <?php echo $header_logo;?>"><?php echo $header_logo;?></div><div class="details"><?php echo $header_logo_details;?></div></div>

<div class="row"><div class="question">TagLine - concise business description?</div><div class="response <?php echo $header_tagline;?>"><?php echo $header_tagline;?></div><div class="details"><?php echo $header_tagline_details;?></div></div>

<div class="row"><div class="question">Phone Number?</div><div class="response <?php echo $header_phone;?>"><?php echo $header_phone;?></div><div class="details"><?php echo $header_phone_details;?></div></div>

<div class="row"><div class="question">Call-to-Action - What should visitors do?</div><div class="response <?php echo $header_cta;?>"><?php echo $header_cta;?></div><div class="details"><?php echo $header_cta_details;?></div></div>

<div class="row"><div class="question">Top Navivigation - discreet options for
critical pages?</div><div class="response <?php echo $header_top;?>"><?php echo $header_top;?></div><div class="details"><?php echo $header_top_details;?></div></div>

</div>
<h2>Above The Fold</h2>
<h3><?php echo $atf;?> / 3 <?php $atf = $atf/3; echo round($atf*100,2);?>%</h3>
<div class="table"><div class="row"><div class="question top">Question</div><div class="response top">Response</div><div class="details top">Details</div></div>
<div class="row"><div class="question">Image / Slider?</div><div class="response <?php echo $atf_slider;?>"><?php echo $atf_slider;?></div><div class="details"><?php echo $atf_slider_details;?></div></div>

<div class="row"><div class="question">Reviews & Testimonials?</div><div class="response <?php echo $atf_reviews;?>"><?php echo $atf_reviews;?></div><div class="details"><?php echo $atf_reviews_details;?></div></div>

<div class="row"><div class="question">Important Business Info?</div><div class="response <?php echo $atf_info;?>"><?php echo $atf_info;?></div><div class="details"><?php echo $atf_info_details;?></div></div></div></div>

<h2>Below The Fold</h2>
<h3><?php echo $btf;?> / 3 <?php $btf = $btf/3; echo round($btf*100,2);?>%</h3>
<div class="table"><div class="row"><div class="question top">Question</div><div class="response top">Response</div><div class="details top">Details</div></div>
<div class="row"><div class="question">Quality Content?</div><div class="response <?php echo $btf_content;?>"><?php echo $btf_content;?></div><div class="details"><?php echo $btf_content_details;?></div></div>

<div class="row"><div class="question">Main Features - Products & Services?</div><div class="response <?php echo $btf_features;?>"><?php echo $btf_features;?></div><div class="details"><?php echo $btf_features_details;?></div></div>

<div class="row"><div class="question">Internal Links?</div><div class="response <?php echo $btf_internal;?>"><?php echo $btf_internal;?></div><div class="details"><?php echo $btf_internal_details;?></div></div></div>
<h2>Page Footer</h2>
<h3><?php echo $footer;?> / 5 <?php $footer = $footer/5; echo round($footer*100,2);?>%</h3>
<div class="table"><div class="row"><div class="question top">Question</div><div class="response top">Response</div><div class="details top">Details</div></div>
<div class="row"><div class="question">Navigation - Common secondary pages?</div><div class="response <?php echo $footer_navigation;?>"><?php echo $footer_navigation;?></div><div class="details"><?php echo $footer_navigation_details;?></div></div>

<div class="row"><div class="question">Social Media Buttons?</div><div class="response <?php echo $footer_social;?>"><?php echo $footer_social;?></div><div class="details"><?php echo $footer_social_details;?></div></div>

<div class="row"><div class="question">Online Chat Feature?</div><div class="response <?php echo $footer_chat;?>"><?php echo $footer_chat;?></div><div class="details"><?php echo $footer_chat_details;?></div></div>

<div class="row"><div class="question">Business Hours?</div><div class="response <?php echo $footer_hours;?>"><?php echo $footer_hours;?></div><div class="details"><?php echo $footer_hours_details;?></div></div>

<div class="row"><div class="question">Contact Information - Address, Phone #, link to Contact Form?</div><div class="response <?php echo $footer_contact;?>"><?php echo $footer_contact;?></div><div class="details"><?php echo $footer_contact_details;?></div></div>



</div></div>
</body></html>