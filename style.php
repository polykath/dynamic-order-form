


/*
DYNAMIC ORDERING FORM
(Working Title)
GITHUB
Discription: A dynamic ordering form and order management system for complex custom orders.
Author: Kat Carvell & GITHUB Associates
*/
<?php
    header("Content-type: text/css; charset: UTF-8");
	
	$mainbordercolor = $row['MainBorderColor'];
	$mainbgcolor = $row['MainBgColor'];
	$headercolor = $row['HeaderColor'];
?>

/***GENERAL STYLE DEFAULTS***/
/***MAIN PAGE***/
div.main
{
	padding: 10px;
	float: center;
	border: 2px solid #<?php echo $mainbordercolor; ?>;
	background-color: #<?php echo $mainbgcolor; ?>;
	
}
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
