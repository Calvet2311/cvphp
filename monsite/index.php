<?php
$bdd = new PDO ("mysql:host=localhost;dbname=monsite", "root", "");
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Mon cv de bg</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/resume.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">Romain Calvet</span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/moi.jpg" alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#experience">Experience</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#education">Education</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#interests">Interests</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#awards">Awards</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
        <h1 class="mb-0">Calvet
          <span class="text-primary">Romain</span>
        </h1>
        <div class="subheading mb-5">47 Rue Gueroux 93380 Pierrefitte-sur-Seine - France   ·
          <a href="mailto:name@email.com">romaincalvet23@hotmail.fr</a>
        </div>
        <p class="lead mb-5">Je suis actuellement étudiant en première année de Bachelor Informatique à Paris YNOV, je souhaite ensuite m'orrienter vers un master en Cybersécurité suite a l'obtension de mon bachelor.</p>
        <div class="social-icons">
          <a href="https://github.com/Calvet2311">
            <i class="fab fa-github"></i>
          </a>
          <a href="https://twitter.com/romaincalvet">
            <i class="fab fa-twitter" ></i>
          </a>
          <a href="https://www.facebook.com/romain.clvet/">
            <i class="fab fa-facebook-f"></i>
          </a>
        </div>
      </div>
    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
      <div class="w-100">
        <h2 class="mb-5">Expériences</h2>

<?php 
$choix = $bdd->query('SELECT * FROM expérience');
while ($data = $choix->fetch()){
?>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">

            <h3 class="mb-0"><?php echo $data['Emploi']; ?></h3>
            <div class="subheading mb-3"><?php echo $data['detail']; ?></div>
          </div>

          <div class="resume-date text-md-right">
            <span class="text-primary"><?php echo $data['duree']; ?></span>
          </div>

        </div>

<?php } ?>
<div > <a href="add.php"> <button  type="button" class="btn btn-outline-primary">Ajouter</button></a></div>
<div> <a href="modifier.php"> <button type="button" class="btn btn-outline-dark">Modifier</button></a></div>

    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
      <div class="w-100">
        <h2 class="mb-5">Education</h2>

<?php 
$exp = $bdd->query('SELECT * FROM education');
while ($data = $exp->fetch()){
?>

        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">

            <h3 class="mb-0"><?php echo $data['Ecole']; ?></h3>
            <div class="subheading mb-3"><?php echo $data['Cursus']; ?></div>
          </div>

          <div class="resume-date text-md-right">
            <span class="text-primary"><?php echo $data['duree']; ?></span>
          </div>

        </div>
        
<?php } ?>
<div > <a href="education.php"> <button  type="button" class="btn btn-outline-primary">Ajouter</button></a></div>
      </div>

    </section>

    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
      <div class="w-100">
        <h2 class="mb-5">Skills</h2>

        <div class="subheading mb-3">Programming Languages &amp; Tools</div>
        <ul class="list-inline dev-icons">
          <li class="list-inline-item">
            <i class="fab fa-html5"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-css3-alt"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-js-square"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-angular"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-react"></i>
          </li>
        </ul>
      </div>
    </section>
    <hr class="m-0">
    

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="interests">
      <div class="w-100">
        <h2 class="mb-5">Intérêts</h2>

<?php
$interet = $bdd->query('SELECT * FROM interet');
while ($data = $interet->fetch()){
?>
        <p class="mb-4"><?php echo $data['loisirs']; ?></p>
<?php } ?>
      </div>
    </section> 
    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="awards">
      <div class="w-100">
        <h2 class="mb-5">Diplômes</h2>

<?php
$diplome = $bdd->query('SELECT * FROM diplome');
while ($data = $diplome->fetch()){
?>

        <ul class="fa-ul mb-0">
          <li>

            <i class="fa-li fa fa-trophy text-warning"></i>

            <p>
            <div class="resume-date text-md-left">
            <h3 class="text-primary"><?php echo $data['Date']; ?></h3>
          </div>
            <?php echo $data['Diplome']; ?>
            <?php echo $data['Diplome']; ?>
            </p>
          </li>
        </ul>
<?php } ?>
      </div>
      
    </section>
    
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/resume.min.js"></script>

</body>

</html>