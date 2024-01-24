<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Mój Blog</title>
   <link rel="stylesheet" href="../font/css/fontello.css">
   <link rel="stylesheet" href="../css/bootstrap.min.css">
   <style>
      body {
         font-family: Arial, sans-serif;
         margin: 0;
         padding: 0;
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
      background: rgba(255, 255, 255); /* Biały kolor z zadymieniem */
      opacity: 0.5; /* Parawan jest ukryty na początku */
      transition: opacity 0s ease;
      }
      a {
         text-decoration: none;
         color: inherit;
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
            margin-right: 0;
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
      <div class="left2"><i class="demo-icon icon-youtube-play"></i></div>
      <div class="left2"><i class="demo-icon icon-github"></i></div>
      <div class="left2"><i class="demo-icon icon-twitter"></i></div>
      <div class="left2"><i class="demo-icon icon-linkedin"></i></div>
      <div style="clear: both;"></div>



   </header>

   <main>
        siemano side 4
   </main>

   <script>
      document.addEventListener("DOMContentLoaded", function () {
        function handleResize() {
          var screenWidth =
            window.innerWidth ||
            document.documentElement.clientWidth ||
            document.body.clientWidth;
    
          // Adjust the maximum width as needed
          var maxWidthForRemoval = 1200;
    
          // Check if elements with class "data" and "demo-icon" exist
          var dataElements = document.querySelectorAll('.data');
          var iconElements = document.querySelectorAll('.demo-icon');
    
          if (screenWidth <= maxWidthForRemoval) {
            // Remove elements if screen width is less than or equal to maxWidthForRemoval
            dataElements.forEach(function (element) {
              element.style.display = 'none';
            });
    
            iconElements.forEach(function (element) {
              element.style.display = 'none';
            });
          } else {
            // Restore elements if screen width is greater than maxWidthForRemoval
            dataElements.forEach(function (element) {
              element.style.display = 'inline'; // or 'block' based on your layout
            });
    
            iconElements.forEach(function (element) {
              element.style.display = 'inline'; // or 'block' based on your layout
            });
          }
        }
    
        // Initial call to handleResize
        handleResize();
    
        // Add event listener for window resize
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
