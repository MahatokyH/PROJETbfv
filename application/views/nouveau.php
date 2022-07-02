<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 d-flex align-items-center">
                    <li class="breadcrumb-item"><a href="index.html" class="link"><i class="mdi mdi-hexagon fs-4"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pack</li>
                </ol>
            </nav>
            <h1 class="mb-0 fw-bold">Nouveau client</h1>
        </div>
        <div class="col-6">
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card border-3">
                <div class="card-body">
                    <form action="NouveauClient" method="POST" class="form-horizontal form-material mx-2">  
                        <div class="form-group">
                            <label class="col-sm-12">Type package</label>
                            <div class="col-sm-12">
                                <select name="pack" class="form-select shadow-none form-control-line">
                                    <option value="">Choix du package</option>
                                    <?php foreach ($packages as $value) { ?>
                                        <option value="<?php echo $value["id"] ?>"><?php echo $value["nom"] ?></option>
                                    <?php }  ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Nom</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="XXXXXXXXXXXXXXXXXXXXXXXXX" name="nom" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Prenom</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="XXXXXXXXXXXXXXXXXXXXXXXXX" name="prenom" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Date de naissance</label>
                            <div class="col-md-12">
                                <input type="date" class="form-control form-control-line" name="ddn">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Date d'ajout</label>
                            <div class="col-md-12">
                                <input type="date" class="form-control form-control-line" name="date">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">N° CIN</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="XXXXXXXXXXXXXXXXXXXXXXXXX" name="cin" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">e-mail</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="XXXXXXXXXXXXXXXXXXXXXXXXX" name="mail" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">N° téléphone</label>
                            <div class="col-md-12">
                                <input type="text" placeholder="XXXXXXXXXXXXXXXXXXXXXXXXX" name="tel" class="form-control form-control-line">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button class="btn btn-success text-white">Ajouter</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>