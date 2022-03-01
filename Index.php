<?php

include('session.php');
$stat=$_SESSION['userstat'];
if('admin'== $_SESSION['userstat'])
{
 header('adminhome.php');
}
else
{
  header('userhome.php');
}
?>
<html>
    <head>
    <title>Home | Library</title>
    <link rel="shortcut icon" href="favicon.png" />
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <script type="text/javascript" src="CSS/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <style>
        body {
  padding-top: 10px;
}
@media (max-width: 979px) {
  body {
    padding-top: 0px;
  }
}
      .container {
  position: relative;
  text-align: center;
  color: white;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.centerimg {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 100%;
}
    </style>
    </head>
    <body>
    <img src="Images/home/blur.jpg" class="centerimg">
    <div class="centered display-4" style="color:#fdff32;font-weight:600;text-align: center;">"Reading makes a full Man, Meditation a profound Man, 
    Discourse a clear Man"<br><al style="color:antiquewhite;font-weight:300">Benjamin Franklin</al></div>
    <br>
    <br>

    
    <div class="row">

    
    <div class="col-md-3">
    <div class="card" style="width: 18rem;">
  <a href="uploads\JaneEyre.pdf"><img class="card-img-top" src="Images/home/eyre.jpg" alt="Card image cap"> </a>
  <div class="card-body">
    <h5 class="card-title">Jane Eyre</h5>
    <p class="card-text">Jane Eyre is a novel by English writer Charlotte BrontÃ«, published under the pen name "Currer Bell", on 16 October 1847, by Smith, Elder & Co. of London.The novel follows the story of Jane, a seemingly plain and simple girl as she battles through life's struggles. Jane has many obstacles in her life - her cruel and abusive Aunt Reed, the grim conditions at Lowood school, her love for Rochester and Rochester's marriage to Bertha.</p>
    <input type="submit" value="Open" name="Open" class="btn btn-outline-info">
  </div>
 
  </form>
</div>
</div>
<div class="col-md-3">
<div class="card" style="width: 18rem;">
<a href="uploads\WimpyKid.pdf"><img class="card-img-top" src="Images/home/kid.jpg" alt="Card image cap"></a>
  <div class="card-body">
    <h5 class="card-title">Diary of a wimpy kid</h5>
    <p class="card-text">It's a new school year, and Greg Heffley finds himself thrust into middle school, where undersized weaklings share the hallways with kids who are taller, meaner, and already shaving. The hazards of growing up before you're ready are uniquely revealed through words and drawings as Greg records them in his diary.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
<div class="col-md-3">
<div class="card" style="width: 18rem;">
<a href="uploads\romeo-and-juliet.pdf"><img class="card-img-top" src="Images/home/love.jpg" alt="Card image cap"></a>
  <div class="card-body">
    <h5 class="card-title">Romeo and Juliet</h5>
    <p class="card-text">he classic story of Romeo meets Juliet; girl's family hates boy's family; boy's family hates girl's family; boy kills girl's cousin; boy and girl kill themselves.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
<div class="col-md-3">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="Images/home/diary.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">The Princess Diaries, Volume II</h5>
    <p class="card-text">In this novel, Mia must learn to deal with public life, beginning with a primetime interview Mia is instructed to attend by her GrandmÃ¨re, despite Mia's protests. When Mia gets a sore throat, she thinks that the interview will be cancelled, but she is enticed out of her sickbed by the notion of a "secret admirer," and cannot avoid the interview.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
    </div>
    <br>
    <br>
    
    <div class="row">
    <div class="col-md-3">
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="Images/home/girl.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Twilight</h5>
    <p class="card-text">Twilight tells the story of Bella, an average 17 year old girl who moves to Forks, WA to live with her father after her mother remarries a traveling minor league baseball player. In Forks, she meets Edward, a mysterious, gorgeous, private student, who tends to travel in a pack with his family.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
<div class="col-md-3">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="Images/home/sea.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">The Village By The Sea</h5>
    <p class="card-text">The novel follows the life of a small family forced to live in poverty. The parents are unable to take care of their four childrenâ€”the mother is sick with an unknown illness and the father is given to drink and dissolutionâ€”so the oldest two, Lila and Hari, assume the roles of adults in the house.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
<div class="col-md-3">
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="Images/home/note.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">The Notebook</h5>
    <p class="card-text">The Notebook is an achingly tender story about the enduring power of love, a story of miracles that will stay with you forever. Set amid the austere beauty of coastal North Carolina in 1946, The Notebook begins with the story of Noah Calhoun, a rural Southerner returned home from World War II.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
<div class="col-md-3">
<div class="card" style="width: 18rem;">
<a href="uploads\Chicken Soup for the Soul.pdf"><img class="card-img-top" src="Images/home/think.jpg" alt="Card image cap"></a>
  <div class="card-body">
    <h5 class="card-title">Chicken Soup for the Soul</h5>
    <p class="card-text">Chicken Soup for the Soul: Find Your Happiness will encourage readers to pursue their dreams, find their passion and seek joy in their life with its 101 personal and inspiring stories. This book continues Chicken Soup for the Soul's focus on inspiration and hope, reminding us that we all can find our own happiness.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
    </div>
    </body>
