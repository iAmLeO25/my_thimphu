 <!DOCTYPE html>
<html>
<head>
  <title>Event Calendar</title>
  <style>
    /* Body styles */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #64c9ff;
      color: #fff;
    }
    
    .btn {
      display: inline-block;
      padding: 10px 20px;
      text-decoration: none;
      color: #fff;
      background-color: #007bff;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }
    
    .btn:hover {
      background-color: #0056b3;
    }
    
    /* Table styles */
    table {
      border-collapse: collapse;
      width: 100%;
      margin-top: 20px;
      color: #333;
      background-color: #f2f2f2;
    }
    
    th, td {
      text-align: left;
      padding: 8px;
      border-bottom: 1px solid #ddd;
    }
    
    th {
      background-color: #f2f2f2;
    }
    
    /* Animation styles */
    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }
    
    tr {
      animation: fadeIn 0.5s ease-in-out;
    }
    
    /* Event description styles */
    .event-description {
      display: none;
      position: absolute;
      background-color: rgba(0, 0, 0, 0.7);
      color: #fff;
      padding: 5px 10px;
      border-radius: 4px;
      z-index: 1;
    }
    
    tr:hover .event-title {
      position: relative;
      cursor: pointer;
    }
    
    tr:hover .event-description {
      display: block;
    }
    
    /* Footer styles */
    footer {
      background-color: #64c9ff;
      padding: 10px;
      text-align: center;
    }
    
    footer p {
      margin: 0;
      color: #fff;
    }
    
    footer a {
      color: #fff;
      text-decoration: none;
    }
    
    footer a:hover {
      text-decoration: underline;
    }
     
   

  /* box-sizing {: border-box;
} */


body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 50px;
  text-align: center;
}

.calendar {
  max-width: 400px;
  margin: 0 auto;
  background-color: #64c9ff; /* Blue theme */
  color: #fff; /* Font color */
  padding: 20px;
  border-radius: 8px;
}

.calendar-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 10px;
}

.calendar-weekdays {
  display: flex;
  justify-content: space-between;
  margin-bottom: 10px;
}

.calendar-weekdays div {
  flex: 1;
  padding: 5px;
  font-weight: bold;
}

.calendar-days {
  display: flex;
  flex-wrap: wrap;
}

