<?php include 'components/header.php' ?>

<div class="session">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <a href="#">
                    <img src="img/banner1.png" alt="Banner" class="img-fluid rounded w-100 mb-2 mb-lg-0">
                </a>
            </div>
            <div class="col-12 col-lg-4 d-flex align-content-between flex-wrap">
                <a href="#">
                    <img src="img/banner2.png" alt="Banner" class="img-fluid rounded w-100 mb-2">
                </a>
                <a href="#">
                    <img src="img/banner3.png" alt="Banner" class="img-fluid rounded w-100 mb-2 mb-lg-0">
                </a>
            </div>
        </div>
    </div>
</div>

<div class="session p-0">
    <div class="container">
        <div class="row">
            <div class="owl-carousel owl-theme">
                <?php for ($i = 0; $i < 8; $i++) { ?>
                <div class="item">
                    <a href="produto.php">
                        <img src="img/marcas/marca<?php echo $i+1 ?>.png" alt="Marca" class="img-fluid">
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<div class="session">
    <div class="container">
        <div class="row">
            <h1 class="font-30 color-black fw-bolder">Destaques</h1>
            <p class="font-15 color-black mb-0">Produtos mais vendidos do mês</p>
        </div>

        <div class="row mt-5">
            <?php for ($i = 0; $i < 4; $i++) { ?>
                <?php include 'components/product.php' ?>
            <?php } ?>
        </div>
    </div>
</div>

<div class="session pt-0">
    <div class="container">
        <div class="row">
            <h1 class="font-30 color-black fw-bolder">Elétrico</h1>
            <p class="font-15 color-black mb-0">Os melhores materiais e as melhores marcas</p>
        </div>

        <div class="row  mt-5">
            <?php for ($i = 4; $i < 8; $i++) { ?>
                <?php include 'components/product.php' ?>
            <?php } ?>
        </div>
    </div>
</div>

<div class="session pt-0">
    <div class="container">
        <div class="row">
            <h1 class="font-30 color-black fw-bolder">Tintas e Acessórios</h1>
            <p class="font-15 color-black mb-0">Os melhores materiais e as melhores marcas</p>
        </div>

        <div class="row mt-5">
            <?php for ($i = 8; $i < 12; $i++) { ?>
                <?php include 'components/product.php' ?>
            <?php } ?>
        </div>
    </div>
</div>

<div class="session">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <a href="#">
                    <img src="img/banner4.png" alt="Banner" class="img-fluid mb-2 mb-lg-0">
                </a>
            </div>
            <div class="col-lg-6">
                <a href="#">
                    <img src="img/banner5.png" alt="Banner" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
</div>

<?php include 'components/footer.php' ?>