<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 d-flex align-items-center">
                    <li class="breadcrumb-item"><a href="index.html" class="link"><i class="mdi mdi-hexagon fs-4"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pack</li>
                </ol>
            </nav>
            <h1 class="mb-0 fw-bold">Historique</h1>
        </div>
        <div class="col-6">
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prenom</th>
                                    <th scope="col">Pack</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1; 
                                foreach ($historique as $value) { ?>
                                    <tr>
                                        <th scope="row"><?php echo $i; ?></th>
                                        <td><?php echo $value["nom"]; ?></td>
                                        <td><?php echo $value["prenom"]; ?></td>
                                        <td><?php echo $value["pack"]; ?></td>
                                        <td><a href="Delete?id=<?php echo $value["id"]; ?>" class="btn btn-danger mdi mdi-delete btn-sm"></a>
                                            <!-- <a href="UpdateClient?id=<?php echo $value["id"]; ?>" class="btn btn-warning mdi mdi-pencil btn-sm"></a> -->
                                        </td>
                                        <?php  $i+=1; ?>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>