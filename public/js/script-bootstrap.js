$(function () 
{
	$('[data-toggle="tooltip"]').tooltip()
});

$(document).on('shown.bs.modal', '.visitCedula', function() 
{
	$(this).find('[autofocus]').focus();
});

$(document).ready(function(){
    $('#floor_id').on('change', function(){
        var floor_id = $(this).val();

        if ($.trim(floor_id) != '') {
            $.get('provisionalPass', {floor_id: floor_id}, function (provisional_passes) {
                $('#provisional_pass_id').empty();
                $('#provisional_pass_id').append("<option value=''>Seleccione:</option>");
                $.each(provisional_passes, function(index, value) {
                    $('#provisional_pass_id').append("<option value='"+ index +"'>"+ value +"</option>");
                })
            });

        }
    });
});

function confirmLogout()
{
  Swal.fire({
      text: "¿Desea salir del sistema y cerrar la sesión?",
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#61A60E',
      cancelButtonColor: '#034987',
      confirmButtonText: 'Si',
      cancelButtonText: 'No'
  }).then((result) => {
        if (result.value) {
        // window.location='/';
         document.getElementById('logout-form').submit();
        }  
  })
}

function confirmDelete()
{
 e.preventDefault();
    Swal.fire({
        title: '¡Eliminarsesese!',
        text: "¿Esta seguro de eliminar todas las asignaciones?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#61A60E',
        cancelButtonColor: '#034987',
        confirmButtonText: 'Si',
        cancelButtonText: 'No'
    }).then((result) => {
        if (result.isConfirmed) {
        this.submit();
    }
    })
}

$('.confirm-delete').submit(function(e){
    e.preventDefault();
    Swal.fire({
        title: '¡Eliminar!',
        text: "¿Esta seguro de eliminar la asignación?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#61A60E',
        cancelButtonColor: '#034987',
        confirmButtonText: 'Si',
        cancelButtonText: 'No'
    }).then((result) => {
        if (result.isConfirmed) {
        this.submit();
    }
    })
});

$('.confirm-delete-everybody').submit(function(e){
    e.preventDefault();
    Swal.fire({
        title: '¡Eliminar!',
        text: "¿Esta seguro de eliminar todas las asignaciones?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#61A60E',
        cancelButtonColor: '#034987',
        confirmButtonText: 'Si',
        cancelButtonText: 'No'
    }).then((result) => {
        if (result.isConfirmed) {
        this.submit();
    }
    })
});