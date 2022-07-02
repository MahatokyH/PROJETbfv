<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 d-flex align-items-center">
                    <li class="breadcrumb-item"><a href="index.html" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tableau de bord</li>
                </ol>
            </nav>
            <h1 class="mb-0 fw-bold">Tableau de bord</h1>
        </div>
    </div>
</div>
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Sales chart -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex align-items-center">
                        <div>
                            <h4 class="card-title">Vente des services</h4>
                            <h6 class="card-subtitle">Par employée</h6>
                        </div>
                        <div class="ms-auto d-flex no-block align-items-center">
                            <form method="get"  class="ms-auto d-flex no-block align-items-center">
                                <select class="form-select form-select-sm" name="mois" aria-label=".form-select-sm example">
                                    <option value="">Choix du mois</option>
                                    <?php $i = 1;
                                    foreach ($mois as $value) { ?>
                                        <option value="<?php echo $i; ?>"><?php echo $value ?></option>
                                        <?php $i += 1; ?>
                                    <?php } ?>
                                </select>
                                <select class="form-select form-select-sm" name="anne" aria-label=".form-select-sm example">
                                    <option value="">Choix de l'anne</option>
                                    <?php $i = 1;
                                    for ($i = $anne - 20; $i <= $anne; $i++) {  ?>
                                        <option value="<?php echo $i; ?>"><?php echo $i ?></option>
                                    <?php } ?>
                                </select>
                                <button class="btn btn-cyan">Valider</button>
                            </form>
                        </div>
                    </div>
                    <div class="amp-pxl mt-4" style="height: 350px;">
                        <div class="chartist-tooltip"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Sales chart -->
</div>