<?php
   
    if(!isset($_SESSION))
    {
        session_start();
        
        if($_SESSION['user'] == null)
        {
            header("location: ../../index.php");
        }
    }
    
?>
<?php

	require_once("../../data/admin/data_delete_emp.php");

	$id = $_REQUEST['id'];

	$result = delete_emp($id);

	if($result)
	{
		header("location: ../../view/admin/browse_user.php");
	}

	else
	{
		echo "Error Occured !!!!";	
	}
?>