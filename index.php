<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

    <link href="./assets/vendor/bootstrap5/css/bootstrap.min.css" rel="stylesheet">
    <script src="./assets/vendor/bootstrap5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">

    <script src="./assets/js/jquery-3.2.1.min.js"></script>
    <script src="./assets/js/toastr/scripts/toastr.min.js"></script>
    <link href="./assets/js/toastr/content/toastr.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>

<body>

    <?php include("./modals/formulario.php"); ?>

    <div class="main-content" id="panel">
        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home text-blue"></i></a></li>
                                    <li class="breadcrumb-item text-blue active" aria-current="page">Contacto</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header d-flex">
                            <h3 class="mb-0">Formulario</h3>
                            <button type="button" class="btn btn-warning btn-sm ml-auto" data-bs-toggle="modal" data-bs-target="#nuevoCliente">CONTACTAR <i class="fas fa-plus"></i></button>
                        </div>

                    </div>
                </div>
            </div>


        </div>

        <script src="./assets/js/script.js"></script>
</body>

</html>