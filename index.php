<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Mój Blog</title>
   <link rel="shortcut icon" type="x-icon" href="logo.png">
   <link rel="stylesheet" href="font/css/fontello.css">
   <link rel="stylesheet" href="css/bootstrap.min.css">
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
      #archiwum {
         float: right;
      }
      #archiwum:hover {
         color: #cccccd;
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
      
      <div class="left"> <a href="index.php"><h1>Patryk Sarna</h1></a></div>
      <div class="left2"><a href="https://www.instagram.com/patryksarna_/" target="_blank"><i class="demo-icon icon-instagram"></i></a></div>
      <div class="left2"><a href="https://twitter.com/patryksarna_" target="_blank"><i class="demo-icon icon-twitter-1"></i></a></div>
      <div class="left2"><a href="https://www.linkedin.com/in/patryksarna/" target="_blank"><i class="demo-icon icon-linkedin"></i></a></div>
      <div style="clear: both;"></div>

      
      
   </header>

   <main>
      <a href="side/side1.php">
         <div class="blog-post">
            <div class="left"><img src="image/png1.png" alt="Obrazek 1"></div>
               <div class="left" style="margin-left: 30px;"><h2>Świetny rok w wykonaniu Bitcoina! <br> Czy hossa dopiero się zaczyna?</h2>
               <span class="data">21.11.2002</span> 
            </div>
            <div style="clear: both;"></div>
         </div>
      </a>
   
      <a href="side/side2.php">
         <div class="blog-post">
            <div class="left"><img src="image/png2.png" alt="Obrazek 2"></div>
            <div class="left" style="margin-left: 30px;"><h2>Jakie korzyści daje inwestowanie globalne? <br>Trader21 na XTB Masterclass</h2>
               <span class="data">21.11.2002</span> 
            </div>
            <div style="clear: both;"></div>
         </div>
      </a>
   
      <a href="side/side3.php">
         <div class="blog-post">
            <div class="left"><img src="image/png3.png" alt="Obrazek 3"></div>
            <div class="left" style="margin-left: 30px;"><h2>Jak rosną i upadają mocarstwa? Część 2</h2>
               <span class="data">21.11.2002</span> 
            </div>
            <div style="clear: both;"></div>
         </div>
      </a>
   
      <a href="side/side4.php">
         <div class="blog-post">
            <div class="left"><img src="image/png4.png" alt="Obrazek 4"></div>
            <div class="left" style="margin-left: 30px;"><h2>Rynek to nie hazard. Tu się na ogół zarabia</h2>
               <span class="data">21.11.2002</span> 
            </div>
            <div style="clear: both;"></div>
         </div>
      </a>
   
      <a href="side/side5.php">
         <div class="blog-post">
            <div class="left"><img src="image/png5.png" alt="Obrazek 5"></div>
            <div class="left" style="margin-left: 30px;"><h2>Najważniejsze wykresy minionych tygodni <br> - Grudzień 2023</h2>
               <span class="data">22.11.2002</span> 
            </div>
            <div style="clear: both;"></div>
         </div>
      </a>
   
      <a href="side/side6.php">  
         <div class="blog-post_last">
            <div class="left"><img src="image/png6.png" alt="Obrazek 6"></div>
            <div class="left" style="margin-left: 30px;"><h2>Jak wygrać WYŚCIG z INFLACJĄ? <br>- Tomasz Marecki</h2>
               <span class="data">23.11.2002</span> 
            </div>
            <div style="clear: both;"></div>
         </div>
      </a>
   
   <br>
   <a href="archiwum.php" id='archiwum'>Więcej wpisów ></a>

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
<script src="js/bootstrap.min.js"></script>
</body>
</html>
