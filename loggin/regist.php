<?php

	session_start();
	
	if (isset($_POST['email']))
	{
		//Udana walidacja? Załóżmy, że tak!
		$wszystko_OK=true;
		
		//Sprawdź poprawność nickname'a
		$nick = $_POST['nick'];
		
		//Sprawdzenie długości nicka
		if ((strlen($nick)<3) || (strlen($nick)>32))
		{
			$wszystko_OK=false;
			$_SESSION['e_nick']="Nick musi posiadać od 3 do 32 znaków!";
		}
		
		if (ctype_alnum($nick)==false)
		{
			$wszystko_OK=false;
			$_SESSION['e_nick']="Nick może składać się tylko z liter i cyfr (bez polskich znaków)";
		}
		
		// Sprawdź poprawność adresu email
		$email = $_POST['email'];
		$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
		
		if ((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
		{
			$wszystko_OK=false;
			$_SESSION['e_email']="Podaj poprawny adres e-mail!";
		}
		
		//Sprawdź poprawność hasła
		$haslo1 = $_POST['haslo1'];
		$haslo2 = $_POST['haslo2'];
		
		if ((strlen($haslo1)<8) || (strlen($haslo1)>32))
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo']="Hasło musi posiadać od 8 do 32 znaków!";
		}
		
		if ($haslo1!=$haslo2)
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo']="Podane hasła nie są identyczne!";
		}	

		$haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);
		
		//Czy zaakceptowano regulamin?
		if (!isset($_POST['regulamin']))
		{
			$wszystko_OK=false;
			$_SESSION['e_regulamin']="Potwierdź akceptację regulaminu!";
		}				
		

		
		//Zapamiętaj wprowadzone dane
		$_SESSION['fr_nick'] = $nick;
		$_SESSION['fr_email'] = $email;
		$_SESSION['fr_haslo1'] = $haslo1;
		$_SESSION['fr_haslo2'] = $haslo2;
		if (isset($_POST['regulamin'])) $_SESSION['fr_regulamin'] = true;
		
		require_once "connect.php";
		mysqli_report(MYSQLI_REPORT_STRICT);
		
		try 
		{
			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			else
			{
				//Czy email już istnieje?
				$rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE email='$email'");
				
				if (!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_takich_maili = $rezultat->num_rows;
				if($ile_takich_maili>0)
				{
					$wszystko_OK=false;
					$_SESSION['e_email']="Istnieje już konto przypisane do tego adresu e-mail!";
				}		

				//Czy nick jest już zarezerwowany?
				$rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE user='$nick'");
				
				if (!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_takich_nickow = $rezultat->num_rows;
				if($ile_takich_nickow>0)
				{
					$wszystko_OK=false;
					$_SESSION['e_nick']="Istnieje już gracz o takim nicku! Wybierz inny.";
				}
				
				if ($wszystko_OK==true)
				{
					//Hurra, wszystkie testy zaliczone, dodajemy gracza do bazy
					
					if ($polaczenie->query("INSERT INTO uzytkownicy VALUES (NULL, '$nick', '$haslo_hash', '$email', 100, 100, 100, 14)"))
					{
						$_SESSION['udanarejestracja']=true;
                  // dodanie komunikatu i aby wysyłąć maila dopiero doda do bazy 
						header('Location: login.php');
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
					
				}
				
				$polaczenie->close();
			}
			
		}
		catch(Exception $e)
		{
			echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
			echo '<br />Informacja developerska: '.$e;
		}
		
	}
	
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Mój Blog</title>
   <link rel="shortcut icon" type="x-icon" href="../logo.png">
   <link rel="stylesheet" href="../font/css/fontello.css">
   <link rel="stylesheet" href="../css/bootstrap.min.css">

   <style>
      body {
         font-family: Arial, sans-serif;
         margin: 0;
         padding: 0;
         min-height: 100vh; 
         display: flex;
         flex-direction: column;
      }

      header {
         background-color: #07475A;
         color: #fff;
         padding: 1em;
      }

      main {
         max-width: 800px;
         margin: 0 auto;
         padding: 20px;
         flex-grow: 1;
      }

      .blog-post {
         margin-bottom: 20px;
         border-bottom: 1px solid #ccc;
         padding-bottom: 20px;
         position: relative;
         height: 140px;
      }
      .blog-post_last{
         padding-bottom: 20px;
         margin-bottom: 20px;
         position: relative;
      }

      .left{
         float: left;
      }
      .left2{
         float: left;
         margin-top: 10px;
         float: right;
         margin-right: 50px;
      }
      .left2:hover{
         color: red;
      }
      h1{
         margin-left: 340px;
      }
      .data{
         position: absolute;
         bottom: 20px;
      }
      h2{
         padding-top: 0px;
         margin-top: 0px;
         font-size: 20px;
         font-weight: 300;
      }
      h2:hover{
         color: #cccccd;
      }
      img:hover {
      background: rgba(255, 255, 255); 
      opacity: 0.5; 
      transition: opacity 0s ease;
      }
      a {
         text-decoration: none;
         color: inherit;
      }
      footer {
         background-color: #07475A;
         color: #fff;
         text-align: center;
         padding: 1em;
      }
      a:hover {
         color: inherit; 
         text-decoration: none;
      }

      @media screen and (max-width: 1000px) {
         header {
            text-align: center;
         }
         .left {
            float: none;
            text-align: center;
         }
         h1 {
            margin-left: 0;
         }
         .left2 {
            float: none;
            margin-top: 10px;
            margin-right: 10;
         }
         main {
            padding: 10px;
         }
         .blog-post, .blog-post_last {
            height: auto;
         }
      }
   </style>
</head>
<body>

   <header>
      
      <div class="left"> <a href="../index.php"><h1>Patryk Sarna</h1></a></div>
      <div class="left2"><a href="https://www.instagram.com/patryksarna_/" target="_blank"><i class="demo-icon icon-instagram"></i></a></div>
      <div class="left2"><a href="https://twitter.com/patryksarna_" target="_blank"><i class="demo-icon icon-twitter-1"></i></a></div>
      <div class="left2"><a href="https://www.linkedin.com/in/patryksarna/" target="_blank"><i class="demo-icon icon-linkedin"></i></a></div>
      <div style="clear: both;"></div>

      
      
   </header>

   <main>

      <h2>Rejestracja</h2>
    	
	<form method="post">
	
   Nickname: <br /> <input type="text" value="<?php
      if (isset($_SESSION['fr_nick']))
      {
         echo $_SESSION['fr_nick'];
         unset($_SESSION['fr_nick']);
      }
   ?>" name="nick" /><br />
   
   <?php
      if (isset($_SESSION['e_nick']))
      {
         echo '<div class="error">'.$_SESSION['e_nick'].'</div>';
         unset($_SESSION['e_nick']);
      }
   ?>
   
   E-mail: <br /> <input type="text" value="<?php
      if (isset($_SESSION['fr_email']))
      {
         echo $_SESSION['fr_email'];
         unset($_SESSION['fr_email']);
      }
   ?>" name="email" /><br />
   
   <?php
      if (isset($_SESSION['e_email']))
      {
         echo '<div class="error">'.$_SESSION['e_email'].'</div>';
         unset($_SESSION['e_email']);
      }
   ?>
   
   Twoje hasło: <br /> <input type="password"  value="<?php
      if (isset($_SESSION['fr_haslo1']))
      {
         echo $_SESSION['fr_haslo1'];
         unset($_SESSION['fr_haslo1']);
      }
   ?>" name="haslo1" /><br />
   
   <?php
      if (isset($_SESSION['e_haslo']))
      {
         echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
         unset($_SESSION['e_haslo']);
      }
   ?>		
   
   Powtórz hasło: <br /> <input type="password" value="<?php
      if (isset($_SESSION['fr_haslo2']))
      {
         echo $_SESSION['fr_haslo2'];
         unset($_SESSION['fr_haslo2']);
      }
   ?>" name="haslo2" /><br />
   
   <label>
      <input type="checkbox" name="regulamin" <?php
      if (isset($_SESSION['fr_regulamin']))
      {
         echo "checked";
         unset($_SESSION['fr_regulamin']);
      }
         ?>/> Akceptuję regulamin
   </label>
   
   <?php
      if (isset($_SESSION['e_regulamin']))
      {
         echo '<div class="error">'.$_SESSION['e_regulamin'].'</div>';
         unset($_SESSION['e_regulamin']);
      }
   ?>	
   

   
   <br />
   
   <input type="submit" value="Zarejestruj się" />
   
</form>
   </main>
   <script>
      function getCurrentUrl() {
          return window.location.href;
      }
  

      function generateFacebookShareLink() {
          var currentUrl = getCurrentUrl();
  
 
          var facebookShareUrl = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(currentUrl);
          var linkedinShareUrl = 'https://www.linkedin.com/shareArticle?url=' + encodeURIComponent(currentUrl);
          var twitterShareUrl = 'https://twitter.com/intent/tweet?url=' + encodeURIComponent(currentUrl);

          document.getElementById('shareLinkfb').href = facebookShareUrl;
          document.getElementById('shareLinktw').href = twitterShareUrl;
          document.getElementById('shareLinkin').href = linkedinShareUrl;
      }

      window.onload = generateFacebookShareLink;
  </script>


   <footer>
    <i class="demo-icon icon-link"></i> Poleć ten blog <a id="shareLinktw" href="#" target="_blank"><i class="demo-icon icon-twitter-circled"></i></a> <a id="shareLinkfb" href="#" target="_blank"><i class="demo-icon icon-facebook-circled"></i></a> <a id="shareLinkin" href="#" target="_blank"><i class="demo-icon icon-linkedin-circled"></i></a> 
   </footer>
   <script>
      document.addEventListener("DOMContentLoaded", function () {
        function handleResize() {
          var screenWidth =
            window.innerWidth ||
            document.documentElement.clientWidth ||
            document.body.clientWidth;
    
          
          var maxWidthForRemoval = 1000;
    
          
          var dataElements = document.querySelectorAll('.data');
          var iconElements = document.querySelectorAll('.demo-icon');
    
          if (screenWidth <= maxWidthForRemoval) {
            
            dataElements.forEach(function (element) {
              element.style.display = 'none';
            });
    
            iconElements.forEach(function (element) {
              element.style.display = 'none';
            });
          } else {
            
            dataElements.forEach(function (element) {
              element.style.display = 'inline';
            });
    
            iconElements.forEach(function (element) {
              element.style.display = 'inline';
            });
          }
        }
    
        
        handleResize();
    
        
        window.addEventListener('resize', function () {
          handleResize();
        });
      });
    </script>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
