
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="src/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    
    <title>STORE</title>
</head>
<div class="header pt-5">
  <header class="container">
          <div>
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <a href="/index.php" class="col-12 col-md-6 mb-4 mb-md-0"><img src="images/treinaweb-logo@2x.webp" alt="Logo TreinaWeb" width="200px" class="img-fluid d-block m-auto ms-md-0"></a>
                <div class="col-12 col-md-6 col-lg-3">
                    <form class="search-area rounded-3 p-3 d-flex flex-nowrap">
                        <i class="bi bi-search me-2"></i>
                        <input  placeholder="Pesquisar Produtos..." aria-label="search">
                    </form>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg mt-2 navbar-light pb-3 pb-lg-0">
            <div class="container ps-0">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-between fw-bold" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link px-0 me-3 ms-3 ms-md-0" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link px-0 mx-3" href="loja.php">Loja</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link px-0 mx-3" href="produto-detalhe.php">Detalhes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link px-0 mx-3" href="carrinho.php">Carrinho</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link px-0 mx-3" href="recebido.php">Recebido</a>
                  </li>
                </ul>
              </div>
              <div class="d-flex align-items-center">
                <i class="bi bi-currency-dollar me-2">0,00</i>
                <p class="my-0 mx-2"> 0 itens</p>
                <a href="../../carrinho.php" class="text-dark"><i class="bi bi-cart4"></i></a>
              </div>
            </div>
          </nav>
    </header>
</div>

    <body>