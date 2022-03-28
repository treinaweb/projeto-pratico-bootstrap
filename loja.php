<?php require_once('includes/header.php'); ?>

<main>
    <div class="container mb-5">
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php"><i class="bi bi-house-door text-primary me-2"></i>Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Loja</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="d-flex align-items-center gap-3 flex-wrap">
                    <div class="ordenacao">
                        <select class="form-select border-0" aria-label="Default select example">
                            <option selected>Ordenar</option>
                            <option value="1">exemplo</option>
                            <option value="2">exemplo</option>
                            <option value="3">exemplo</option>
                        </select>
                    </div>
                    <p class="text-muted text-nowrap mb-0"> Mostar 1-4 de 30 resultados</p>
                    <nav aria-label="Page navigation">
                        <ul class="pagination fw-bold ps-0 ps-lg-4 ps-xl-0 mb-0 mt-5 mt-xl-0">
                            <li class="page-item mx-2"><a class="bg-primary text-white border-0 page-link" href="#">1</a></li>
                            <li class="page-item mx-2"><a class="border-0 page-link" href="#">2</a></li>
                            <li class="page-item mx-2 d-none d-sm-inline-block"><a class="border-0 page-link" href="#">3</a></li>
                            <li class="page-item mx-2 d-none d-sm-inline-block"><a class="border-0 page-link" href="#">4</a></li>
                            <li class="page-item mx-2"><a class="border-0 page-link" href="#">...</a></li>
                            <li class="page-item mx-2 d-none d-sm-inline-block"><a class="border-0 page-link" href="#">6</a></li>
                            <li class="page-item mx-2"><a class="border-0 page-link" href="#">7</a></li>
                            <li class="page-item mx-2"><a class="border-0 page-link" href="#">8</a></li>
                            <li class="page-item mx-2"><a class="border-0 page-link" href="#"><i class="bi bi-caret-right-fill"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="order-md-1 col-12 col-md-3 d-flex flex-column filter-range ms-md-4 mb-5 mb-md-3 filtro-categoria order-2 order-md-0">
                    <label for="priceFilter" class="form-label fw-bold">Filtrar por preço</label>
                    <input type="range" class="mt-2 " id="priceFilter" min="0" max="10000" step="1">
                    <p class="mb-4 mt-2 text-muted fs-6">Preço: <i class="bi bi-currency-dollar me-2"></i>20 -  <i class="bi bi-currency-dollar me-2"></i>1399</p>
                    <div class="d-flex flex-column gap-2 mt-3">
                        <h4 class="fw-bold fs-6">Categoria</h4>
                        <a href="#" class="text-dark">Apple</a>
                        <a href="#" class="text-dark">Clothing</a>
                        <a href="#" class="text-dark ms-2">Acessórios</a>
                        <a href="#" class="text-dark ms-2">Hoodies</a>
                        <a href="#" class="text-dark ms-2">Tshirts</a>
                        <a href="#" class="text-dark">Samsung</a>
                    </div>
                
                </div>
                <div class="col-md-8 col-12">
                    <div class="row row-cols-md-2 row-cols-1 gx-5">
                    <?php for ($i = 0; $i < 4; $i++) {
                        require('includes/components/produto-item.php');
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container mb-5 pb-md-5 mt-3">
        <div class="row">
            <div class="col-lg-8">
                <div class="d-flex align-items-center justify-content-around flex-wrap">
                    <div class="ordenacao">
                        <select class="form-select border-0" aria-label="Default select example">
                            <option selected>Ordenar</option>
                            <option value="1">exemplo</option>
                            <option value="2">exemplo</option>
                            <option value="3">exemplo</option>
                        </select>
                    </div>
                    <p class="text-muted text-nowrap mb-0"> Mostar 1-4 de 30 resultados</p>
                    <nav aria-label="Page navigation">
                        <ul class="pagination fw-bold ps-0 ps-lg-4 ps-xl-0 mb-0 mt-5 mt-xl-0">
                            <li class="page-item mx-2"><a class="bg-primary text-white border-0 page-link" href="#">1</a></li>
                            <li class="page-item mx-2"><a class="border-0 page-link" href="#">2</a></li>
                            <li class="page-item mx-2 d-none d-sm-inline-block"><a class="border-0 page-link" href="#">3</a></li>
                            <li class="page-item mx-2 d-none d-sm-inline-block"><a class="border-0 page-link" href="#">4</a></li>
                            <li class="page-item mx-2"><a class="border-0 page-link" href="#">...</a></li>
                            <li class="page-item mx-2 d-none d-sm-inline-block"><a class="border-0 page-link" href="#">6</a></li>
                            <li class="page-item mx-2"><a class="border-0 page-link" href="#">7</a></li>
                            <li class="page-item mx-2"><a class="border-0 page-link" href="#">8</a></li>
                            <li class="page-item mx-2"><a class="border-0 page-link" href="#"><i class="bi bi-caret-right-fill"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>




</main>





<?php require_once('includes/footer.php'); ?>