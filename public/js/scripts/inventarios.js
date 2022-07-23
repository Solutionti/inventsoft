$("#guardar_productos").on("click", function() {
    var formdata = new FormData();
    var url1 = baseurl + "clientes/crearproductos",
    categoria_p = $("#categoria_p").val(),
    nombre_p = $("#nombre_p").val(),
    codigo_p = $("#codigo_p").val(),
    codigo_barras_p = $("#codigo_barras_p").val(),
    medida_p = $("#medida_p").val(),
    cantidad_p = $("#cantidad_p").val(),
    precio_p = $("#precio_p").val(),
    precio_proveedor = $("#precio_proveedor").val(),
    moneda_p = $("#moneda_p").val(),
    descripcion_p = $("#descripcion_p").val();
    
    formdata.append("categoria", categoria_p);
    formdata.append("nombre", nombre_p);
    formdata.append("codigo", codigo_p);
    formdata.append("codigo_barras", codigo_barras_p);
    formdata.append("medida", medida_p);
    formdata.append("cantidad", cantidad_p);
    formdata.append("precio", precio_p);
    formdata.append("precio_proveedor", precio_proveedor);
    formdata.append("moneda", moneda_p);
    formdata.append("descripcion", descripcion_p);

    $.ajax({
        url: url1,
        method: "POST",
        data: formdata,
        processData: false,
        contentType: false,
        success: function () {
          $("body").overhang({
            type: "success",
            message: "El producto se  ha creado correctamente"
          });
          setTimeout(reloadPage, 2000); 
        },
        error: function () {

        }
    });
});

$("#opciones-inventario").on("change", function () {

    var opciones = $("#opciones-inventario").val();

    if(opciones == 1) {
        $(".movimientos-kardex").attr("hidden", false);
        $(".consulta-inventario").attr("hidden", true);
    }
    else if (opciones == 2) {
        $(".movimientos-kardex").attr("hidden", true);
        $(".consulta-inventario").attr("hidden", false);
    }
    else {
        $(".movimientos-kardex").attr("hidden", true);
        $(".consulta-inventario").attr("hidden", true);
    }
});

//ENTRADA DE INVENTARIO
$("#producto_e").on("change", function() {
    var id = $("#producto_e").val(), 
    url = baseurl + "clientes/traerstock/" + id;

    $.ajax({
        url: url,
        method: "GET",
        success: function (data) {
            data = JSON.parse(data);
            console.log(data);
            $("#stock_e").val(data.stock);
        }
    })
})

$("#guardar_e").on("click", function () {
  var url = baseurl + "clientes/crearentrada",
  cantidad = $("#cantidad_e").val(),
  stock = $("#stock_e").val(),
  total = parseInt(cantidad) + parseInt(stock),
  producto = $("#producto_e").val(),
  seccion = $("#seccion_e").val(),
  motivo = $("#motivo_e").val(),
  comentarios = $("#comentarios_e").val();

  $.ajax({
    url: url,
    method: "POST",
    data: {
      cantidad: cantidad,
      total: total,
      producto: producto,
      seccion: seccion,
      motivo: motivo,
      comentarios: comentarios
    },
    success: function () {
      $("body").overhang({
        type: "success",
        message: "se ha agregado entrada correctamente"
      });
      setTimeout(reloadPage, 3000);
    },
    error: function () {
      $("body").overhang({
        type: "error",
        message: "Alerta ! Tenemos un problema al conectar con la base de datos verifica tu red.",
      });
    }
  })
})
//SALIDA DE INVENTARIO
$("#producto_s").on("change", function() {
    var id = $("#producto_s").val(), 
    url = baseurl + "clientes/traerstock/" + id;

    $.ajax({
        url: url,
        method: "GET",
        success: function (data) {
            data = JSON.parse(data);
            console.log(data);
            $("#stock_s").val(data.stock);
        }
    })
})

$("#guardar_s").on("click", function () {
    var url = baseurl + "clientes/crearsalida",
        cantidad = $("#cantidad_s").val(),
        stock = $("#stock_s").val(),
        total = parseInt(stock) - parseInt(cantidad),
        producto = $("#producto_s").val(),
        seccion = $("#seccion_s").val(),
        motivo = $("#motivo_s").val(),
        comentarios = $("#comentarios_s").val();
        if(total < 0){
            $("body").overhang({
                type: "confirm",
                primary: "#40D47E",
                accent: "#27AE60",
                yesColor: "#3498DB",
                message: "Esta apunto de dejar un inventario negativo desea continuar?",
                overlay: true,
                callback: function (value) {
                    if(value == false){
                        
                    }
                    else {
                        $.ajax({
                            url: url,
                            method: "POST",
                            data: {
                                cantidad: cantidad,
                                total: total,
                                producto: producto,
                                seccion: seccion,
                                motivo: motivo,
                                comentarios: comentarios
                            },
                            success: function () {
                                $("body").overhang({
                                    type: "success",
                                    message: "se ha agregado salida correctamente"
                              });
                              setTimeout(reloadPage, 3000);
                            },
                            error: function () {
                                $("body").overhang({
                                    type: "error",
                                    message: "Alerta ! Tenemos un problema al conectar con la base de datos verifica tu red.",
                                });
                            }
                        })
                    } 
                }
              });
        }
        else {
            $.ajax({
                url: url,
                method: "POST",
                data: {
                    cantidad: cantidad,
                    total: total,
                    producto: producto,
                    seccion: seccion,
                    motivo: motivo,
                    comentarios: comentarios
                },
                success: function () {
                    $("body").overhang({
                        type: "success",
                        message: "se ha agregado salida correctamente"
                  });
                  setTimeout(reloadPage, 3000);
                },
                error: function () {
                    $("body").overhang({
                        type: "error",
                        message: "Alerta ! Tenemos un problema al conectar con la base de datos verifica tu red.",
                    });
                }
            })
        }     
})

function reloadPage() {
    location.reload();
}