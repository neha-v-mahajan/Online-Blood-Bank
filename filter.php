<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<h1>Ajax Filter Table</h1>
<div id="ab"> Fetch Results By:</div>
<select id="fetchval" name="fetchby">
<option>-------Select Bloodgroup-------</option>
						<?php
						include("config.php");
						$q="select * from bloodgroup";
						$r=mysqli_query($con,$q);
						while($row=mysqli_fetch_array($r))
						{
							?>
                            <option value="<?php echo $row['bloodgroupname']; ?>"><?php echo $row['bloodgroupname'] ?></option>
                            <?php
						}
						?>

</select>
<br /><br />
<div id="table-container">
</div>
<script src="jquery.js"></script>
<script>
$(document).ready(function()
{
$("#fetchval").on('change',function()

{
var value=$(this).val();
$.ajax(
{
url:'fetchdata.php',
type:'POST',
data:'request='+value,
beforeSend:function()
{
	$("#table-container").html('Working On...');
},
success:function(data)
{
	$("#table-container").html(data);
},

});
});
});
</script>
</body>
</html>
