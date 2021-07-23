$(function(){
    let edit = false;
    $('#materiaName').focus();
    obtenerMaterias();

    /** Funcion para obtener todas las materias */
    function obtenerMaterias(){
        $.ajax({
            url : '/materias-all',
            method : 'GET',
        })
        .done(function(response){
            if(response.length > 0){
                let template = '';
                response.forEach((element, index) => {
                    template += `
                    <tr materiaId="${element.mat_id}">
                        <td>${++index}</td>
                        <td>${element.mat_nombre}</td>
                        <td>
                        <button class="btn btn-success edit-materia">Editar</button>
                        <button class="btn btn-danger delete-materia">Eliminar</button>
                        </td>
                    </tr>
                    `;
                    $('#materias').html(template);
                });
            }else{
                $('#materias').html('');
            }
        })
    }

    /** Manejando el evento de eliminar materia */
    $('#tableMaterias').on('click', '.delete-materia', function(){
        let elemento = $(this)[0].parentElement.parentElement;
        let id = $(elemento).attr('materiaId');
        $.ajax({
            url : `/materias/${id}`,
            method : 'DELETE',
            headers : {
                'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
            }
        })
        .done(function(response){
            obtenerMaterias();
            console.log(response);
                alertify.success('Materia eliminada con éxito')
            

        })
    });


    /** Manejando el evento de editar materia */
    $('#tableMaterias').on('click', '.edit-materia', function(){
        let elemento = $(this)[0].parentElement.parentElement;
        let id = $(elemento).attr('materiaId');
        $.ajax({
            url : `/materias/${id}`,
            method : 'GET',
            headers : {
                'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
            }
        })
        .done(function(response){
            // console.log(response);
            $('#materiaName').focus();
            $('#materiaName').val(response.mat_nombre);
            $('#materiaId').val(response.mat_id)
            edit = true;
            

        })
    });

    /** Manejar el evento de formulario materia */
    $('#formMaterias').submit(function(e){
        e.preventDefault();
        let materiaName = $('#materiaName').val();
        let url;
        let method;
        if(!edit){
            url = '/materias';
            method = 'POST';
        }else{
            let materiaId = $('#materiaId').val();
            url = `/materias/${materiaId}`;
            method = 'PUT';

        }
        console.log(url);
        $.ajax({
            url,
            method,
            data : {materiaName},
            headers : {
                'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
            }
        })
        .done(function(response){
            console.log(response)
            if(response == 1){
                $('#materiaName').val('');
                let message = edit ? 'Materia actualizada con éxito' : 'Materia agregada con éxito';
                alertify.success(message)
                $('#materiaName').focus();
                obtenerMaterias();
                edit = false;
            }
        }).fail(function(response){
            console.log(response);
        })
    })
})