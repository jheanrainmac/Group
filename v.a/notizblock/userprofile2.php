<!--?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
	die('Could not connect: ' . mysql_error());
  }

mysql_select_db("notizblock", $con);

$result = mysql_query("SELECT * FROM basicUser WHERE fname=''");
$row = mysql_fetch_array($result);

mysql_close($con);
?-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
      <script language = "Javascript">
		
		function editform(form){
			var edit_btn = document.getElementById('editbtn');
			var save_btn = document.getElementById('savebtn');
			var cancel_btn = document.getElementById('cancelbtn');
		
			form.name.disabled=false;
			form.dept.disabled=false;
			form.contact.disabled=false;
			form.personinfo.disabled=false;
			edit_btn.style.visibility = 'hidden'; 
			save_btn.style.visibility = 'visible'; 
			cancel_btn.style.visibility = 'visible'; 
		}
		
		function save(form){
		
		
		
		}
		
	  </script>
    </head>
    <?php  include 'htmlhead.php';
   			include 'header.php'; 
    ?>
	
	<body>
	<form name="user" action="user1.php" method="post">
<table border="0">

	<tr>
		<td>Name:</td>
		<td><input type="text" disabled name="name" maxlength="50" size="13" value=<?= $fname=$row['fname']; ?>&nbsp;<?= $fname=$row['lname']; ?>></td>
	</tr>
		<td>Username:</td>
		<td><input type="text" disabled name="uname" maxlength="50" size="13" value= <?= $fname=$row['username']; ?>></td>
	</tr>
	<tr>
		<td>Department:</td>
		<td><input type="text" disabled name="dept" maxlength="50" size="13" value= <?= $fname=$row['dept']; ?>></td>
	</tr>
	<tr>
		<td>Email Address:</td>
		<td><input type="text" disabled name="email" maxlength="50" size="13" value= <?= $fname=$row['email']; ?>></td>
	</tr>        
	<tr>
		<td>Contact Number:</td>
		<td><input type="text" disabled name="contact" maxlength="50" size="13" value= <?= $fname=$row['phone']; ?>></td>
	</tr>
	<tr>
		<td>Personal Info</td>
		<td><textarea name="personinfo" rows="4" cols="20" disabled>
		<?= $fname=$row['personalinfo']; ?>
		</textarea></td>
	</tr>
	<tr>
	<td></td>
	<td><INPUT TYPE="button" id="editbtn" NAME="edit" Value="Edit Contact Information" onClick="editform(this.form)"></td>
	<td><INPUT TYPE="submit" id="savebtn" NAME="save" Value="Save Changes" onClick="save(this.form)" style="visibility:hidden"></td>
	<td><INPUT TYPE="button" id="cancelbtn" NAME="cancel" Value="Cancel Changes" onClick="history.go(0)" style="visibility:hidden"></td>
	</tr>
	
</table>
	</form>
	
	
	<p>
		<a href="addbook.php">Add Book</a>
	</p>
	
	<p>
		<a href="addhouse.php">Add House</a>
	</p>

	
	</body>
</html>
