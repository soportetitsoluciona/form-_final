$('#buscar').click(function() {
    dni = $('#documento').val();
    $.ajax({
        url: 'apiReniec.php',
        type: 'post',
        data: 'dni=' + dni,
        dataType: 'json',
        success: function(r) {
            if (r.numeroDocumento == dni) {
                $('#apellidoPaterno').val(r.apellidoPaterno);
                $('#apellidoMaterno').val(r.apellidoMaterno);
                $('#nombre').val(r.nombres);
            } else {
                alert(r.error);
            }
            console.log(r)
        }
    });
});