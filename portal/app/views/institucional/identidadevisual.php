<?php 
  include __DIR__ . '/../partials/header.php'; 
  include __DIR__ . '/../partials/menu.php'; 
?>

<!-- Page Header -->
<section id="main-banner-page" class="position-relative page-header section-nav-smooth parallax blog-detail-header">
    <div class="overlay overlay-dark opacity-8 z-index-1"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="page-titles whitecolor text-center padding_top padding_bottom">
                    <h2 class="font-bold">Identidade Visual</h2>
                    <h3 class="font-light pt-2">A marca da Fundação e seus elementos gráficos oficiais</h3>
                </div>
            </div>
        </div>
        <div class="gradient-bg title-wrap">
            <div class="row">
                <div class="col-lg-12 whitecolor">
                    <h3 class="float-start">Identidade Visual</h3>
                    <ul class="breadcrumb top10 bottom10 float-end">
                        <li class="breadcrumb-item"><a href="<?= BASE_URL ?>">Home</a></li>
                        <li class="breadcrumb-item">Identidade Visual</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Conteúdo -->
<section class="padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <div class="row g-4 justify-content-center my-4">
                    <div class="col-md-6">
                        <div class="h-100 p-4">
                            <img src="<?= BASE_URL ?>assets/pages/download/Logo_horizontal_PaqTcPB.png" alt="Logomarca horizontal da Fundação PaqTcPB" class="img-fluid mb-3" style="max-width: 400px;">
                            <h5>Identidade visual da Fundação PaqTcPB</h5>
                            <p>Consulte o manual e baixe a logomarca nos formatos disponíveis.</p>
                            <a class="btn btn-outline-primary me-2 mb-2" href="<?= BASE_URL ?>assets/pages/download/Manual_Identidade_Visual_PaqTcPB.pdf" target="_blank" rel="noopener noreferrer">Manual de identidade visual (PDF)</a>
                            <a class="btn btn-outline-secondary me-2 mb-2" href="<?= BASE_URL ?>assets/pages/download/Logo_horizontal_PaqTcPB.png" download>Logo horizontal (PNG)</a>
                            <a class="btn btn-outline-secondary me-2 mb-2" href="<?= BASE_URL ?>assets/pages/download/Logo_horizontal_PaqTcPB.pdf" target="_blank" rel="noopener noreferrer">Logo horizontal (PDF)</a>
                            <a class="btn btn-outline-secondary mb-2" href="<?= BASE_URL ?>assets/pages/download/Logo_PaqTcPB_CorelDRAW.cdr" download>Logo (CDR)</a>
                        </div>
                    </div>
                </div>

                <p class="mt-4">Os arquivos também estão disponíveis na pasta compartilhada:</p>
                <a class="btn btn-primary" href="https://drive.google.com/drive/folders/17ngE4mzJ9UbgaTxI4WY_4i_HZ0so6sOg?usp=sharing" target="_blank" rel="noopener noreferrer">Acessar manual e logomarcas no Google Drive</a>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../partials/footer.php'; ?>
