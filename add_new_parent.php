
<h1>Add a new parent to the database</h1>


<form method = "POST" action = "processParent.php">

	<table>  
		<tr><td><b>Parent ID</B></td><td><input type = "integer" name = "parent_id"  id= "parent_id"></td></tr>
		<tr><td><b>Parent First Name</B></td><td><input type = "text" name = "parent_fname"  id= "parent_fname"></td></tr>
		<tr><td><b>Parent Surname</B></td><td><input type = "text" name = "parent_sname"  id= "parent_sname"></td></tr>
		<tr><td><b>Parent Password</B></td><td><input type = "text" name = "password"  id= "password"></td></tr>
		<tr><td><b>Parent Address 1</B></td><td><input type = "text" name = "address1"  id= "address1"></td></tr>
		<tr><td><b>Parent Address 2</B></td><td><input type = "text" name = "address2"  id= "address2"></td></tr>
		<tr><td><b>Parent Phone</B></td><td><input type = "integer" name = "phonenumber"  id= "phonenumber"></td></tr>

           <tr>
               <td>
                  <input type = "submit" name = "submit" value = "Create New Parent"> 
               </td>
            </tr>
	</table>

</form>