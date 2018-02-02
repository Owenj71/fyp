<?php

include "config.php";



//function nam

function parent_Add_From_HTML_Form($conn,$ParentID,$Parent_Fname,$Parent_Sname,$Password,$Address1,$Address2,$Phonenumber)
{


$parent_id = $ParentID;
$parent_fname = $Parent_Fname;
$parent_sname = $Parent_Sname;
$password = $Password;
$address1 = $Address1;
$address2 = $Address2;
$phonenumber = $Phonenumber;


//created a template
$query = "INSERT INTO parent VALUES($1, $2, $3, $4, $5, $6, $7)"; 
//prepare a statement
pg_prepare($conn, "prepare1", $query) 
    or die ("Cannot prepare statement\n"); 

//ececute the statemant
pg_execute($conn, "prepare1", array($parent_id,$parent_fname,$parent_sname,$password,$address1,$address2,$phonenumber))
    or die ("Cannot execute statement\n"); 
//success
echo "Row successfully inserted\n";

// close function.

}

function manager_Add_From_HTML_Form($conn,$Manager_ID,$Manager_Fname,$Manager_Sname,$Phonenumber,$Password)
{


$manager_id = $Manager_ID;
$manager_fname = $Manager_Fname;
$manager_sname = $Manager_Sname;
$phonenumber = $Phonenumber;
$password = $Password;


//created a template
$query = "INSERT INTO manager VALUES($1, $2, $3, $4, $5)"; 
//prepare a statement
pg_prepare($conn, "prepare1", $query) 
    or die ("Cannot prepare statement\n"); 

//ececute the statemant
pg_execute($conn, "prepare1", array($manager_id, $manager_fname, $manager_sname,$phonenumber,$password))
    or die ("Cannot execute statement\n"); 
//success
echo "Row successfully inserted\n";

// close function.

}

function child_Add_From_HTML_Form($conn,$Child_ID,$Child_Fname,$Child_Sname,$Skill_Test,$Fitness_Test,$Medical_Issue,$Medical_Match,$Hospital_Preference,$Team_Name,$Membership,$Date_Of_Birth)
{


$child_id = $Child_ID;
$child_fname = $Child_Fname;
$child_sname = $Child_Sname;
$skill_test = $Skill_Test;
$fitness_test = $Fitness_Test;
$medical_issue = $Medical_Issue;
$medical_match = $Medical_Match;
$hospital_preference = $Hospital_Preference;
$team_name = $Team_Name;
$membership = $Membership;
$date_of_birth = $Date_Of_Birth;

//created a template
$query = "INSERT INTO Child VALUES($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11)"; 
//prepare a statement 
pg_prepare($conn, "prepare1", $query) 
    or die ("Cannot prepare statement\n"); 

//ececute the statemant
pg_execute($conn, "prepare1", array($child_id, $child_fname, $child_sname, $skill_test, $fitness_test, $medical_issue, $medical_match, $hospital_preference, $team_name, $membership, $date_of_birth))
	
    or die ("Cannot execute statement\n"); 
//success
echo "Row successfully inserted\n";

// close function.

}

function Team_Add_From_HTML_Form($conn,$Team_ID,$Team_Name,$Skill_Test,$Fitness_Test)
{


$team_id = $Team_ID;
$team_name = $Team_Name;
$skill_test = $Skill_Test;
$fitness_test = $Fitness_Test;



//created a template
$query = "INSERT INTO Team VALUES($1, $2, $3, $4)"; 
//prepare a statement
pg_prepare($conn, "prepare1", $query) 
    or die ("Cannot prepare statement\n"); 

//ececute the statemant
pg_execute($conn, "prepare1", array($team_id, $team_name, $skill_test,$fitness_test))
    or die ("Cannot execute statement\n"); 
//success
echo "Row successfully inserted\n";

// close function.

}

/*
This is a prepared statement that adds a row to the parent table with data inserted
*/
function parent_Add($conn,$ParentID)
{


$parent_id = $ParentID;
$parent_fname = "Jenny";
$parent_sname = "Kelly";
$password = "cool";
$address1 = "23 The Close";
$address2 = "Liffey Hall";
$phonenumber = rand(100000,10000000);


//created a template
$query = "INSERT INTO parent VALUES($1, $2, $3, $4, $5, $6, $7)"; 
//prepare a statement
pg_prepare($conn, "prepare1", $query) 
    or die ("Cannot prepare statement\n"); 

//ececute the statemant
pg_execute($conn, "prepare1", array($parent_id, $parent_fname, $parent_sname,$password,$address1,$address2,$phonenumber))
    or die ("Cannot execute statement\n"); 
//success
echo "Row successfully inserted\n";

// close function.

}

?>

