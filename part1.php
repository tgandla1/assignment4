<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">


<head>

<title>part1</title>

  
<style type="text/css">

div {
<?php

if( isset($_POST['color']) )

{
   
$fcolor = $_POST['color'];


if ($fcolor == "green")

   		print "color: green;\n";
		
if ($fcolor == "yellow")
   		
     print "color: yellow;\n";
 if ($fcolor == "red")

   		print "color: Red;\n";
	 


		 
}

if( isset($_POST['size']) )
{
$fsize = $_POST['size'];


if($fsize =="20pt")
print "font-size:20pt;\n";

if($fsize =="30pt")
print "font-size:30pt;\n";
if($fsize =="40pt")
print "font-size:40pt;\n";
}
if( isset($_POST['fontstyle']) ) 
{
   $fstyle = $_POST['fontstyle'];
   
   if ($fstyle == "i")
   		print "font-style: italic;\n";
	
   if ($font_style == "b")
   		print "font-style: Bold;\n";
	
	
}




if( isset($_POST['font']) )

{
   
$font = $_POST['font'];

  print "font: $font;\n";

}

?>
}
</style>


</head>

<body>



<?php
 
   print "<div>";

    print htmlspecialchars($_POST['text']);
 
   print "\n</div>\n";

?>

      



</body>

</html>
