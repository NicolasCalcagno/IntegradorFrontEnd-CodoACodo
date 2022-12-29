// Configurar tabla de usuarios
$(document).ready(function () {
    $('#tablaUsuarios').DataTable();
});
$('#tablaUsuarios').DataTable( {
    ordering: true,
    language: {
        processing:     "Buscando...",
        search: "Buscar&nbsp;:",
        lengthMenu: "Mostrar _MENU_ registros",
        info: "Mostrando _END_ de _TOTAL_ registros",
        infoEmpty:      "Mostrando de 0 a 0 de 0 registros",
        infoFiltered:   "(filtrados de _MAX_ registros totales)",
        zeroRecords: "No se encontraron registros coincidentes",
        paginate: {
            first:      "Primera",
            previous:   "Anterior",
            next:       "Siguiente",
            last:       "Última"
        },
        emptyTable: "No existen registros",
        loadingRecords: "Carga en curso...",
    }
} );

// Eliminar usuario
function EliminarUsuario(id) {
    Swal.fire({
        title: '¿Esta seguro que desea borrar al usuario?',
        icon: 'warning',
        iconColor: '#DD3535',
        showDenyButton: false,
        showCancelButton: true,
        confirmButtonText: 'Eliminar',
        confirmButtonColor: '#DD3535',
        cancelButtonText: 'Cancelar',
      }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = "backend/eliminar.php?id="+id;
        }
      })
}

// Modificar usuario
function ModificarUsuario(id, nombre, apellido, correo, clave) {
    Swal.fire({
        title: 'Modificar usuario',
        html: `
        <span class="d-block mt-3">ID</span>
        <input id="id" class="swal2-input mt-0 text-center text-bg-warning" value="` + id + `" disabled>
        <span class="d-block mt-3">Nombre</span>
        <input type="text" id="nombreModificado" name="nombreModificado" class="swal2-input  mt-0" value="`+ nombre + `">
        <span class="d-block mt-3">Apellido</span>
        <input type="text" id="apellidoModificado" name="apellidoModificado" class="swal2-input mt-0" value="`+ apellido + `">
        <span class="d-block mt-3">Correo</span>
        <input type="email" id="correoModificado" name="correoModificado" class="swal2-input mt-0" value="`+ correo + `">
        <span class="d-block mt-3">Clave</span>
        <input type="text" id="claveModificada" name="claveModificada" class="swal2-input mt-0 mb-2" value="`+ clave + `">
        `,
        showDenyButton: false,
        showCancelButton: true,
        confirmButtonText: 'Modificar',
        confirmButtonColor: '#FFB92D',
        cancelButtonText: 'Cancelar',
    }).then((result) => {
        if (result.isConfirmed) {
            var data = {};
            data.id = document.getElementById("id").value;
            data.nombre= document.getElementById("nombreModificado").value;
            data.apellido = document.getElementById("apellidoModificado").value;
            data.correo = document.getElementById("correoModificado").value;
            data.clave = document.getElementById("claveModificada").value;

            $.ajax({
                type: "POST",
                url: "backend/modificar.php",
                data: data,
                success: function(){
                    window.location.reload();
                    },
                    error: function(xhr){
                    console.error(xhr);
                    }
            });
        }
    });
}
