<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Management</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    /* Reset default browser styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
    }

    .container {
      max-width: 960px;
      margin: 0 auto;
      padding: 40px 20px;
    }

    header {
      background-color: #60c2ff;
      color: #fff;
      padding: 20px 0;
    }

    .logo {
      font-size: 24px;
      font-weight: bold;
      margin-right: 20px;
    }

    .nav-links {
      list-style: none;
    }

    .nav-links li {
      display: inline-block;
      margin-right: 10px;
    }

    .nav-links li a {
      color: #fff;
      text-decoration: none;
    }

    section {
      padding: 80px 0;
      text-align: center;
    }

    h2 {
      margin-bottom: 20px;
    }

    .tagline {
      font-size: 20px;
      color: #666;
    }

    .services-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-gap: 20px;
      margin-top: 40px;
    }

    .service {
      background-color: #f4f4f4;
      padding: 20px;
      text-align: center;
    }

    .service img {
      max-width: 100%;
      margin-bottom: 20px;
    }

    .service h3 {
      margin-bottom: 10px;
    }

    .service p {
      color: #666;
    }

    section.bg-light {
      background-color: #f9f9f9;
    }

    form input,
    form textarea,
    form button {
      margin-bottom: 10px;
      width: 100%;
      padding: 10px;
    }

    form button {
      background-color: #60c2ff;
      color: #fff;
      border: none;
      cursor: pointer;
    }

    footer {
      background-color: #60c2ff;
      color: #fff;
      padding: 20px 0;
      text-align: center;
    }

    /* Animation styles */
    @keyframes fill {
      0% {
        transform: scaleY(0);
      }
      100% {
        transform: scaleY(1);
      }
    }

    .fill-animation {
      animation-name: fill;
      animation-duration: 1s;
      animation-fill-mode: forwards;
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

  </style>
</head>

<body>
  <header>
    <nav>
      <div class="container">
      <a href="/" class="back-button"> Back</a>
        <h1 class="logo">Event Management</h1>
        <ul class="nav-links">
          <li><a href="#home">Hotspots</a></li>
          <li><a href="#services">urban place</a></li>
          <li><a href="#Adventure">Adventure</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <section id="home">
    <div class="container">
      <h2>Event Overview</h2>
      <p class="tagline">We make your events unforgettable</p>
    </div>
    <div class="container">
      <h2>Hotspots</h2>
      <div class="services-grid">
        <div class="service">
          <img src="https://authenticbhutantours.com/wp-content/uploads/2016/11/Dechenphu-Lhakhang-Festival.jpg"
          alt="Service 1" class="fill-animation">
          <h3>Dechenphug Lhakhang </h3>
          <p>– Dechenphug Lhakhang is a fortified monastery located on the western slope of the Thimphu valley. The site straddles a natural drainage channel that runs perpendicular to two mountain ridges and is set in a vast forested area with no other nearby development. It was founded in the 12th century by Dampa, a son (or possibly, grandson) of Phajo Drugom Shigpo (1184-1251), who popularized the Drukpa school of Buddhism throughout Bhutan.</p>
        </div>
        <div class="service">
          <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/11/cb/80/0f/buddha-point-bhutan-explore.jpg?w=1200&h=-1&s=1"alt="Service 2" class="fill-animation">
          <h3>Buddha Dordenma Statue</h3>
          <p>The location was on the former ruins of Kuensel Phodrang a palace that belonged to Sherab Wangchuck who was a secular ruler of Bhutan under the duel government system during the 17th and 19th century. </p>
        </div>
        <div class="service">
          <img src="https://www.heavenlybhutan.com/wp-content/uploads/2015/07/Dochula-Festival-1-e1593749007444.jpg"alt="Service 3" class="fill-animation">
          
          <h3>DRUK WANGYEL TSHECHU</h3>
          <p>The Dochula Pass is between Thimphu and Punakha, where 108 memorial chortens or stupas known as “Druk Wangyal Chortens” have been built by Ashi Dorji Wangmo Wangchuk, the eldest Queen Mother of Bhutan. Just above the pass there is open courtyard where Druk Wangyel Festival takes place. The Druk Wangyel Tshechu is a unique festival performed by the Royal Bhutan Army rather than monks or lay people, which was established in 2011 to commemorate victory of the Fourth Druk Gyelpo and the arm forces in 2003. </p>
        </div>
      </div>
    </div>
  </section>

  <section id="services" class="bg-light">
    <div class="container">
      <h2>Urban Places</h2>
      <div class="services-grid">
        <div class="service">
          <img src="https://assets.traveltriangle.com/blog/wp-content/uploads/2015/10/Jambay-Lhakhang-Drup11.jpg" 
          alt="Service 1" class="fill-animation">
          <h3>Jambay Lhakhang Drup Festival</h3>
          <p>Naked dancing, fire dancing, mask dancing-Jambay Lhakhang Drup has it all.</p>
        </div>
        <div class="service">
          <img src="https://assets.traveltriangle.com/blog/wp-content/uploads/2015/10/Haa-Summer-festival.jpg" alt="Service 2" class="fill-animation">
          <h3>Haa Summer Festival</h3>
          <p>he festival is mainly dedicated to the nomads of Haa Valley.</p>
        </div>
        <div class="service">
          <img src="https://assets.traveltriangle.com/blog/wp-content/uploads/2019/02/Bhutan_10.jpg"alt="Service 3" class="fill-animation">
          
          <h3>Sakteng Festival</h3>
          <p>The Sakteng Festival is an annual celebration which happens the Sakteng Valley located at an altitude of 3000 meters.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="Adventure" class="bg-light">
    <div class="container">
      <h2>Adventure</h2>
      <div class="services-grid">
        <div class="service">
          <img src="https://assets.traveltriangle.com/blog/wp-content/uploads/2015/10/Jomolhari-Mountain-Festival.jpg" 
          alt="Service 1" class="fill-animation">
          <h3>Jomolhari Mountain Festival</h3>
          <p>The Jomolhari Mountain festival is a festival which happens for around 2 days and considered to be one of the exquisite events to be witnessed.</p>
        </div>
        <div class="service">
          <img src="https://assets.traveltriangle.com/blog/wp-content/uploads/2018/08/White-Water-Rafting.jpg" alt="Service 2" class="fill-animation">
          <h3>Whitewater Rafting</h3>
          <p>The Pho Chhu and Mo Chhu rivers are quite popular spots for river rafting in Bhutan.</p>
        </div>
        <div class="service">
          <img src="https://assets.traveltriangle.com/blog/wp-content/uploads/2018/09/trekking-experience-in-kathmandu.jpg"alt="Service 3" class="fill-animation">
          <h3>Trekking</h3>
          <p>The mountainous reaches of the Bhutanese Himalayas are quite inviting, and quite a lot of people go trekking in Bhutan through the various trails that run through the mountains.</p>
        </div>
      </div>
    </div>
  </section>
  <section id="contact" class="bg-light">
    <div class="container">
      <h2>Contact Us</h2>
      <p>If you have any questions or inquiries, please feel free to get in touch with us.</p>
      <form>
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
      </form>
    </div>
  </section>

  <footer>
    <div class="container">
      <p>&copy; 2023 Event Management. All rights reserved.</p>
    </div>
  </footer>

</body>

</html>
