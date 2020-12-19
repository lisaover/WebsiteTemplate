<!DOCTYPE html>

<head>
    <title>Lisa Over</title>
    <meta charset="UTF-8">
    <meta name="dcterms.creator" content="Lisa Over">
    <meta name="dcterms.title" content="Lisa Over's Online Resume and Portfolio">
    <meta name="dcterms.subject" content="">
    <meta name="dcterms.subject" content="">
    <meta name="dcterms.description" content="This site is about the education and experience of Lisa Over as a programmer and data manager.">
    <meta name="dcterms.dateCopyrighted" scheme="iso8601" content="2020-08-15">
    <meta name="keywords" content="Teaching, algebra, statistics, geometry, curriculum, philosophy">  
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="scripts/nav_events.js"></script>
    <script type="text/javascript" src="scripts/topic_events.js"></script>
    <script type="text/javascript" src="scripts/slideshow_events.js"></script>

</head>

<body onload="init();">
    <?php include 'scripts/header_nav.php';?>
    <div id="topics">
        <h3>Writing</h3>
        <div class="toc">         
            <p><a href="#" id="creative-poly">Get Creative with Polynomials</a></p>
        </div>
    </div>
    
    <div class="clearfloat"></div>
        
        <div id="c_creative-poly" class="content">
            <H3>Get Creative with Polynomials</H3>
  
            <p>In this project students use their imaginations to create a building or outside space (e.g., park, zoo habitat, space station, museum, sports complex). There are four parts to this project: writing, drawing, math, and display. Students describe their construction through writing and drawing. They find the area of their construction in terms of an unknown value. All dimensions used to find the total area, whether length, width, or radius, must be represented by linear binomials. They display their work neatly and creatively on a poster board.</p>
<p>Through writing students describe how the sides of their constructions relate to one another or to another object to explain how they derived their linear binomial. Students also describe the purpose of the construction, how people will use it, and the benefits of the design (why did they choose a rectangular or circular layout?). The drawing shows the floor plan or plan of the grounds to show the arrangement of rooms or spaces. Students also label their drawings with the measurements and the names of the rooms or spaces.</p>
<p>You can see that students were very creative with this project. Some even created objects that were not buildings or outdoor spaces, as in the lollipop and picture frame projects shown below. More projects with close up pictures of the text and drawings can be viewed by downloading the slideshow provided below the images.</p>
<h4>Project Files</h4>
<p><a href="portfolio_teaching/algebra/Get-Creative-with-Polynomials-Rubric.pdf" target="Blank">Instructions and Rubric</a><br />
    <a href="portfolio_teaching/algebra/Get-Creative-with-Polynomials-Drawing-Ex.pdf" target="Blank">Drawing Example</a><br />
    <a href="portfolio_teaching/algebra/Get-Creative-with-Polynomials.ppsx" target="Blank">Slideshow of Student Work</a></p>
<h4>Student Work</h4>

 <!-- Container for the image gallery -->
<div class="container">

  <!-- Full-width images with number text -->
  <div class="mySlides">
    <div class="numbertext">1 / 11</div>
      <img src="portfolio_teaching/images/polynomial-cupcake-tasting.JPG" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 11</div>
      <img src="portfolio_teaching/images/polynomial-picture-frame.JPG" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 11</div>
      <img src="portfolio_teaching/images/polynomial-lollipop1.JPG" style="width:100%">
  </div>
  
  <div class="mySlides">
    <div class="numbertext">4 / 11</div>
      <img src="portfolio_teaching/images/polynomial-lollipop3.JPG" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 11</div>
      <img src="portfolio_teaching/images/polynomial-lollipop2a.png" style="width:100%">
  </div>
  
  <div class="mySlides">
    <div class="numbertext">6 / 11</div>
      <img src="portfolio_teaching/images/polynomial-lollipop2.png" style="width:100%">
  </div>
  
  <div class="mySlides">
    <div class="numbertext">7 / 11</div>
      <img src="portfolio_teaching/images/polynomial-ranch1.png" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">8 / 11</div>
      <img src="portfolio_teaching/images/polynomial-ranch2.JPG" style="width:100%">
  </div>
  
  <div class="mySlides">
    <div class="numbertext">9 / 11</div>
      <img src="portfolio_teaching/images/polynomial-ranch5.JPG" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">10 / 11</div>
      <img src="portfolio_teaching/images/polynomial-ranch3.JPG" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">11 / 11</div>
      <img src="portfolio_teaching/images/polynomial-ranch4.JPG" style="width:100%">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <!-- Image text -->
  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <!-- Thumbnail images -->
  <div class="row">
    <div class="column">
      <img class="demo cursor" src="portfolio_teaching/images/polynomial-cupcake-tasting.JPG" style="width:100%" onclick="currentSlide(1)" alt="Cupcake Tasting">
    </div>
    <div class="column">
      <img class="demo cursor" src="portfolio_teaching/images/polynomial-picture-frame.JPG" style="width:100%" onclick="currentSlide(2)" alt="Picture Frame">
    </div>
    <div class="column">
      <img class="demo cursor" src="portfolio_teaching/images/polynomial-lollipop1.JPG" style="width:100%" onclick="currentSlide(3)" alt="Lollipop">
    </div>
    <div class="column">
      <img class="demo cursor" src="portfolio_teaching/images/polynomial-lollipop3.JPG" style="width:100%" onclick="currentSlide(4)" alt="Lollipop Calculations">
    </div>
    <div class="column">
      <img class="demo cursor" src="portfolio_teaching/images/polynomial-lollipop2a.png" style="width:100%" onclick="currentSlide(5)" alt="Lollipop Shape">
    </div>
    <div class="column">
      <img class="demo cursor" src="portfolio_teaching/images/polynomial-lollipop2.png" style="width:100%" onclick="currentSlide(6)" alt="Lollipop Description">
    </div>
    <div class="column">
      <img class="demo cursor" src="portfolio_teaching/images/polynomial-ranch1.png" style="width:100%" onclick="currentSlide(7)" alt="Rachel's Ranch Cover">
    </div>
    <div class="column">
      <img class="demo cursor" src="portfolio_teaching/images/polynomial-ranch2.JPG" style="width:100%" onclick="currentSlide(8)" alt="Rachel's Ranch Inside">
    </div>
    <div class="column">
      <img class="demo cursor" src="portfolio_teaching/images/polynomial-ranch5.JPG" style="width:100%" onclick="currentSlide(9)" alt="Rachel's Ranch Calculations">
    </div>
    <div class="column">
      <img class="demo cursor" src="portfolio_teaching/images/polynomial-ranch3.JPG" style="width:100%" onclick="currentSlide(10)" alt="Rachel's Ranch Description">
    </div>
    <div class="column">
      <img class="demo cursor" src="portfolio_teaching/images/polynomial-ranch4.JPG" style="width:100%" onclick="currentSlide(11)" alt="Rachel's Ranch Floor Plan">
    </div>
  </div>
</div> 
 
 </div>
    
</body>

</html>