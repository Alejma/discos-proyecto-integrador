<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome for icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <style>
    .navbar {
      background-color: #59ab6e;
    }

    .sidebar {
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      padding-top: 20px;
      background-color: #59ab6e;
    }

   

    .nav-link {
      color: #fff;
    }

    .nav-link:hover {
      color: #ddd;
    }

    .nav-item {
      margin-bottom: 10px;
    }

    .main-content {
      margin-left: 220px; /* Adjust this value based on the width of your sidebar */
      padding: 20px;
    }

    .jumbotron {
      background-color: #B2BABB;
      text-align: center;
    }

    .card {
      margin: 10px;
      background-color: #59ab6e;
      color: #fff;
      border: none;
    }

    .card .card-body {
      padding: 30px;
    }

    .card .card-body i {
      font-size: 3rem;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>


  <main role="main" class="main-content">
    <div class="jumbotron">
      <h1 class="display-4 text-center text-light">Bienvenidos</h1>
      <p class="lead text-center text-light">al panel principal del sistema de informacion web de venta de discos de musica fisicos.</p>
      <hr class="my-5" style="background-color: #59ab6e;">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <i class="fas fa-users"></i>
                <h5 class="card-title">Usuarios</h5>
                <a href="<?php echo getUrl('Usuarios', 'Usuarios', 'consult'); ?>" class="btn btn-light">Ir</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <i class="fas fa-list"></i>
                <h5 class="card-title">Ofertas</h5>
                <a href="<?php echo getUrl('Oferta', 'Oferta', 'consult'); ?>" class="btn btn-light">Ir</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <i class="fas fa-book"></i>
                <h5 class="card-title">PQRSF</h5>
                <a href="<?php echo getUrl('Pqrs', 'Pqrs', 'consult'); ?>" class="btn btn-light">Ir</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <i class="fas fa-info-circle"></i>
                <h5 class="card-title">Estado</h5>
                <a href="<?php echo getUrl('Estado', 'Estado', 'consult'); ?>" class="btn btn-light">Ir</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Bootstrap and necessary JavaScript libraries -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
</body>
</html>
