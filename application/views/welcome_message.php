<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

<style type="text/css">

body {
 background-color: #fff;
 margin: 40px;
 font-family: Lucida Grande, Verdana, Sans-serif;
 font-size: 14px;
 color: #4F5155;
}

a {
 color: #003399;
 background-color: transparent;
 font-weight: normal;
}

h1 {
 color: #444;
 background-color: transparent;
 border-bottom: 1px solid #D0D0D0;
 font-size: 16px;
 font-weight: bold;
 margin: 24px 0 2px 0;
 padding: 5px 0 6px 0;
}

code {
 font-family: Monaco, Verdana, Sans-serif;
 font-size: 12px;
 background-color: #f9f9f9;
 border: 1px solid #D0D0D0;
 color: #002166;
 display: block;
 margin: 14px 0 14px 0;
 padding: 12px 10px 12px 10px;
}

</style>
</head>
<body>


<h1>Welcome Mexican postal codes API!</h1>

<p>This is a free service</p>

<ul>
	<li><a href="<?php echo site_url('api/data/postalcodes');?>">5000 POSTAL CODES</a> - defaulting to XML</li>
	<li><a href="<?php echo site_url('api/data/postalcode/code/21240');?>">Postal Code  like 21240</a> - defaulting to XML</li>
	<li><a href="<?php echo site_url('api/data/postalcode/code/2124/format/json');?>">Postal Code like 21240</a> - get it in JSON</li>
	<li><a id="ajax" href="<?php echo site_url('api/data/postalcodes/format/json');?>">5000 Postal Codes</a> - get it in JSON (AJAX request)</li>


	<li><a href="<?php echo site_url('api/data/nbhd_state/nbhd/vistha/statecode/02/format/json');?>">Postal code by neightboorhood and State code </a> - get it in JSON</li>

</ul>


<p><br />Page rendered in {elapsed_time} seconds</p>

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
	// Bind a click event to the 'ajax' object id
	$("#ajax").bind("click", function( evt ){
		// Javascript needs totake over. So stop the browser from redirecting the page
		evt.preventDefault();
		// AJAX request to get the data
		$.ajax({
			// URL from the link that was clicked on
			url: $(this).attr("href"),
			// Success function. the 'data' parameter is an array of objects that can be looped over
			success: function(data, textStatus, jqXHR){
				alert('Successful AJAX request!');
			}, 
			// Failed to load request. This could be caused by any number of problems like server issues, bad links, etc. 
			error: function(jqXHR, textStatus, errorThrown){
				alert('Oh no! A problem with the AJAX request!');
			}
		});
	});
});
</script>

</body>
</html>