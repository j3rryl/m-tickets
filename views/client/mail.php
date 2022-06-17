<!--  -->
//ntphaxqhdixkfupq Gmail
//axcnvqysyvfclzok Xampp
<!DOCTYPE html>
<html>
   <head>
      <title>Gmail Sender</title>
      <link rel="stylesheet" href="style.css">
   </head>
   <body>
      <div class="wrapper">
         <form method="post" action="mail.php">
            <h2>Gmail Sender App</h2><br>
            Email To :<br>
            <input type="text" name="email"><br>
            Subject :<br>
            <input type="text" name="subject"><br>
            Body :<br>
            <textarea name="body"></textarea><br>
            <input type="submit" value="SEND" name="submit">            
         </form>
         <?php
         if(isset($_POST['submit'])){
            $url = "https://script.google.com/macros/s/AKfycbzVFbaYXHDg1Wxcdd85biXZT5xAkFKVA-RW23z2NJB0Y4-flQ6TmJSZFt0tH2pbhClQUg/exec";
            $ch = curl_init($url);
            curl_setopt_array($ch, [
               CURLOPT_RETURNTRANSFER => true,
               CURLOPT_FOLLOWLOCATION => true,
               CURLOPT_POSTFIELDS => http_build_query([
                  "recipient" => $_POST['email'],
                  "subject"   => $_POST['subject'],
                  "body"      => $_POST['body']
               ])
            ]);
            $result = curl_exec($ch);
            echo $result;
         }
         ?>
      </div>
      
   </body>
</html>