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
      <span class="d-block d-lg-none">Clarence Taylor</span>
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
          <a class="nav-link js-scroll-trigger" href="index.php">BACK</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid p-0">

  <section class="add-experience-section p-3 p-lg-5 d-flex justify-content-left" id="">
        <div class="w-100">
          <h2 class="mb-5">Modifier</h2>

            <form method="POST" action="add.php">
              <div class="form-group mx-sm-3 mb-3">
                <label for="Emploi">Emploi :</label>
                <input class="form-control form-control-sm" name="Emploi" id="Emploi" type="text" style="width:500px">
              </div>

              <div class="form-group mx-sm-3 mb-3">
                <label for="detail">Detail :</label>
                <input class="form-control form-control-sm" name="detail" id="detail" type="text" style="width:500px">
              </div>

              <div class="form-group mx-sm-3 mb-3">
                <label for="duree">Durée :</label>
                <input class="form-control form-control-sm" name="duree" id="duree" type="text" style="width:500px">
              </div>

              <div><button name="button"type="button" class="btn btn-outline-dark">Modifier</button></div>
          </form>
      </div>
    </section>

  <?php
    $pdo = new PDO('mysql:host=localhost;dbname=monsite;charset=utf8', 'root', '');

    if (isset($_POST['button'])){

      $Emploi=$_POST['Emploi'];
      $detail=$_POST['detail'];
      $duree=$_POST['duree'];
      $id_exp = $_POST['id_exp'];

      if ($_POST['btn'] == 'MODIFIER'){
        $insert = $pdo->query("UPDATE expérience SET Emploi='$Emploi', detail='$detail', duree='$duree' WHERE id_exp=$id_exp");
      }
      else{
        $remove = $pdo->query("DELETE FROM expérience WHERE id_exp=$id_exp");
      }
    }
    ?>

</body>