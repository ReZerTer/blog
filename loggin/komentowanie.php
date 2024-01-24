<?php
    session_start();
    
    require_once "connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
    if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
    else
	{
        $komentarz = $_POST['komentarz'];
        $user = $_SESSION['user'];
        $data = date('H:i  d.m.Y');
        $komentarz = htmlentities($komentarz, ENT_QUOTES, "UTF-8");
        
        if ($polaczenie->query("INSERT INTO komentarze VALUES (NULL, '$user', '$komentarz', '$data', 100, 100, 100, 14)"))
        {
            
            if(isset($_SESSION['redirect_url'])) 
            {  
                header('Location: ' . $_SESSION['redirect_url']);
                unset($_SESSION['redirect_url']); 
                exit();
            } 
            else 
            {
                header('Location: ../index.php');
                exit();
            }
        }
        else
        {
            throw new Exception($polaczenie->error);
        }

        $polaczenie->close();

    }
?>