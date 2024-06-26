$(document).ready(function(){

    //Modal perfil
    $(document).on("click","#updateprofile",function(){
        var url=$(this).attr("data-url");
        var usu_id=$("#usu_id").val();
        var fName=$("#fname").val();
        var sName=$("#sname").val();
        var ltName=$("#ltname").val();
        var typeDoc=$("#typedoc").val();
        var numDoc=$("#numDoc").val();
        var dataString= 'usu_nombre='+fName+'&usu_nombre2='+sName+'&usu_apellido='+ltName+'&cod_tipo_doc='+typeDoc+'&usu_ndocumento='+numDoc;
         $.ajax({
            url:url,
            data:dataString,
            type:"GET",
            success:function(datos){
                location.reload(true);
            }
        });
    });
    //Fin modal perfil
    $(document).on("click","#cambioDeImagen",function(){
        var ruta=$("#imagen").attr("src");

        $("#cambiarImagen").html("<input type='file' name='img_noticia'>");
        $("$cambiarImagen").append("<input type='hidden' name='img_vieja' value='"+ruta+"'>");
    });

    $(document).on("click","#editar_comentario",function(){
            var id_comentario=$(this).attr("data-id_comentario");
            var url=$(this).attr("data-url");

            $("#comentario"+id_comentario).html("<input type='text' id='nuevo_comentario'>"+"<button type='button' class='btn btn-success btn-sm ml-2' id='comentario_editado' data-comentario_id='"+id_comentario+"' data-url='"+url+"'>Enviar</button>");     
    });

    $(document).on("click","#comentario_editado",function(){
        var url=$(this).attr("data-url");
        var comentario_id=$(this).attr("data-comentario_id");
        var comentario =$("#nuevo_comentario").val();
        var dataString= 'comentario_id='+comentario_id+'&comentario='+comentario;
        $.ajax({
            url:url,
            data:dataString,
            type:"GET",
            success:function(datos){
                location.reload(true);
            }
        });
    });

    //MODAL FORO
    $(document).on("click","#modalUpdateForo",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-id_foro");
        $.ajax({
            url:url,
            data:"id="+id,
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

    $(document).on("click","#modalDeleteForo",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-id_foro");
        $.ajax({
            url:url,
            data:"id="+id,
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

    $(document).on("click","#cambioImagenForo",function(){
        var ruta=$("#imagen").attr("src");

        $("#cambiarImagenForo").html("<div class='jumbotron'><input type='file' id='file' name='imag_nueva'></div>");
        $("#cambiarImagenForo").append("<input type='hidden' name='imag_vieja' value='"+ruta+"'>");
    });

        //FILTRO FOROS
    $(document).on("keyup", "#filtro",function(){
        var buscar = $(this).val();
        var url = $(this).attr("data-url");

        $.ajax({

            url: url,
            data: "buscar="+buscar,
            type: "POST",
            success: function (datos) {
                $("#div_post").html(datos);
            }
        });
    });

        //VALIDACIÓN FORO

        $(document).on("change", "#file",function(){
            var fileInput = document.getElementById('file');
            var filePath = fileInput.value;
            var allowedExtensions = /(.jpg|.jpeg|.png|.gif)$/i;
            if(!allowedExtensions.exec(filePath)){
                alert('Archivos permitidos .jpeg/.jpg/.png ');
                fileInput.value = '';
                return false;
            }else{
                //Image preview
                if (fileInput.files && fileInput.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
                    };
                    reader.readAsDataURL(fileInput.files[0]);
                }
            }
        });
    
   
    $('#tabla').DataTable({
        responsive: true,
            language:{
                "decimal":          "",
                "emptyTable":       "Sin datos",
                "info":             "Consultando _START_ a _END_ de _TOTAL_ registros",   
                "infoEmpty":        "Consultado 0 a 0 de 0 registros", 
                "infoFiltered":     "(Filtrado de _MAX_ registros totales)",
                "thousands":        ".",
                "lengthMenu":       "Buscar _MENU_ registros",
                "loadingRecords":   "Cargando registros...",
                "processing":       "Procesando",
                "search":           "Buscar",
                "zeroRecords":      "No se encontraron resultados",
                "paginate":{
                    "previous":     "Anterior",
                    "next":         "Siguiente",
                }

            },

    });

    $(document).on("click","#cambioImgForo",function(){
        var ruta=$("#imagen").attr("src");

        $("#cambiarImagen").html("<input type='file' name='img_nueva'>");
        $("$cambiarImagen").append("<input type='hidden' name='img_vieja' value='"+ruta+"'>");
    });
   
 
    $(document).on("click","#InsertEstado",function(){
        var url=$(this).attr("data-url");
        $.ajax({
            url:url,
            
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

    $(document).on("click","#comment_send_btn",function(){
        var url=$(this).attr("data-url");
        var foro_id=$(this).attr("data-foro_id");
        var comentario =$("#comment_form_message").val();
        var dataString= 'foro_id='+foro_id+'&comentario='+comentario;
        $.ajax({
            url:url,
            data:dataString,
            type:"GET",
            success:function(datos){
                location.reload(true);
            }
        });
    });

    $(document).on("click","#eliminar_comentario",function(){
        var url=$(this).attr("data-url");
        var id_comentario=$(this).attr("data-id_comentario");
        $.ajax({
            url:url,
            data:"comentario_id="+id_comentario,
            type:"GET",
            success:function(datos){
                location.reload(true);            }
        });
    });

    $(document).on("click","#DeleteEstado",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-estaD");

        $.ajax({
            url:url,
            data:"id="+id,
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

    $(document).on("click","#EditEstado",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-esta");

        $.ajax({
            url:url,
            data:"id="+id,
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

    $(document).on("click","#modal",function(){
        var url=$(this).attr("data-url");

        $.ajax({
            url:url,
            data:"id="+id,
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

    $(document).on("click","#deletecomment",function(){
        var url=$(this).attr("data-url");
    });



    $(document).on("click","#modalnoti",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-noti");

        $.ajax({
            url:url,
            data:"id="+id,
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

    $(document).on("click","#modalUpdate",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-usu_id");
        $.ajax({
            url:url,
            data:"id="+id,
            type:"GET",
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

    $(document).on("click","#modalUpdateConfiguracion",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-comp_id");
        $.ajax({
            url:url,
            data:"id="+id,
            type:"GET",
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

    $(document).on("click","#modalInsertConfiguracion",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-comp_id");
        $.ajax({
            url:url,
            data:"id="+id,
            type:"GET",
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

    $(document).on("click","#modalDelete",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-usu_id");
        $.ajax({
            url:url,
            data:"id="+id,
            type:"GET",
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

    $(document).on("click","#modalProfile",function(){
        var url=$(this).attr("data-url");
        var id=$(this).attr("data-usu_id");
        $.ajax({
            url:url,
            data:"id="+id,
            type:"GET",
            success:function(datos){
                $("#contenedor").html(datos);
                $("#exampleModalCenter").modal("show");
            }
        });
    });

    $("#alerta").delay(5000).fadeOut();

    $(document).on("click","#agregar",function(){
        var select=$("#copy").html();
        $("#contenido").append(
            "<div class=' row col-md-4 form-group'>"
                +"<label class='mx-3'>Categoria</label>"
                +"<div class='col-md-10'>"
                    +"<select class='form-control' name='cat_id[]'>"+select+"</select>"
                +"</div>"
                +"<div>"
                    +"<button type='button' class='btn btn-danger' id='quitar'>-</button>"
                +"</div>"
            +"</div>"
        );
    });

    $(document).on("click","#quitar",function(){
        $(this).parent().parent().remove();
    });
    

});