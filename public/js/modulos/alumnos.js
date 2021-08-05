$(function(){
    $('#modal-form-alumno').on('hide.bs.modal', function(){
        document.getElementById('formularioAlumno').reset();
    })

    getAlumnos();

    $('#pagination-table-alumnos').on('click', '#pag-siguiente', function(e){
        e.preventDefault();
        let clasesPagSiguiente = document.querySelector('#pag-siguiente').classList;
        let v = clasesPagSiguiente.contains('disabled');
        if(!v){
            let urlNext = document.querySelector('#pag-siguiente a').getAttribute('href');
            getAlumnos(urlNext);
            document.querySelector('#pag-siguiente a').blur();
        }
        
        
    });
    
    $('#pagination-table-alumnos').on('click', '#pag-anterior', function(e){
        e.preventDefault();
        let clasesPagSiguiente = document.querySelector('#pag-anterior').classList;
        let v = clasesPagSiguiente.contains('disabled');
        if(!v){
            let urlPrev = document.querySelector('#pag-anterior a').getAttribute('href');
            getAlumnos(urlPrev);
            document.querySelector('#pag-anterior a').blur();
        }


    });

    const campos = {
        nombre : $('#nombre'),
        codigo : $('#codigo'),
        edad : $('#edad'),
        sexo : $('#sexo'),
        grado : $('#grado'),
        observacion : $('#observacion'),
        labelModalAlumno : $('#alumnoModalLabel')
    }

    let textLabelModalAlumno = 'Agregar alumno';
    campos.labelModalAlumno.text(textLabelModalAlumno);

    $('#btnAddAlumno').on('click', function(e){
        $.ajax({
            url: '/alumnos',
            data: {
                nombre : campos.nombre.val(),
                codigo : campos.codigo.val(),
                edad : campos.edad.val(),
                sexo : campos.sexo.val(),
                grado : campos.grado.val(),
                observacion : campos.observacion.val(),
            },
            method: 'POST',
            headers:{
                'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
            }
        })
        .done(function(response){
            $('#modal-form-alumno').modal('hide');
            alertify.success('Alumno agregado con éxtio')
            getAlumnos();
            console.log(response);
          
    })
        .fail(function(response){
            console.log(response);
        })
    })

    function getAlumnos(url = '/alumnos-all'){
        axios.get(url, {
            responseType : 'json'
        })
        .then(function(res){
            let key = res.data.from;
            let next = res.data.next_page_url;
            let prev = res.data.prev_page_url;
            let alumno = res.data.data;
            let template = '';
            alumno.forEach(alumno => {
                template += `
                <tr>
                    <td>${key++}</td>
                    <td>${alumno.alm_nombre}</td>
                    <td>${alumno.alm_codigo}</td>
                    <td>${alumno.grado.grd_nombre}</td>
                    <td>
                    <i class="bi bi-eye btn ver-alumno text-primary" title="Ver alumno"></i>
                    <i class="bi bi-pencil btn edit-alumno text-primary" title="Editar alumno"></i>
                    <i class="bi bi-archive btn delete-alumno text-primary" title="Eliminar alumno"></i>
                    </td>
                    
                </tr>
                `;
              document.querySelector('#alumnosTable').innerHTML = template;  
            })
            /**
             * Verificando que existan páginas anterior y siguiente y 
             * asignando los links correspondientes
             */
            verifyNextPage(next);
            verifyPrevPage(prev);

        })
        .catch(function(err){
            console.log(err);
        })
    }



    function verifyNextPage(next){
        if(next){
            let pagSiguiente = document.querySelector('#pag-siguiente a');
            pagSiguiente.setAttribute('href', next);
            document.querySelector('#pag-siguiente').classList.remove('disabled')
        }else{
            document.querySelector('#pag-siguiente').classList.add('disabled');
        }
    }

    
    
    function verifyPrevPage(prev){
        if(prev){
            document.querySelector('#pag-anterior').classList.remove('disabled')
            let pagAnterior = document.querySelector('#pag-anterior a');
            pagAnterior.setAttribute('href', prev);
        }else{
            document.querySelector('#pag-anterior').classList.add('disabled');
        }

    }

})