  <!DOCTYPE html>
  <html lang="en" >
  <head>
    <meta charset="UTF-8">
    <title>MTickets</title>
    <link rel="icon" href="/assets/images/logo/tab-icon.png">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="/assets/css/eorg/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
  </head>
  <body>
    <div class="form">
      <ul class="top-area">
        <li class="tab"><a id="show_signup" href="#signup">Sign Up</a></li>
        <li class="tab"><a id="show_login" href="#login">Log In</a></li>
      </ul> 
      <div class="tab-content">
        <div id="login">   
          <h1>Welcome Back!</h1>
          <form id='login_form'>
              <div class="label-field">
                <input id="email" type="email"required autocomplete="off" name="email" placeholder="example@gmail.com"/>
              </div>
              <div class="label-field">
                <input id="password" type="password" required autocomplete="off" name="password" placeholder="********"/>
              </div>
              <div class="msg" style="color:red; margin-bottom:20px">&nbsp;</div>
              <p class="forgot"><a href="#">Forgot Password?</a></p>
              <button  id="login_btn" class="button button-block">Log In</button>
          </form>
        </div>
        <div id="signup" style="display:none"> 
          <h1>Sign Up</h1>
          <form id='signup_form'> 
                <div class="top-row">
                  <div class="label-field">
                    <input id="fname" type="text" required autocomplete="off" name="fname" placeholder=" First Name"/>
                  </div>
                  <div class="label-field">
                    <input id="lname" type="text"required autocomplete="off" name="lname" placeholder=" Last Name"/>
                  </div>
                </div>
                <div class="label-field">
                  <input id="_email" type="email" required autocomplete="off" name="email" placeholder=" example@gmail.com"/><br />
                  <span class="email_err" style="color:rgb(188, 14, 14); margin-bottom:10px"></span>
                </div>
                <div class="label-field">
                  <input id="_pass" type="password" required autocomplete="off" name="pass" placeholder="password"/>
                </div>
                <div class="msg" style="color:red; margin-bottom:20px">&nbsp;</div>
                <button id="signup_btn" class="button button-block">Sign Up</button>
          </form>
        </div>
      </div>  
    </div>
    <script>
      var if_record_exist = false;
      function validateEmail(email) { 
        var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        return validRegex.test(email);
      }
      $(document).ready(function(){
        //toggle forms
        $('#show_login').click(function(){
          $('#login').show();
          $('#signup').hide();
          $('.msg').html('');
        });
        $('#show_signup').click(function(){
          $('#login').hide();
          $('#signup').show();
          $('.msg').html('');
        });
        //check if the email is already registered!!
        $('#_email').blur(function(){
          var email = $('#_email').val();
          if(!validateEmail(email)){
            $('.msg').text('Invalid email');
            return;
          }
          //checking email
          $.post('controllers/login/check_email.php', {'email':email}, function(resp){
            if(resp === 'taken'){
              $('.email_err').text('Email Address already taken');            
              if_record_exist = true;
            }else{
              $('.email_err').text('');            
              if_record_exist = false;
            }    
          });    
        });
        //Sign up process
        $('#signup_btn').click(function(){
          //get the values
          var email = $('#_email').val();
          var pass = $('#_password').val();
          var fname = $('#fname').val();
          var lname = $('#lname').val();
          //validate the form
          if(email == '' || pass == '' || fname == '' || lname == ''){
            $('.msg').text('Please fill the form');
          }
          else{
            if(if_record_exist == false){
              if(!validateEmail(email)){
                $('.msg').text('Invalid email');
                //return;
              }
              $('.msg').html("<img src='https://loading.io/asset/577840' border='0' />");            
              //jQuery ajax post method with 
              $.post('/controllers/login/e_signup.php', $( "#signup_form" ).serialize(), function(resp){
                if(resp == "done"){
                  $('#login').show();
                  $('#signup').hide();
                  $('.msg').html('Signed up successfully, Now use the above form to login!!');           
                }else{
                  $('.msg').html('Something is wrong!');             
                }
              }); 
            }else{
              $('.msg').html('Please fix the above error!');            
            }    
          }    
        });
        //Login process
        $("#login_btn").on('click',function(){
          var email=$("#email").val();
          var password=$("#password").val();
          if(email==""||password==""){
            alertify.set('notifier','position', 'top-right');
            alertify.error('Fill in all credentials.');     
          } else{
            $.ajax({
              method:'POST',
              data:{
                email:email,
                password:password
              },
              url:"/controllers/login/e_login.php",
              dataType:'json',
              success: function(data){
                if(data.success==='success'){
                  window.location.replace('/views/eorganiser/home.php');
                  alertify.set('notifier','position', 'top-right');
                  alertify.success('Login Successful.'); 
                  console.log("Success");
                } else {
                  alertify.set('notifier','position', 'top-right');
                  alertify.error('Login Failed. Incorrect email or password.'); 
                  console.log("Error");
                }  
              }
            });
          }
        });
      });
    </script>
  </body>
  </html>