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
}
    ?>
	<h1>
		<?php echo $website_name; ?>
   </h1>

<h2>Page Header</h2>
<h3><?php echo $header;?> / 6 <?php $header = $header/6; echo round($header,2);?>%</h3>
<div class="table"><div class="row"><div class="question top">Question</div><div class="response top">Response</div><div class="details top">Details</div></div>
<div class="row"><div class="question">An easily readable and memorable domain name?</div><div class="response <?php echo $header_domain;?>"><?php echo $header_domain;?></div><div class="details"><?php echo $header_domain_details;?></div></div>

<div class="row"><div class="question">Logo?</div><div class="response <?php echo $header_logo;?>"><?php echo $header_logo;?></div><div class="details"><?php echo $header_logo_details;?></div></div>

<div class="row"><div class="question">TagLine - concise business description?</div><div class="response <?php echo $header_tagline;?>"><?php echo $header_tagline;?></div><div class="details"><?php echo $header_tagline_details;?></div></div>

<div class="row"><div class="question">Phone Number?</div><div class="response <?php echo $header_phone;?>"><?php echo $header_phone;?></div><div class="details"><?php echo $header_phone_details;?></div></div>

<div class="row"><div class="question">Call-to-Action - What should visitors do?</div><div class="response <?php echo $header_cta;?>"><?php echo $header_cta;?></div><div class="details"><?php echo $header_cta_details;?></div></div>

<div class="row"><div class="question">Top Navivigation - discreet options for
critical pages?</div><div class="response <?php echo $header_top;?>"><?php echo $header_top;?></div><div class="details"><?php echo $header_top_details;?></div></div>

</div>
<div class="table"><div class="row"><div class="question top">Question</div><div class="response top">Response</div><div class="details top">Details</div></div>
<div class="row"><div class="question">TagLine - concise business description</div><div class="response no">No</div><div class="details"></div></div>
<div class="row"><div class="question">Call-to-Action - What should visitors do?</div><div class="response yes">Yes</div><div class="details">Donate button present, but not highlighted</div></div>
<div class="row"><div class="question">Call-to-Action - What should visitors do?</div><div class="response no">No</div><div class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ultrices vel ex non aliquet. Nunc nunc sapien, mattis non vestibulum in, volutpat et enim. Quisque pulvinar nulla id euismod viverra. Curabitur sed lacus lorem. Maecenas vitae diam eget enim rhoncus interdum. Sed sodales mollis ipsum eget posuere. Pellentesque eu ipsum malesuada, blandit elit sed, cursus nibh. Proin sed magna aliquam, congue tortor quis, blandit felis. </div></div>
</div>
</body></html>