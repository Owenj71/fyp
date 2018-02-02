<h1>Add a new manager to the database</h1>


<form method = "POST" action = "processManager.php">

	<table>  
		<tr><td><b>Manager ID</B></td><td><input type = "integer" name = "manager_id"  id= "manager_id"></td></tr>
		<tr><td><b>Manager First Name</B></td><td><input type = "text" name = "manager_fname"  id= "manager_fname"></td></tr>
		<tr><td><b>Manager Surname</B></td><td><input type = "text" name = "manager_sname"  id= "manager_sname"></td></tr>
		<tr><td><b>Manager Phonenumber</B></td><td><input type = "integer" name = "phonenumber"  id= "phonenumber"></td></tr>
		<tr><td><b>Manager Password</B></td><td><input type = "text" name = "password"  id= "password"></td></tr>

           <tr>
               <td>
                  <input type = "submit" name = "submit" value = "Create New Manager"> 
               </td>
            </tr>
	</table>

</form>