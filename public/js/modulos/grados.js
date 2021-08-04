$(function(){

    let edit = false;
    $('#gradoName').trigger('focus');
    obtenerGrados();
    


    /** Funcion para obtener todas las grados */
    function obtenerGrados(){
        $.ajax({
            url : '/grados-all',
            method : 'GET',
        })
        .done(function(response){
            if(response.length > 0){
                let template = '';
                response.forEach((element, index) => {
                    template += `
                    <tr gradoId="${element.grd_id}">
                        <td>${++index}</td>
                        <td>${element.grd_nombre}</td>
                        <td>
                        <i class="bi bi-pencil btn edit-grado text-primary" title="Editar grado"></i>
                        <i class="bi bi-archive btn delete-grado text-primary" title="Eliminar grado"></i>
                        </td>
                    </tr>
                    `;
                    $('#grados').html(template);
                });
            }else{
                $('#grados').html('');
            }
        })
    }

    /** Manejando el evento de eliminar grado */
    $('#tablegrados').on('click', '.delete-grado', function(){
        let elemento = $(this)[0].parentElement.parentElement;
        let id = $(elemento).attr('gradoId');
        $.ajax({
            url : `/grados/${id}`,
            method : 'DELETE',
            headers : {
                'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
            }
        })
        .done(function(response){
            obtenerGrados();
            console.log(response);
                alertify.success('Grado eliminado con éxito')
            

        })
    });


    /** Manejando el evento de editar grado */
    $('#tablegrados').on('click', '.edit-grado', function(){
        let elemento = $(this)[0].parentElement.parentElement;
        let id = $(elemento).attr('gradoId');
        console.log(id);
        $.ajax({
            url : `/grados/${id}`,
            method : 'GET',
            headers : {
                'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
            }
        })
        .done(function(response){
            // console.log(response);
            $('#gradoName').focus();
            $('#gradoName').val(response.grd_nombre);
            $('#gradoId').val(response.grd_id)
            edit = true;
            

        })
    });

    /** Manejar el evento de formulario grado */
    $('#formGrados').submit(function(e){
        e.preventDefault();
        let gradoName = $('#gradoName').val();
        console.log(gradoName);
        let url;
        let method;
        if(!edit){
            url = '/grados';
            method = 'POST';
        }else{
            let gradoId = $('#gradoId').val();
            url = `/grados/${gradoId}`;
            method = 'PUT';

        }
        console.log(url);
        $.ajax({
            url,
            method,
            data : {gradoName},
            headers : {
                'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
            }
        })
        .done(function(response){
            console.log(response)
            if(response == 1){
                $('#gradoName').val('');
                let message = edit ? 'Grado actualizado con éxito' : 'Grado agregado con éxito';
                alertify.success(message)
                $('#gradoName').focus();
                obtenerGrados();
                edit = false;
            }
        }).fail(function(response){
            console.log(response);
        })
    })
})