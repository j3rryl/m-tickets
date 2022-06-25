$(document).ready(function () {
  $("#login-btn").on("click", function () {
    var email = $("#email").val();
    var password = $("#password").val();
    if (email == "" || password == "") {
      alertify.set("notifier", "position", "top-right");
      alertify.error("Fill in all credentials.");
    } else {
      $.ajax({
        method: "POST",
        data: {
          email: email,
          password: password,
        },
        url: "/controllers/login/login.php",
        dataType: "json",
        success: function (data) {
          if (data.success === "success") {
            window.location.replace("/index.php");
            alertify.set("notifier", "position", "top-right");
            alertify.success("Login Successful.");
            console.log("Success");
          } else {
            alertify.set("notifier", "position", "top-right");
            alertify.error("Login Failed. Incorrect email or password.");
            console.log("Error");
          }
        },
      });
    }
  });
  $("#register-btn").on("click", function () {
    var username = $("#username").val();
    var email = $("#email").val();
    var password = $("#password").val();
    console.log(username + email + password);
    if (username == "" || email == "" || password == "") {
      alertify.set("notifier", "position", "top-right");
      alertify.error("Fill in all credentials.");
    } else {
      $.ajax({
        method: "POST",
        url: "/controllers/login/signup.php",
        data: {
          username: username,
          email: email,
          password: password,
        },
        dataType: "json",
        success: function (data) {
          if (data.success === "success") {
            // window.open('/index.php');
            alertify.set("notifier", "position", "top-right");
            alertify.success(
              "Registration Successful. Sign In to Access Your Account."
            );
            console.log("Success");
          } else {
            alertify.set("notifier", "position", "top-right");
            alertify.error(
              "Registration Failed. Email has already been registered for this service."
            );
          }
        },
      });
    }
  });
});
