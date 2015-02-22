<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Mexican Postal Codes API</title>

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


<h1>Welcome to a Public Mexican postal codes API!</h1>

<p>This is a free service</p>

<ul>
	<li><a href="<?php echo site_url('api/data/postalcode/code/21240');?>">Postal Code  like 21240 search option both/after/before</a> - defaulting to XML</li>
	<li><a href="<?php echo site_url('api/data/postalcode/code/2124/format/json');?>">Postal Code like 21240 search option both/after/before</a> - get it in JSON</li>
	<li><a href="<?php echo site_url('api/data/nbhd_state/nbhd/vista/search/both/statecode/02/format/json');?>">Postal Code by neightboorhood and State code. search option both/after/before </a> - get it in JSON</li>
	<li><a href="<?php echo site_url('api/data/nbhd_state/nbhd/vista/search/both/statecode/02/format/xml');?>">Postal Code by neightboorhood and State code. search option both/after/before </a> - get it in XML</li>
	<li><a href="<?php echo site_url('api/data/postalcodes_statecode/statecode/02/format/json');?>">Postal Code by State code.</a> - get it in JSON</li>
	<li><a href="<?php echo site_url('api/data/postalcodes_statecode/statecode/02/format/xml');?>">Postal Code by State code.</a> - get it in XML</li>
	<li><a href="<?php echo site_url('api/data/states_codes/format/xml');?>">States Code/State Names of Mexico.</a> - get it in XML</li>
	<li><a href="<?php echo site_url('api/data/states_codes/format/json');?>">States Code/State Names of Mexico.</a> - get it in JSON</li>

</ul>


<p><br />Brought to you by <strong>Daniel Gomez</strong> -
<a href="mailto:daniel.gm78@gmail.com">Email Me</a></p>


<p><br />Page rendered in {elapsed_time} seconds</p>

<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
</body>
</html>