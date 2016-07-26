


/*
DYNAMIC ORDERING FORM
(Working Title)
GITHUB
Discription: A dynamic ordering form and order management system for complex custom orders.
Author: Kat Carvell & GITHUB Associates
*/
<?php
    header("Content-type: text/css; charset: UTF-8");
	
	
	$headercolor = $row['headercolor'];
?>

/***GENERAL STYLE DEFAULTS***/
/***HEADER***/
div.header
{
	padding: 50px;
}
h1.header
{
	z-index: 1;
	text-align: center;
	font-size: 30px;
	font-weight: bold;
	color: #<?php echo $headercolor; ?>;
}
img.header
{
	z-index: -1;
}