


/* Login Form */
const loginForm = $("#loginForm");

loginForm.on("click", function (event) {
  const userName = $("#userName").val();
  const password = $("#pwd").val();

  $.ajax({
    type: "POST",
    url: "/api/user.php?act=login",
    data: {
      userName: userName,
      password: password,
    },
    dataType: "json",
    success: function (data) {
      if (data.status == "success") {
        // swal("Good job!", data.message, "success");
        Swal.fire({
          title: "Good job!",
          text: data.message,
          icon: "success"
        });
        setTimeout(function () {
          window.location.href = "index.php";
        }, 2000);
        
      } else if (data.status == "error") {
        // swal("Error!", data.message, "error");
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Something went wrong!",
          footer: '<a href="#">Why do I have this issue?</a>'
        });
      }
    },
    error: function (jqXHR, textStatus, errorThrown) {
      swal("Error!", textStatus, "error");
    },
  });
});


/* Sign up Form */
const signupForm = $("#signupForm");

signupForm.on("click", function (event) {
  const userName2 = $("#userName2").val();
  const password2 = $("#pwd2").val();
  const repassword3 = $("#pwd3").val();

  $.ajax({
    type: "POST",
    url: "/api/user.php?act=signup",
    data: {
      userName2: userName2,
      password2: password2,
      repassword3: repassword3,
    },
    dataType: "json",
    success: function (data) {
      if (data.status == "success") {
        // swal("Good job!", data.message, "success");
        Swal.fire({
          title: "Good job!",
          text: data.message,
          icon: "success"
        });
        setTimeout(function () {
          window.location.href = "index.php";
        }, 2000);
        
      } else if (data.status == "error") {
        // swal("Error!", data.message, "error");
        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: "Something went wrong!",
          footer: '<a href="#">Why do I have this issue?</a>'
        });
      }
    },
    error: function (jqXHR, textStatus, errorThrown) {
      swal("Error!", textStatus, "error");
    },
  });
});



