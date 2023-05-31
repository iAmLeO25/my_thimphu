<!DOCTYPE html>
<html>
<head>
  <title>Event Registration Form</title>
  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 20px;
}

h1 {
  text-align: center;
}

#registration-form-container {
  margin-bottom: 20px;
}

form input {
  display: block;
  margin-bottom: 10px;
  width: 100%;
  padding: 10px;
}

.button-container {
  display: flex;
  justify-content: space-between;
  margin-top: 10px;
}

.button-container button {
  padding: 10px 20px;
}

#registration-list-container {
  border-top: 1px solid #ccc;
  padding-top: 20px;
}

#registration-list {
  list-style: none;
  padding: 0;
}

#registration-list li {
  margin-bottom: 10px;
  padding: 10px;
  border: 1px solid #ccc;
}

    </style>
  <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<body>

@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
  <h1>Event Registration Form</h1> 
            
            
  <div id="registration-form-container">
    <form id="registration-form" action="{{ route('products.store') }}" method="POST">
    @csrf
      <input type="text" id="title" placeholder="Title" required name="title">
      <input type="date" id="date" placeholder="Date" required name="date" >
      <input type="time" id="time" placeholder="Time" required name="time">
      <input type="text" id="location" placeholder="location" required name="location">
      <input type="number" id="price" placeholder="price" name="price">
      
      <div class="button-container">
        <button type="submit" id="submit-btn">Add Event</button>
        <!-- <button type="button" id="update-btn" disabled>Update Registration</button>
        <button type="button" id="delete-btn" disabled>Delete Registration</button> -->
      </div>
    </form>
  </div>

  <div id="registration-list-container">
    <h2>Event Registrations</h2>
    <ul id="registration-list"></ul>
  </div>

</body>
</html>
