
$( document ).ready(function() {

    fetch("https://developerdorado.com/country/api.php", {
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
               toastr.error(datos.error);
            } else {       
                toastr.success(datos.message);     
                document.getElementById("registro_cliente").reset();
            }
            $('#guardar_datos').attr("disabled", false);
        }
    });
    event.preventDefault();
})
