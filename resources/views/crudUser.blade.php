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
  <h1>Event Registration Form</h1> 
            
            
  <div id="registration-form-container">
    <form id="registration-form">
      <input type="text" id="title" placeholder="Title" required>
      <input type="date" id="date" placeholder="Date" required>
      <input type="time" id="time" placeholder="Time" required>
      <input type="text" id="location" placeholder="location" required>
      <input type="number" id="price" placeholder="price" >
      
      <div class="button-container">
        <button type="submit" id="submit-btn">Add Event</button>
        <button type="button" id="update-btn" disabled>Update Registration</button>
        <button type="button" id="delete-btn" disabled>Delete Registration</button>
      </div>
    </form>
  </div>

  <div id="registration-list-container">
    <h2>Event Registrations</h2>
    <ul id="registration-list"></ul>
  </div>

  <script >
    // Define global variables
var currentEditIndex = -1;
var registrations = [];

// Function to add a new registration
function addRegistration(title, date, time, location) {
  var registration = {
    title: title,
    date: date,
    time: time,
    location: location,
    price: price
  };
  registrations.push(registration);
}

// Function to update an existing registration
function updateRegistration(index, title, date, time, location, price) {
  registrations[index].title = title;
  registrations[index].date = date;
  registrations[index].time = time;
  registrations[index].location = location;
  registrations[index].price = price;
}

// Function to delete a registration
function deleteRegistration(index) {
  registrations.splice(index, 1);
}
// Function to render the registration list
// Function to render the registration list
function renderRegistrationList() {
  var registrationList = document.getElementById('registration-list');
  registrationList.innerHTML = '';

  registrations.forEach(function(registration, index) {
    var listItem = document.createElement('li');
    listItem.innerHTML =
      '<strong>Title:</strong> ' + registration.title +
      ' | <strong>Date:</strong> ' + registration.date +
      ' | <strong>Time:</strong> ' + registration.time +
      ' | <strong>Location:</strong> ' + registration.location +
      ' | <strong>Price:</strong> ' + registration.price +
      ' | <button onclick="editRegistration(' + index + ')">Edit</button>' +
      ' | <button onclick="deleteRegistration(' + index + ')">Delete</button>';

    registrationList.appendChild(listItem);
  });
}

  </script>
</body>
</html>
