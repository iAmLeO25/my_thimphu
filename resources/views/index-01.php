<!DOCTYPE html>
<html>
<head>
    <title>Festival </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f1f1f1;
            font-family: Arial, sans-serif;
            margin-bottom: 80px;
        }

        .header {
            background-color:#64c9ff;
            padding: 20px;
            text-align: center;
            color: #fff;
        }

        .container {
            padding: 20px;
        }

        .section-title {
            text-align: center;
            font-size: 32px;
            margin-bottom: 40px;
            color: #2c3e50;
        }

        .event-card {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .event-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #2c3e50;
        }

        .event-description {
            font-size: 16px;
            color: #555;
            margin-bottom: 20px;
        }

        .event-date {
            font-size: 14px;
            color: #888;
        }

        .event-image {
            width: 100%;
            max-height: 200px;
            object-fit: cover;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .back-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #64c9ff;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease-in-out;
        }

        .back-button:hover {
            background-color: #2f3a8e;
        }

        .footer {
            background-color: #64c9ff;
            padding: 20px;
            text-align: center;
            color: #fff;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header class="header">
        <h1>Festival Website</h1>
    </header>

    <div class="container">
        <a href="/" class="back-button"> Back</a>

        <h2 class="section-title">Upcoming Events</h2>

        <div class="row">
            <div class="col-md-4">
                <div class="event-card">
                    <h3 class="event-title">Concert Night</h3>
                    <img class="event-image" src="concert-night.jpg" alt="Concert Night">
                    <p class="event-description">Join us for an unforgettable night of live music featuring renowned artists from around the world.</p>
                    <p class="event-date">Date: July 15, 2023</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="event-card">
                    <h3 class="event-title">Street Parade</h3>
                    <img class="event-image" src="street-parade.jpg" alt="Street Parade">
                    <p class="event-description">Experience the vibrant energy of our annual street parade with colorful floats, dancers, and performers.</p>
                    <p class="event-date">Date: August 2, 2023</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="event-card">
                    <h3 class="event-title">Food Festival</h3>
                    <img class="event-image" src="food-festival.jpg" alt="Food Festival">
                    <p class="event-description">Indulge in a gastronomic delight with a wide variety of cuisines and food stalls offering delectable treats.</p>
                    <p class="event-date">Date: September 10, 2023</p>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2023 Festival Website. All rights reserved.</p>
    </footer>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
