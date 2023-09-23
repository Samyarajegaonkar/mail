<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Send gmail to host</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="wrapper">
    <header>Send us a Message</header>
    <hr>
    <form action="#">
      <div class="dbl-field">
        <div class="field">
          <input type="text" placeholder="Enter your name" name="name">
          <i class="fas fa-user"></i>
        </div>
        <div class="field">
          <input type="text" placeholder="Enter your email" name="email">
          <i class="fas fa-envelope"></i>
        </div>
      </div>
      <div class="dbl-field">
        <div class="field">
          <input type="text" placeholder="Enter your phone" name="phone">
          <i class="fas fa-user"></i>
        </div>
        <div class="field">
          <input type="text" placeholder="Enter your website" name="website">
          <i class="fas fa-envelope"></i>
        </div>
      </div>
      <div class="message">
        <textarea placeholder="Write your message" name="message"></textarea>
      </div>
      <div class="button-area">
        <button class="submit">Send Message</button>
        <span>Sending your message...</span>
      </div>
    </form>
  </div>
  <script src="script.js"></script>
</body>
</html>