<?php require_once __DIR__ . '/inc/header.php'; ?>

<div class="container-fluid banner-contact no-margin no-pad" >
<img src="images/banner_projects.jpg" width="100%" alt="Intelli Group Projects">
<img class="mobile" src="images/banner_projects_s.jpg" width="100%" alt="Intelli Group Projects">
<div class="banner-head">
<h1>Intelli Group is committed to building quality homes with attention to detail</h1>
</div>
</div>

<!-- Feature -->

<div class="container-fluid content-wrapper">
<div class="container">

<div class="title-block">
<h2>Our Projects</h2>
<div class="small-border"><hr></div>
<p class="home-intro-txt">Every property speaks to the creative process we aspire to achieve. We strive for perfection in each and every one of our developments.
</p>

</div>
</div>
</div>
<div class="container-fluid bottom-wrap">
<div class="container">

<div id="myBtnContainer">
<div class="feature-sheet">
  <a class="link active" onclick="filterSelection('all')">All</a>
  <a class="link" onclick="filterSelection('Senior-Lifestyle')">Senior Lifestyle</a>
  <a class="link" onclick="filterSelection('Town-Home')">TownHomes</a>
  <a class="link" onclick="filterSelection('Custom-Home')">Custom Homes</a>
  <a class="link" onclick="filterSelection('Hotels')">Hotels</a>
  <a class="link" onclick="filterSelection('Mixed-Use')">Mixed Use</a>
</div>
 <select onchange="filterSelection(this.value)">
  <option value="all" class="link active">All</option>
  <option value="Senior-Lifestyle" class="link" >Senior Lifestyle</option>
  <option value="Town-Home" class="link">TownHomes</option>
  <option value="Custom-Home" class="link">Custom Homes</option>
  <option value="Hotels" class="link">Hotels</option>
  <option value="Mixed-Use" class="link">Mixed Use</option>
</select>

</div>
<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="col-sm-4 column Senior-Lifestyle" >
    <div class="Highlight-wrap">

    <div class="tab-content">
      <a href="project-atrium-senior-home.php">
      <img src="images/project/intelli_project_1.jpg" alt="Senior Lifestyle" style="width:100%">
      <div class="highlight-content">
      <h4>The Atrium Senior Home</h4>
      </div>
      </a>
    </div>
    <div class="highlight-box-overlay">
    </div>
  </div>
  </div>
  <div class=" col-sm-4 column Town-Home" >
    <div class="Highlight-wrap">
    <div class="tab-content">
      <a href="project-richmond-cambie-townhome.php">
     	<img src="images/project/intelli_project_2.jpg" alt="Town-Home" style="width:100%">
      <div class="highlight-content">
      <h4>Richmond - Cambie Townhome</h4>
      </div>
      </a>
    </div>
    <div class="highlight-box-overlay">
    </div>
  </div>
  </div>
  <div class="col-sm-4 column Town-Home" >
    <div class="Highlight-wrap">
    <div class="tab-content">
      <a href="project-richmond-no3-townhome.php">
  	<img src="images/project/intelli_project_3.jpg" alt="Town-Home" style="width:100%" >
    <div class="highlight-content">
    <h4>Richmond - No.3 Road Townhouse</h4>
    </div>
    </a>
  	</div>
    <div class="highlight-box-overlay">
    </div>
  </div>
  </div>
  <div class="col-sm-4 column Custom-Home">
    <div class="Highlight-wrap">
    <div class="tab-content">
      <a href="project-vancouver-single-family-house.php">
  	<img src="images/project/intelli_project_4.jpg" alt="Custom-Home" style="width:100%">
    <div class="highlight-content">
    <h4>Vancouver Single Family House</h4>

    </div>
    </a>
    </div>
    <div class="highlight-box-overlay">
    </div>
  </div>
  </div>
  <div class="col-sm-4 column Hotels">
    <div class="Highlight-wrap">
    <div class="tab-content">
      <a href="project-richmond-north-hotel.php">
  	<img src="images/project/intelli_project_5.jpg" alt="Hotels" style="width:100%">
    <div class="highlight-content">
    <h4>Richmond North Hotel</h4>

    </div>
    </a>
    </div>
    <div class="highlight-box-overlay">
    </div>
  </div>
  </div>
  <div class="col-sm-4 column Mixed-Use">
    <div class="Highlight-wrap">
    <div class="tab-content">
      <a href="project-kingsway-mixed-building.php">
  	<img src="images/project/intelli_project_6.jpg" alt="Hotels" style="width:100%">
    <div class="highlight-content">
    <h4>Kingsway Mixed-Use Building</h4>
    </div>
    </a>
    </div>
    <div class="highlight-box-overlay">
    </div>
  </div>
  </div>

</div>
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>
</div>
</div>
</div>
<?php require_once __DIR__ . '/inc/footer.php'; ?>
