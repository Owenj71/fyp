<?php
include "config.php";
include "Query_Injection.php";
include "QueryLibrary.php";

$manager_id = -1;
$manager_fname = "Default Firstame";
$manager_sname = "Default Surname";
$phonenumber = -1;
$password = "Default Password";


if (isset($_POST['manager_id']))
{
$manager_id = $_POST['manager_id'];
}

if (isset($_POST['manager_fname']))
{
$manager_fname = $_POST['manager_fname'];
}

if (isset($_POST['manager_sname']))
{
$manager_sname = $_POST['manager_sname'];
}

if (isset($_POST['phonenumber']))
{
$phonenumber = $_POST['phonenumber'];
}

if (isset($_POST['password']))
{
$password = $_POST['password'];
}
// we can do additional error checking here on the variables. 

// let's assume at this point - without checking that we have VALID input for the creation of the new parent. 

// now we call the relevant function to insert this into the database

manager_Add_From_HTML_Form($conn,$manager_id ,$manager_fname,$manager_sname,$phonenumber,$password);

// we assume that there is no errors and the insert has worked. 

header("Location: test_inject_manager.php");
die();

?>