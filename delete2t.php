﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿<?php
session_start();
?>﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿
<head>
<script type="text/javascript">
function showmenu(elmnt)
{
document.getElementById(elmnt).style.visibility="visible"
}
function hidemenu(elmnt)
{
document.getElementById(elmnt).style.visibility="hidden"
}
</script>



</head>
<?php
		include("student.php");
	extract($_POST);
$rna=$_SESSION[rna];
if(isset($_POST['Submit']))
 {			
		$Query="DELETE from student where register_number = '$rna' ";
$dbresult=mysql_query($Query);

			if($dbresult)
{
echo "<script type='text/javascript'>alert(\"Record Successfully Deleted $rna \")</script>";
//header("location:editteacher.php");
include("editteacher.php");
}
else
{
echo "<script type='text/javascript'>alert(\"Try Again! Your Record Not Deleted\")</script>";
//header("location:updateteacher.php");
include("delete1t.php");
}
 }

?>﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿﻿

