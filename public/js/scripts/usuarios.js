$("#crearusuario").on("click", function () {
    var url1 = baseurl + "clientes/prueba", 
    apellido = $("#apellido").val(),
    nombre = $("#nombre").val(),
    tp_usuario = $("#tp_usuario").val(),
    telefono = $("#telefono").val(),
    correo = $("#correo").val(),
    usuario = $("#usuario").val(),
    password = $("#password").val();

    $.ajax({
        url: url1,
        method: "POST",
        data: {
            apellido: apellido,
            nombre: nombre,
            tp_usuario: tp_usuario,
            telefono: telefono,
            correo: correo,
            usuario: usuario,
            password: password
        },
        success: function () {
            $("body").overhang({
                type: "success",
                message: "Usuario se  ha creado correctamente"
          });
          setTimeout(reloadPage, 2000);
        }
    });
});

function reloadPage() {
    location.reload();
}