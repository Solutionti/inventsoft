$("#guardar_productos").on("click", function() {
    var url1 = baseurl + "",
    categoria_p = $("#categoria_p").val(),
    nombre_p = $("#nombre_p").val(),
    codigo_p = $("#codigo_p").val(),
    codigo_barras_p = $("#codigo_barras_p").val(),
    medida_p = $("#medida_p").val(),
    cantidad_p = $("#cantidad_p").val(),
    precio_p = $("#precio_p").val(),
    moneda_p = $("#moneda_p").val(),
    descripcion_p = $("#descripcion_p").val();
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
})