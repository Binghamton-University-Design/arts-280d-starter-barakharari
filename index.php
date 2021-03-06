<!DOCTYPE html>
<html>
<head>
  <meta name="keywords" content="design, html, css, programmer, frontend, developer, designer">
  <meta name="description" content="Personal Website of Barak Harari">
  <title>Barak Harari</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> 
  <script src="js/main.js"></script>
  <link rel="icon" type="png" href="images/icon.png">
  <link rel="stylesheet" type="text/css" href="css/grid.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>

  <img class="cover topright reverse" src="images/cover.jpg">

  <div id="wrapper">

    <div id="masthead" class="grid">

      <div id="logo" class="width-9-12-m width-5-12">
        <a href="/" title="Barak Harari">
          <h1 id="name">Barak Harari</h1>
        </a>
      </div>

      <div id="nav-button" class="width-3-12-m width-12-12">
        <div id="nav-button-holder">
          <button class="hamburger hamburger--squeeze" type="button">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
        </div>
      </div>


      <div id="nav" class="width-12-12-m width-7-12">
        <ul>
          <li><a href="about.html">About</a></li>
          <li><a href="portfolio.html">Programming</a></li>
          <li><a href="music.html">Music</a></li>
          <li><a href="contact.html">Contact</a></li>
       </ul> 
      </div>
    </div>

    <div id="main" class="grid">

      <div id="intro" class="width-12-12-m width-12-12">
        <div id="intro-holder">
          <h1>You know how creative people are, we have to try everything until we find our niche.</h1>
          <h4>-E.A. Bucchianeri</h4>
        </div>
      </div>
      <div id="work" class="width-12-12-m width-12-12">

        <h3><a title="work" href="portfolio.html">Programming Projects</a></h3>

        <div id="work-holder" class="grid">
          <div class="width-12-12-m width-6-12 work-item">
            <a class="inner" href="portfolio-projects/uncommon-urls.html" title="Uncommon URLs">
              <div class="work-inside">
                <h2>Uncommon URLs</h2>
                <p>A website for finding domain names based on keywords</p>
              </div>
              <img src="images/1x1/1x1domainfinder.png">
            </a>
          </div>

          <div class="width-12-12-m width-6-12 work-item">
            <a class="inner" href="portfolio-projects/rome.html" title="Spaceman">
              <div class="work-inside">
                <h2>ROME</h2>
                <p>Eye movement tracking software written in Python</p>
              </div>
              <img src="images/1x1/1x1rome.png">
            </a>
          </div>
        </div>
      </div>
      <div id="music" class="width-12-12-m width-12-12">
        <h3><a title="Music" href="music.html">Music</a></h3>
        <div class="music-holder grid">
          <div class="width-12-12-m width-6-12 music-item">
            <div class="musicinfo">
              <div class="date-holder"><p class="date">22 NOV, 2019</p></div>
              <p><h2>"Back Away- Sophie Pickman"</h2></p>
            </div>
            <p class="song"><iframe allow="autoplay *; encrypted-media *;" frameborder="0" height="150" style="width:100%;max-width:660px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/album/back-away/1489221186?i=1489221187"></iframe></p>
          </div>
          <div class="width-12-12-m width-6-12 music-item">
            <div class="musicinfo">
              <div class="date-holder"><p class="date">15 June, 2020</p></div>
              <p><h2>"Just What I Like- Sophie Pickman"</h2></p>
            </div>
            <p class="song"><iframe allow="autoplay *; encrypted-media *;" frameborder="0" height="150" style="width:100%;max-width:660px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.music.apple.com/us/album/just-what-i-like/1518521429?i=1518521432"></iframe></p>
          </div>
        </div>
      </div>
    </div>

    <div id="footer" class="grid">
      <div class="width-12-12-m width-12-12">
        <p>Copyright ©2020 · Barak Harari</p>
      </div>
    </div>

  </div>

</body>
</html>