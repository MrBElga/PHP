<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sword Art Online - Home</title>
   <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
   <style>
      body {
         font-family: Arial, sans-serif;
      }
      .banner {
         background-color: #333;
         background-size: cover;
         background-position: center;
         height: 400px;
         color: white;
         display: flex;
         justify-content: center;
         align-items: center;
         text-align: center;
      }
      .banner h1 {
         font-size: 3.5rem;
         font-weight: bold;
      }
      .info-card {
         transition: transform 0.2s;
      }
      .info-card:hover {
         transform: scale(1.05);
      }
   </style>
</head>
<body>

   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
         <a class="navbar-brand" href="#">Sword Art Online</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
               <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Personagens</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Episódios</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Contato</a>
               </li>
               <li class="nav-item mt-2">
                  <span class="navbar-text">user: <strong><?= $_SESSION['usuario'] ?></strong></span>
               </li>
               <li class="nav-item">
               <a class="nav-link" href="?rota=logout">Logout </a>

               </li>
            </ul>
         </div>
      </div>
   </nav>

   <!-- Banner -->
   <div class="banner">
      <h1>Bem-vindo ao Mundo de Sword Art Online</h1>
   </div>

   <!-- Main Content -->
   <div class="container mt-5">
      <div class="row">
         <div class="col-md-4">
            <div class="card info-card bg-light mb-4">
               <div class="card-body">
                  <h5 class="card-title">Kirito</h5>
                  <p class="card-text">Conheça Kirito, o protagonista de SAO, e sua jornada através dos mundos virtuais.</p>
                  <a href="#" class="btn btn-primary">Saiba mais</a>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card info-card bg-light mb-4">
               <div class="card-body">
                  <h5 class="card-title">Asuna</h5>
                  <p class="card-text">Descubra mais sobre Asuna, a habilidosa espadachim e parceira de Kirito.</p>
                  <a href="#" class="btn btn-primary">Saiba mais</a>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="card info-card bg-light mb-4">
               <div class="card-body">
                  <h5 class="card-title">Mundos Virtuais</h5>
                  <p class="card-text">Explore os diferentes mundos virtuais de SAO, incluindo Aincrad, Alfheim, e Underworld.</p>
                  <a href="#" class="btn btn-primary">Saiba mais</a>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Footer -->
   <footer class="bg-dark text-white text-center py-3 mt-5">
      <p>&copy; 2024 Sword Art Online. Todos os direitos reservados.</p>
   </footer>

   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
