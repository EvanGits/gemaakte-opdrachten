<!DOCTYPE html>
<html lang="NL">
	<head>
		
<title>Dambord</title>
<link rel="stylesheet"
		href="css/stylesheet.css"/>
		</head>
	<body>

   <table width="400px" cellspacing="0px" cellpadding="0px" border="1px">
   <!-- cell 270px wide (8 columns x 60px) -->

	</body>
</html>

<?php
for($row=1;$row<=10;$row++)
 {
          echo "<tr>";
          for($col=1;$col<=10;$col++)
		  {
          $total=$row+$col;
          if($total%2==0)
		  {
          echo "<td height=40px width=30px bgcolor=#FFFFFF></td>";
          }
		  else
		  {
          echo "<td height=40px width=30px bgcolor=#000000></td>";
          }
          }
          echo "</tr>";
    }

?> 