.calendar-days .day {
  flex-basis: 14.28%;
  padding: 15px;
  text-align: center;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.calendar-days .day:hover {
  background-color: #fff;
  color: #007bff;
}

.calendar-days .today {
  background-color: #fff;
  color: #007bff;
}

.calendar-days .selected {
  background-color: #28a745;
  color: #fff;
}

@keyframes zoomIn {
      from {
        transform: scale(0);
      }
      to {
        transform: scale(1);
      }
    }

    .zoomIn {
      animation-name: zoomIn;
      animation-duration: 1s;
      visibility: visible;
    }



  </style>
</head>
<body>
  
  
  <h1>  <a href="index.php" class="btn btn-primary" style="float: left;">back</a>
Event Calendar</h1>
<br>
<br>
<br>
<br>
  <div class="calendar">
    <div class="calendar-header">
      <button id="prev-btn">&lt;</button>
      <h2 id="month-year"></h2>
      <button id="next-btn">&gt;</button>
    </div>
    <div class="calendar-weekdays">
      <div>Sun</div>
      <div>Mon</div>
      <div>Tue</div>
      <div>Wed</div>
      <div>Thu</div>
      <div>Fri</div>
      <div>Sat</div>
    </div>
    <div class="calendar-days" id="calendar-days"></div>
  </div>
  
  <table>
    <thead>
      <tr>
        <th>Date</th>
        <th>Event</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>January 1</td>
        <td>
          <a href="https://www.example.com/new-year" class="event-title">New Year's Day</a>
          <span class="event-description">Celebrate the beginning of the new year!</span>
        </td>
      </tr>
      <tr>
        <td>February 14</td>
        <td>
          <a href="https://www.example.com/valentines-day" class="event-title">Valentine's Day</a>
          <span class="event-description">Celebrate love and affection with your loved ones.</span>
        </td>
      </tr>
      <tr>
        <td>March 17</td>
        <td>
          <a href="https://www.example.com/st-patricks-day" class="event-title">St. Patrick's Day</a>
          <span class="event-description">Celebrate the Irish culture and heritage.</span>
        </td>
      </tr>
      <tr>
        <td>April 22</td>
        <td>
          <a href="https://www.example.com/earth-day" class="event-title">Earth Day</a>
          <span class="event-description">Promote environmental protection and sustainability.</span>
        </td>
      </tr>
      <tr>
        <td>May 1</td>
        <td>
          <a href="https://www.example.com/may-day" class="event-title">May Day</a>
          <span class="event-description">Celebrate the arrival of spring and workers' rights.</span>
        </td>
      </tr>
      <tr>
        <td>June 21</td>
        <td>
          <a href="https://www.example.com/summer-solstice" class="event-title">Summer Solstice</a>
          <span class="event-description">Welcome the longest day of the year and the start of summer.</span>
        </td>
      </tr>
      <tr>
        <td>July 4</td>
        <td>
          <a href="https://www.example.com/independence-day" class="event-title">Independence Day</a>
          <span class="event-description">Celebrate the independence of the United States.</span>
        </td>
      </tr>
      <tr>
        <td>August 15</td>
        <td>
          <a href="https://www.example.com/assumption-of-mary" class="event-title">Assumption of Mary</a>
          <span class="event-description">Commemorate the assumption of the Virgin Mary into Heaven.</span>
        </td>
      </tr>
      <tr>
        <td>September 22</td>
        <td>
          <a href="https://www.example.com/autumn-equinox" class="event-title">Autumn Equinox</a>
          <span class="event-description">Welcome the arrival of autumn and equal day and night.</span>
        </td>
      </tr>
      <tr>
        <td>October 31</td>
        <td>
          <a href="https://www.example.com/halloween" class="event-title">Halloween</a>
          <span class="event-description">Celebrate with costumes, candies, and spooky fun!</span>
        </td>
      </tr>
      <tr>
        <td>November 11</td>
        <td>
          <a href="https://www.example.com/veterans-day" class="event-title">Veterans Day</a>
          <span class="event-description">Honor and appreciate military veterans for their service.</span>
        </td>
      </tr>
      <tr>
        <td>December 25</td>
        <td>
          <a href="https://www.example.com/christmas" class="event-title">Christmas</a>
          <span class="event-description">Celebrate the birth of Jesus Christ and spread joy and goodwill.</span>
        </td>
      </tr>
    </tbody>
  </table>
  
  <script>

document.addEventListener('DOMContentLoaded', function() {
  const prevBtn = document.getElementById('prev-btn');
  const nextBtn = document.getElementById('next-btn');
  const monthYear = document.getElementById('month-year');
  const calendarDays = document.getElementById('calendar-days');

  let currentDate = new Date();

  function renderCalendar() {
    const firstDay = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);
    const lastDay = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0);
    const daysInMonth = lastDay.getDate();
    const month = currentDate.toLocaleString('default', { month: 'long' });
    const year = currentDate.getFullYear();

    monthYear.textContent = `${month} ${year}`;

    let html = '';

    for (let i = 0; i < firstDay.getDay(); i++) {
      html += `<div class="day"></div>`;
    }

    for (let day = 1; day <= daysInMonth; day++) {
      let className = 'day';

      if (
        day === new Date().getDate() &&
        currentDate.getMonth() === new Date().getMonth() &&
        currentDate.getFullYear() === new Date().getFullYear()
      ) {
        className += ' today';
      }

      html += `<div class="${className}" data-day="${day}">${day}</div>`;
    }

    calendarDays.innerHTML = html;
  }

  renderCalendar();

  prevBtn.addEventListener('click', function() {
    currentDate.setMonth(currentDate.getMonth() - 1);
    renderCalendar();
  });

  nextBtn.addEventListener('click', function() {
    currentDate.setMonth(currentDate.getMonth() + 1);
    renderCalendar();
  });

  calendarDays.addEventListener('click', function(event) {
    const selectedDay = event.target.dataset.day;
    if (selectedDay) {
      const selectedDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), selectedDay);
      console.log(selectedDate);
      // Perform desired actions with the selected date
    }
  });
});

function renderCalendar() {
  // ... existing code ...

  let html = '';

  for (let i = 0; i < firstDay.getDay(); i++) {
    html += `<div class="day"></div>`;
  }

  for (let day = 1; day <= daysInMonth; day++) {
    let className = 'day';

    if (
      day === new Date().getDate() &&
      currentDate.getMonth() === new Date().getMonth() &&
      currentDate.getFullYear() === new Date().getFullYear()
    ) {
      className += ' today';
    }

    // Add event descriptions for each day
    const events = getEventsForDate(currentDate.getFullYear(), currentDate.getMonth(), day);
    let eventDescription = '';
    if (events.length > 0) {
      eventDescription = events.map(event => event.description).join('<br>');
    }

    html += `<div class="${className}" data-day="${day}" title="${eventDescription}">${day}</div>`;
  }

  calendarDays.innerHTML = html;
}

