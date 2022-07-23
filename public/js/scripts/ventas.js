var venta_consolidada = new Array();

$("#codigo_barras").on("blur", function() {
  var url1 = baseurl + "clientes/getproductoventa", 
  codigo_barras = $("#codigo_barras").val();
  $.ajax({
    url: url1,
    method: "POST",
    data: {
      codigo_barras: codigo_barras
    },
    success: function(data) {
      if(data === "error"){
        $("body").overhang({
          type: "error",
          message: "Producto no existe por favor ingrese un codigo"
        });
      }
      else {
        data = JSON.parse(data);
        $("#producto").val(data.nombre);
        $("#precio").val(data.precio);
        //console.log(data);
        document.getElementById("tabla-ventas").insertRow(-1).innerHTML = '<tr><td>'+data.nombre+'</td><td>'+data.codigo_barras+'</td><td>1</td><td>$'+data.precio+'</td></tr>';
        $("#codigo_barras").val("");
        $("#codigo_barras").focus();
      }
    }
  });
})


    

