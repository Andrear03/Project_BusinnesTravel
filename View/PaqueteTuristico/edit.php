<!DOCTYPE html>
<html lang="en">
<?php    session_start();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard</title>
    <link href="View/static/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="View/static/css/sb-admin-2.min.css" rel="stylesheet">
    <script type="text/javascript">
        function validarArchivo() {
            var archivoInput = document.getElementById('archivo');
            var archivo = archivoInput.files[0];
            var extensionesPermitidas = /(\.jpg|\.png|\.jpeg)$/i;

            if (!extensionesPermitidas.exec(archivo.name)) {
                alert('Error: Este tipo de archivo no está permitido. Por favor, selecciona una imagen con una de las siguientes extensiones: .jpg, .png, .jpeg.');
                archivoInput.value = '';
                return false;
            }
        }
    </script>
</head>

<body id="page-top">
    <div id="wrapper">
        <?php
        include 'View/header/lateralDashboard.php';
        ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php
                include 'View/header/headerDashboard.php';
                ?>
                <div class="container-fluid">
                    <h1 class="h3 mb-2 text-gray-800">Gestión de Paquetes Turísticos</h1>
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-7 w-100">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Editar paquete turístico</h1>
                                        </div>
                                        <form class="user" method="POST" action="MainController.php?action=paquete-edit&id=<?php echo $paqueteTuristico->getId(); ?>" enctype="multipart/form-data"  onsubmit="return validarArchivo();">
                                            <div class="form-group row">
                                                <label for="nombre" class="col-sm-3 col-form-label">Nombre:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control form-control-user" name="nombre" style="font-size: 18px;" value="<?php echo $paqueteTuristico->getNombre(); ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="direccion" class="col-sm-3 col-form-label">Dirección:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control form-control-user" style="font-size: 18px;" name="direccion" value="<?php echo $paqueteTuristico->getDireccion(); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="duracion" class="col-sm-3 col-form-label">Duración:</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control form-control-user" style="font-size: 18px;" name="duracion" value="<?php echo $paqueteTuristico->getDuracion(); ?>" min="0">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="Precio" class="col-sm-3 col-form-label">Precio Total:</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control form-control-user" min="0" style="font-size: 18px;" name="preciototal" value="<?php echo $paqueteTuristico->getPrecioTotal(); ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="Imagen" class="col-sm-3 col-form-label">Imagen:</label>
                                                <div class="col-sm-9">
                                                    <input type="file" class="form-control" id="archivo" name="imagen" >
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="Imagen" class="col-sm-3 col-form-label">Imagen Anterior:</label>
                                                <img src="View/img_paquete/<?php echo $paqueteTuristico->getImagen(); ?>" height="200px" width="70%" alt="img Anterior">
                                                <input type="hidden" name="imagenanterior" value="<?php echo $paqueteTuristico->getImagen(); ?>">
                                            </div>


                                            <div class="form-group row">
                                                <div class="col-sm-9 offset-sm-3">
                                                    <input type="submit" value="Actualizar" style="font-size: 18px;" class="btn btn-primary">
                                                    <a href="MainController.php?action=paquete-index" class="btn btn-secondary">Retroceder</a>
                                                </div>
                                            </div>
                                            
                                            
                                            <hr>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="View/static/vendor/jquery/jquery.min.js"></script>
    <script src="View/static/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="View/static/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="View/static/js/sb-admin-2.min.js"></script>

</body>

</html>
