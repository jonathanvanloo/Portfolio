<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

  <?php include'navbar.html'; ?>
<div class="container">
  <div id="demo" class="carousel slide text-center" data-ride="carousel">

    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
      <li data-target="#demo" data-slide-to="3"></li>
      <li data-target="#demo" data-slide-to="4"></li>
      <li data-target="#demo" data-slide-to="5"></li>
    </ul>

    <div class="carousel-inner">
      <div class="carousel-item active ">
        <img class="rounded" src="img/css1.png" alt="css" width="1110" height="600">
      </div>
      <div class="carousel-item">
        <img class="rounded" src="img/db_sql1.png" alt="sql/database" width="1110" height="600">
      </div>
      <div class="carousel-item">
        <img class="rounded" src="img/html1.png" alt="html" width="1110" height="600">
      </div>
      <div class="carousel-item">
        <img class="rounded" src="img/js1.png" alt="de erste javascript" width="1110" height="600">
      </div>
      <div class="carousel-item">
        <img class="rounded" src="img/js2.png" alt="de tweede javascript" width="1110" height="600">
      </div>
      <div class="carousel-item">
        <img class="rounded" src="img/php1.png" alt="php" width="1110" height="600">
      </div>
    </div>
    
      <a class="carousel-control-prev bg-secondary" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next bg-secondary" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
</div>
  <?php include'footer.html'; ?>

</body>
</html>
