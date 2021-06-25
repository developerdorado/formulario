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

<script>

$( document ).ready(function() {

        fetch("http://localhost/form/country_api.php", {
            "headers": {
                "accept": "application/json, text/javascript, */*; q=0.01",
            },
            "method": "GET"
        })
        .then(response => response.json())
        .then(data => {

            var countries = document.getElementById("country");

                for(let i = 0; i <  organizar(data).length; i++){

                    //var dinamical = `<option value="${organizar(data)[i][0]}">${organizar(data)[i][1]}</option>`;
                    var dinamical = `<option value="${organizar(data)[i][1]}">${organizar(data)[i][1]}</option>`;

                    countries.insertAdjacentHTML("beforeend", dinamical );
                }

        });
});
        function organizar(obj)
        {
        	var sortable=[];
        	for(var key in obj)
        		if(obj.hasOwnProperty(key))
        			sortable.push([key, obj[key]]);
        	sortable.sort(function(a, b)
        	{
        		var x=a[1].toLowerCase(),
        			y=b[1].toLowerCase();
        		return x<y ? -1 : x>y ? 1 : 0;
        	});
        	return sortable;
        }
    
        $("#registro_cliente").submit(function(event) {
        $('#guardar_datos').attr("disabled", true);
    
        var parametros = $(this).serialize();
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "./server/server.php",
            data: parametros,
            beforeSend: function(objeto) {
            },
            success: function(datos) {
                if ('error' in datos) {
                    console.log(datos.error);
                } else {
                   
                    if (datos.imprimir == "on") {
                        printerOrder(datos.id_orden);
                        document.getElementById("registro_cliente").reset();
                    }else{
						document.getElementById("registro_cliente").reset();
					}
					
                }
                $('#guardar_datos').attr("disabled", false);
            }
        });
        event.preventDefault();
    })
    
                            
</script>
</body>
</html>