// Example function to get events for a specific date
function getEventsForDate(year, month, day) {
  // Replace with your actual event retrieval logic
  // This is just a sample implementation
  const events = [
    { date: new Date(2023, 0, 1), description: 'New Year' },
    { date: new Date(2023, 11, 25), description: 'Christmas' },
  ];

  const selectedDate = new Date(year, month, day);

  return events.filter(event => event.date.toDateString() === selectedDate.toDateString());
}
</script>
  
</body>
</html> 



  
  




 <!DOCTYPE html>
<html>
<head>
  <title>Event Ticketing and Registration</title>
<style>
body {
  font-family: Arial, sans-serif;
  background-color: #60c2ff;
  margin: 0;
  padding: 20px;
}

header {
  background-color: #64c9ff;
  padding: 20px;
  text-align: center;
  color: #fff;
}

h1 {
  margin: 0;
  font-size: 28px;
}

.event-item {
  background-color: #fff;
  padding: 20px;
  margin-bottom: 20px;
  border-radius: 4px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.event-item h2 {
  font-size: 24px;
  margin-bottom: 10px;
}

.event-item p {
  margin: 0;
  font-size: 16px;
  line-height: 1.5;
}

.event-item button {
  display: block;
  margin-top: 20px;
  padding: 10px 20px;
  background-color: #60c2ff;
  color: #fff;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.event-item button:hover {
  background-color: #0056b3;
}

@media screen and (max-width: 600px) {
  .event-item {
    padding: 10px;
  }

  .event-item h2 {
    font-size: 20px;
  }

  .event-item p {
    font-size: 14px;
  }

  .event-item button {
    font-size: 14px;
  }
}


  </style>
</head>
<body>
  <header>
    <h1>Event Ticketing and Registration</h1>
  </header>

  <div id="event-list"></div>

  
  <script>
document.addEventListener('DOMContentLoaded', function() {
  const eventListContainer = document.getElementById('event-list');

  // Sample data for events
  const events = [
    {
      title: 'Event 1',
      date: '2023-06-01',
      time: '19:00',
      location: 'Venue 1',
      price: 10,
    },
    {
      title: 'Event 2',
      date: '2023-06-05',
      time: '20:30',
      location: 'Venue 2',
      price: 15,
    },
  ];

  // Display event list
  events.forEach(function(event) {
    const eventItem = document.createElement('div');
    eventItem.classList.add('event-item');

    const title = document.createElement('h2');
    title.textContent = event.title;
    eventItem.appendChild(title);

    const date = document.createElement('p');
    date.textContent = `Date: ${event.date}`;
    eventItem.appendChild(date);

    const time = document.createElement('p');
    time.textContent = `Time: ${event.time}`;
    eventItem.appendChild(time);

    const location = document.createElement('p');
    location.textContent = `Location: ${event.location}`;
    eventItem.appendChild(location);

    const price = document.createElement('p');
    price.textContent = `Price: $${event.price}`;
    eventItem.appendChild(price);

    const registerBtn = document.createElement('button');
    registerBtn.textContent = 'Register';
    registerBtn.addEventListener('click', function() {
      registerEvent(event);
    });
    eventItem.appendChild(registerBtn);

    eventListContainer.appendChild(eventItem);
  });

  // Function to handle event registration
  function registerEvent(event) {
    // Implement your registration logic here
    // You can use AJAX requests to send registration data to the server
    // Show a confirmation message to the user
    alert(`You have successfully registered for ${event.title}!`);
  }
});


    </script>
</body>
</html>
 


<!DOCTYPE html>
<html>
<head>
  <style>
    /* ... (Existing styles) */

#registration-form {
  margin-top: 20px;
}

#registration-form h2 {
  margin-bottom: 10px;
}

#registration-form label {
  display: block;
  margin-bottom: 5px;
}

#registration-form input,
#registration-form button {
  margin-bottom: 10px;
}

.hidden {
  display: none;
}

    </style>
  <title>Event Ticketing and Registration</title>
  <link rel="stylesheet" href="style.css"> 
</head>
<body>
<!DOCTYPE html>
<html>
<head>
  <title>Event Ticketing and Registration</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    /* Add custom styles if needed */
  </style>
</head>
<!-- <body>
  <div class="container">
    <h1>Event Ticketing and Registration</h1>
    <form>
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
      <button type="submit" class="btn btn-primary" href=>register</button>
    </form>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html> -->
<br>
<footer>
    <p>Event Calendar &copy; 2023. All rights reserved. | <a href="privacy-policy.html">Privacy Policy</a> | <a href="terms-of-service.html">Terms of Service</a></p>
  </footer>

