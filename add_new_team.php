<h1>Add a new Team to the database</h1>


<form method = "POST" action = "processTeam.php">

	<table>  

		

		<tr><td><b>Team ID</B></td><td><input type = "integer" name = "team_id"  id= "team_id"></td></tr>
		<tr><td><b>Team Name</B></td><td><input type = "text" name = "team_name"  id= "team_name"></td></tr>
		<tr><td><b>Skill Test</B></td><td><input type = "integer" name = "skill_test"  id= "skill_test"></td></tr>
		<tr><td><b>Fitness Test</B></td><td><input type = "integer" name = "fitness_test"  id= "fitness_test"></td></tr>
		

           <tr>
               <td>
                  <input type = "submit" name = "submit" value = "Create New Team"> 
               </td>
            </tr>
	</table>

</form>