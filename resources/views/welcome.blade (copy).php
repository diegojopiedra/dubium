<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="author" content="Diego Piedra">
    <title>Base de datos Dubium</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="modal-title">Modal title</h4>
        </div>
        <div class="modal-body">
            <div id="modal-text">

            </div>
            <div id="modal-forms">
                <form class="row modal-form" id="work-form" style="display:none">
                    <div class="col-xs-12">
                        <input type="text" id="work-name" name="work-name" class="form-control" placeholder="Nombre del trabajo">
                        <input type="text" id="work-signature" name="work-signature" class="form-control" placeholder="Signatura">
                        <select id="work-type" name="work-type" class="form-control">
                          <option selected disabled>Tipo de trabajo</option>
                          <option>Tesis</option>
                          <option>Práctica Dirigida</option>
                      </select>
                      <select id="work-degree" name="work-degree" class="form-control">
                          <option selected disabled>Grado</option>
                          <option>Licenciatura</option>
                          <option>Maestría</option>
                      </select>
                      <select id="work-author" name="work-author" multiple class="form-control">
                          <option disabled>Autores</option>
                          <option>Carlos Rojas</option>
                          <option>Mario Vargas</option>
                          <option>Juan Pérez</option>
                      </select>
                      <select id="work-key-word" name="work-key-word" multiple class="form-control">
                          <option disabled>Palabras clave</option>
                          <option>Vegetación</option>
                          <option>Neotrópico</option>
                          <option>Monos</option>
                      </select>
                      <select id="work-geographical-description" name="work-geographical-description" multiple class="form-control">
                          <option disabled>Descripción geográfica</option>
                          <option>Pacifico centrál, Costa Rica</option>
                          <option>Caribe norte, Honduras</option>
                          <option>Managua, Nicaragua</option>
                      </select>
                      <select id="work-thematic-description" name="work-thematic-description" multiple class="form-control">
                          <option disabled>Descripción temática</option>
                          <option>Sociología</option>
                          <option>Computación en la nube</option>
                          <option>Desarrollo sostenible</option>
                      </select>
                      <input type="text" id="work-publication-date" name="work-publication-date" class="form-control" placeholder="Fecha de publicación">
                      <textarea style="max-width: 100%;" id="work-methodology" name="work-methodology" class="form-control" placeholder="Metodología"rows="3"></textarea>
                        <br>
                      <input type="submit" class="btn btn-primary pull-right" value="Listo">
                  </div>
                </form>
          </div>
      </div>
  </div>
</div>
</div>
<div>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#trabajos" aria-controls="trabajos" role="tab" data-toggle="tab">Trabajos</a></li>
        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
    </ul>

    <div class="container-fluid">
        <!-- Tab panes -->
        <div class="row">
            <div class="tab-content col-sm12 col-md-10 col-md-offset-1">
                <div role="tabpanel" class="tab-pane active" id="trabajos">
                    <h1>Trabajos</h1>
                    <div class="col-s12">
                        <button class="btn btn-primary" id="add-work">Agregar</button>
                    </div>
                    <br>
                    <ul id="works" class="list-group">
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane" id="profile">...</div>
                <div role="tabpanel" class="tab-pane" id="messages">...</div>
                <div role="tabpanel" class="tab-pane" id="settings">...</div>
            </div>
        </div>
    </div>
</div>

<!--JavaScript-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script>
var host = 'localhost:3000/'
$(document).ready(function () {
    loadWorks();

    $("#add-work").click(function () {
        modal('', 'Agregar trabajo', 'work-form');
    });

    $('a[href="#trabajos"]').click(function (e) {
        loadWorks();
    });

    function deleteWork (id) {
        $.ajax ({                                     
            url: '/work/' + id,
            headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' },                 
            type:'DELETE',                    
            success: function(request, settings){
                console.log(request)
            },                                      
            error:  function(request, settings){    
                alert("Errro");
                console.log("Error", request)
            }                               
        });
    }

    function loadWorks () {
        $.ajax ({                                     
            url: '/work',                  
            type:'GET',                    
            success: function(request, settings){
                var list = $('#works');
                list.empty();
                for (var i = 0; i < request.length; i++) {
                    console.log(request[i])
                    var work = request[i];
                    var li = '<li class="list-group-item" id-work="' + work.id + '">' +
                    '<button class="work-delete  btn btn-danger pull-right">Eliminar</button>'+
                    '<button class="work-edit  btn btn-info pull-right">Editar</button>'+
                    '<h2>'+ work.title +'</h2>' +
                    '<div>'+
                    '<i>'+ work.signature +'</i>'+
                    '-'+
                    '<b>'+ ((work.type)?work.type.name:"") +' (' + ((work.degree)?work.degree.name:"") + ')</b>' +
                    '</div>' +
                    '<div>'+
                    '<p>Publicación: '+ work.publication_date +'</p>' +
                    '</div>' +
                    '<div>'+
                    '<p>'+ work.methodology +'</p>' +
                    '</div>'+
                    '</li>';
                    list.append(li);
                };

                workActions();

            },                                      
            error:  function(request, settings){    
                alert("Errro");
                console.log("Error", request)
            }                               
        });
}

function workActions () {
    $('.work-delete').click(function (e) {
        var id = $(this).parent().attr('id-work'); 
        if(confirm("Desea eliminar el " + id)){
            deleteWork(id);
        }
    });

    $('.work-edit').click(function (e) {
        var id = $(this).parent().attr('id-work'); 
        console.log(confirm("Editar el " + id));
    });
}

$("#work-form").submit(function (e) {
    e.preventDefault();
    
    $("#work-form").children().children().each(function(){
        console.log($(this).val(), $(this))
    });

    $.ajax ({                                     
            url: '/work/',
            headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' }, 
            data:{
                title: 'Trabajo con metoddo',
                signature: 'QQ8s75',
                methodology: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum in iste deserunt possimus delectus, iusto quaerat aperiam, laborum dicta, molestiae officia ipsum magni, voluptatibus et nemo fugiat distinctio iure ullam?',
                publication_date: '2010-06-09',
                authors_id:['2']
            },                
            type:'POST',                    
            success: function(request, settings){
                console.log(request)
            },                                      
            error:  function(request, settings){    
                alert("Errro");
                console.log("Error", request)
            }                               
        });
});

function modal (text, title, form) {
    console.log(title);
    var title = (title)?title:'Mensaje';
    if(form){
        $('#'+form).show();
    }
    $('#modal-title').html(title);
    $('#modal-text').html(text);

    $('#myModal').modal('show');
}
});
</script>
</body>
</html>