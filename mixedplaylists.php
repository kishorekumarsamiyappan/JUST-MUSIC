<!DOCTYPE html>
<html lang="en">
<head>
    <title>JustMusic - Mixedplaylists</title>
    <link rel="icon" href="logo.png" type="image/icon type">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #1e1e1e;
        color: #fff;
        
    }

    header {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 2em;
        background-image: url(tital\ bg.jpg);

    }

    nav {
        background-color: transparent;
        padding: 1em;
        text-align: center;
    }

    nav a {
        text-decoration: none;
        color: #fff;
        margin: 0 1em;
        font-weight: bold;
        transition: color 0.3s ease,transform 0.3 ease;
    }

    nav a:hover {
        color: #e5ff00;
        transform: scale(1.1);
    }

    section {
        padding: 2em;
        text-align: center;
     
        
        
    }

    .featured {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .featured-item {
        margin: 1em;
        text-align: center;
        border: 3px solid #333;
        padding: 1em;
        background-color:transparent;
        border-radius: 8px;
        transition: transform 0.3s ease;
    }

    .featured-item:hover {
        transform: scale(1.05);
    }

    footer {
        background-color:transparent;
        color: #fff;
        text-align: center;
        padding: 1em;
    }
    p{
        font-family: fantasy;
        font-size: medium;
    }
    nav ul{
        text-align:right;
    }
    #background-video {
      position: fixed;
      right: 0;
      bottom: 0;
      min-width: 100%;
      min-height: 100%;
      width: auto;
      height: auto;
      z-index: -1;
      
    }
    .dropbtn {
  background-color: transparent;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.dropdown {
  position: relative;
  display: inline-block;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color:transparent;
  min-width: 99px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: rgb(255, 255, 255);
  padding: 2px 4px;
  text-decoration: none;
  display: block;
  text-align:left;
}
button{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
.dropdown-content a:hover {
    background-color:transparent;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: transparent;
}
  </style>
</head>

<body>
    <header>
        <img src="logo.png" white="180px" height="180px">
    </header>

        <nav>
            <ul>
                <a class="search-container">
                      <input type="text" placeholder="Search.." name="search">
                      <button type="submit"><i class="fa fa-search"></i></button>
                </a>
                    <a href="javascript:history.go(-1)">Back</a>
                    <a href="index.php">Home</a>
                    <a href="mixedplaylists.php">Mixed Playlists</a>
                    <div class="dropdown">
                        <button class="dropbtn">Profile</button>
                        <div class="dropdown-content">
                          <a href="signup.php">Sign Up</a>
                          <a href="signin.php">Sign In</a>
                        </div>
                      </div>
        </ul>
        </nav>
        <video id="background-video" autoplay muted loop>
            <source src="bg 345.mp4" type="video/mp4">
          </video>
    <section>
        <h2>Mixed Playlists</h2>
        <div class="featured">
            <div class="featured-item">
                <p>Perfect</p>
                <img src="ed.jpg.jpg" alt="Song 1" class="rounded" width="150" height="150"><br>
                <audio controls no-autoplay muted>
                    <source src="pagalworld.com.mx-Perfect.mp3" type="audio/mpeg">
                </audio>
            </div>
            <div class="featured-item">
                <p>Muzumathi</p>
                <img src="mulumathi.jpg" alt="Song 2" class="rounded" width="150" height="150"><br>
                <audio controls no-autoplay muted>
                    <source src="Muzumathi-MassTamilan.dev.mp3" type="audio/mpeg">
                </audio>
            </div>
            <div class="featured-item">
                <p>Night Changes</p>
                <img src="night changes.jpg" alt="Song 3" class="rounded"  width="150" height="150"><br>
                <audio controls no-autoplay muted>
                    <source src="Night Changes(PagalWorld).mp3" type="audio/mpeg">
                </audio>
            </div>
            <div class="featured-item">
                <p>No-Lie</p>
                <img src="no lie.jpg" alt="Song 3" class="rounded"  width="150" height="150"><br>
                <audio controls no-autoplay muted>
                    <source src="No-Lie(PaglaSongs).mp3" type="audio/mpeg">
                </audio>
            </div>
            <div class="featured-item">
                <p>Play-Date</p>
                <img src="play date.jpg" alt="Song 3" class="rounded"  width="150" height="150"><br>
                <audio controls no-autoplay muted>
                    <source src="Play-Date(PaglaSongs).mp3" type="audio/mpeg">
                </audio>
            </div>
            <div class="featured-item">
                <p>Yamma-Yamma</p>
                <img src="yamma.jpg" alt="Song 3" class="rounded"  width="150" height="150"><br>
                <audio controls no-autoplay muted>
                    <source src="Yamma-Yamma.mp3" type="audio/mpeg">
                </audio>
            </div>
            <div class="featured-item">
                <p>Kaadhal-Yen-Kaadhal</p>
                <img src="kadhal.jpg" alt="Song 3" class="rounded"  width="150" height="150"><br>
                <audio controls no-autoplay muted>
                    <source src="Kaadhal-Yen-Kaadhal.mp3" type="audio/mpeg">
                </audio>
            </div>
            <div class="featured-item">
                <p>Kadhalikathey</p>
                <img src="katha.jpg" alt="Song 3" class="rounded"  width="150" height="150"><br>
                <audio controls no-autoplay muted>
                    <source src="Kadhalikathey-MassTamilan.com.mp3" type="audio/mpeg">
                </audio>
            </div>
            <div class="featured-item">
                <p>Hayyoda</p>
                <img src="hayyoda.jpg" alt="Song 3" class="rounded"  width="150" height="150"><br>
                <audio controls no-autoplay muted>
                    <source src="Hayyoda-MassTamilan.dev.mp3" type="audio/mpeg">
                </audio>
            </div>
            <div class="featured-item">
                <p>En-Kadhal-Solla</p>
                <img src="en kadhal solla.jpg" alt="Song 3" class="rounded" width="150" height="150"><br>
                <audio controls no-autoplay muted>
                    <source src="En-Kadhal-Solla.mp3" type="audio/mpeg">
                </audio>
            </div>
            <div class="featured-item">
                <p>Idhazhin-Oram</p>
                <img src="idhalin oram.jpg" alt="Song 3" class="rounded"  width="150" height="150"><br>
                <audio controls no-autoplay muted>
                    <source src="Idhazhin-Oram.mp3" type="audio/mpeg">
                </audio>
            </div>
            <div class="featured-item">
                <p>Aval</p>
                <img src="aval.jpg" alt="Song 3" class="rounded"  width="150" height="150"><br>
                <audio controls no-autoplay muted>
                    <source src="Aval.mp3" type="audio/mpeg">
                </audio>
            </div>
            <div class="featured-item">
                <p>Breakup</p>
                <img src="break up.jpg" alt="Song 3" class="rounded"  width="150" height="150"><br>
                <audio controls no-autoplay muted>
                    <source src="Breakup-Song-MassTamilan.io.mp3" type="audio/mpeg">
                </audio>
            </div>
            <div class="featured-item">
                <p>Blinding_Lights</p>
                <img src="lights.jpg" alt="Song 3" class="rounded"  width="150" height="150"><br>
                <audio controls no-autoplay muted>
                    <source src="The_Weeknd_-_Blinding_Lights.mp3" type="audio/mpeg">
                </audio>
            </div>
            <div class="featured-item">
                <p>On-The-Floor-Baby</p>
                <img src="kudukku.jpg" alt="Song 3" class="rounded"  width="150" height="150"><br>
                <audio controls no-autoplay muted>
                    <source src="On-The-Floor-Baby-(Kudukku)(PagalWorld).mp3" type="audio/mpeg">
                </audio>
            </div>
            <script>
                document.addEventListener('play', function(e){  
                    var audios = document.getElementsByTagName('audio');  
                    for(var i = 0, len = audios.length; i < len;i++){  
                        if(audios[i] != e.target){  
                            audios[i].pause();  
                        }  
                    }  
                }, true);
                </script>
        </div>
    </section>
    <footer>
        <h5>&copy; 2023 JustMusic. All rights reserved.</h5>
    </footer>
</body>
</html>