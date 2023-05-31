<!DOCTYPE html>
<html>
<head>
  <title>Event Ticketing and Registration</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    /* Custom CSS */
    .img-responsive {
      max-width: 100%;
      height: auto;
    }

    .center-block {
      display: block;
      margin-left: auto;
      margin-right: auto;
    }

    /* Animation */
    @keyframes zoomIn {
      0% {
        transform: scale(0);
      }
      100% {
        transform: scale(1);
      }
    }

    .zoomIn {
      animation-name: zoomIn;
      animation-duration: 1s;
      visibility: visible !important;
    }
  </style>
</head>
<body><div class="container">
  <h1 class="iq-font-white iq-tw-4">Login <b> User Interface</b></h1>
  <h1>Event Ticketing and Registration</h1>
  <form id="registration-form">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
    </div>
    <div class="form-group">
      <label for="contact">Contact Number:</label>
      <input type="tel" class="form-control" id="contact" placeholder="Enter your contact number" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
    </div>
    <div class="pull-right">

<a class="btn btn-success" href="{{ route('products.index') }}"> Create New Product</a>
</div>
  </form>
</div>
<script>
  document.getElementById("registration-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission

    // Retrieve input values
    var name = document.getElementById("name").value;
    var contact = document.getElementById("contact").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    // Simple validation
    if (name.trim() === "" || contact.trim() === "" || email.trim() === "" || password.trim() === "") {
      alert("Please fill in all fields.");
      return;
    }

    // Check if the password is correct
    if (password !== "123") {
      alert("Invalid password. Please try again.");
      return;
    }

    // Redirect to the "add event" page
    window.location.href = "products.index";
  });
</script>



  <img class="img-responsive center-block iq-mb-10 wow zoomIn" id="logo_img" data-wow-duration="1s" src="images/logo-footer.png" alt="Logo">

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
