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
h2 {
	text-align:center;
}
</style>
</head></body><h2>Page Header</h2>
<div class="table"><div class="row"><div class="question top">Question</div><div class="response top">Response</div><div class="details top">Details</div></div>
<div class="row"><div class="question">An easily readable and memorable domain name?</div><div class="response no">No</div><div class="details"></div></div>
<div class="row"><div class="question">Logo?</div><div class="response yes">Yes</div><div class="details"></div></div>
<div class="row"><div class="question">TagLine - concise business description?</div><div class="response no">No</div><div class="details"></div></div>
<div class="row"><div class="question">Phone Number?</div><div class="response no">No</div><div class="details"></div></div>
<div class="row"><div class="question">Call-to-Action - What should visitors do?</div><div class="response no">No</div><div class="details"></div></div>
<div class="row"><div class="question">Top Navivigation - discreet options for
critical pages?</div><div class="response no">No</div><div class="details"></div></div></div>
<div class="table"><div class="row"><div class="question top">Question</div><div class="response top">Response</div><div class="details top">Details</div></div>
<div class="row"><div class="question">TagLine - concise business description</div><div class="response no">No</div><div class="details"></div></div>
<div class="row"><div class="question">Call-to-Action - What should visitors do?</div><div class="response yes">Yes</div><div class="details">Donate button present, but not highlighted</div></div>
<div class="row"><div class="question">Call-to-Action - What should visitors do?</div><div class="response no">No</div><div class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ultrices vel ex non aliquet. Nunc nunc sapien, mattis non vestibulum in, volutpat et enim. Quisque pulvinar nulla id euismod viverra. Curabitur sed lacus lorem. Maecenas vitae diam eget enim rhoncus interdum. Sed sodales mollis ipsum eget posuere. Pellentesque eu ipsum malesuada, blandit elit sed, cursus nibh. Proin sed magna aliquam, congue tortor quis, blandit felis. </div></div>
</div>
</body></html>