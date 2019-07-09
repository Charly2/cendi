<h2 class="text-center">Prerregistro de Inscripción</h2>
<h3>Ficha de Identificación</h3>
<section class="mb-3">
    <div class="row">
        <div class="col-md-12 text-right">

        </div>
    </div>
</section>


<div id="form">

    <div class="list-group noPadding">


        <div class="list-group-item py-3 noPadding" data-acc-step>
            <div class="mb-0 headerform" data-acc-title>Datos del Niño o de la Niña </div>
        </div>

        <div class="list-group-item py-3 noPadding" data-acc-step>
            <div class="mb-0 headerform" data-acc-title>Datos del Cónyugue </div>
        </div>

        <div class="list-group-item py-3 noPadding" data-acc-step>
            <div class="mb-0 headerform" data-acc-title>Persona en caso necesario, pueda recoger al niño o niña </div>
        </div>


        <div class="list-group-item py-3 noPadding" data-acc-step>
            <div class="mb-0 headerform" data-acc-title>Documentación requerida </div>
            <div data-acc-content>
                <div class="my-3">

                    <table id="tabla" class="table table-striped table-bordered" style="width: 100%;">
                        <thead>
                        <tr>
                            <th>Documento</th>
                            <th width="20%">Acción</th>
                            <th width="20%">Estatus</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Oficio del centro de trabajo solicitando la prestación*:</td>
                            <td align="center"><button class="btn btn-primary" onclick="setSend(this,'doc1','Oficio del centro de trabajo solicitando la prestación')" >Subir</button></td>
                            <td id="est_doc1">
                                <span><?=$data[0]['estadoTxt']?></span>
                                <input type="hidden" class="require" value="<?=$data[0]['estadoTxt']=="Cargado"?"ok":"error"?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Nombramiento de basse (FUB)*:</td>
                            <td align="center"><button class="btn btn-primary" onclick="setSend(this,'doc2','Nombramiento de basse (FUB)')">Subir</button></td>
                            <td id="est_doc2">
                                <span><?=$data[1]['estadoTxt']?></span>
                                <input type="hidden" class="require" value="<?=$data[1]['estadoTxt']=="Cargado"?"ok":"error"?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Nombramieto de base con minimo 18 horas para las trabajadoras académicas*:</td>
                            <td align="center"><button class="btn btn-primary" onclick="setSend(this,'doc3','Nombramieto de base con minimo 18 horas para las trabajadoras académicas')">Subir</button></td>
                            <td id="est_doc3">
                                <span><?=$data[2]['estadoTxt']?></span>
                                <input type="hidden" class="require" value="<?=$data[2]['estadoTxt']=="Cargado"?"ok":"error"?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Constancia de horario de trabajo, expedida por la autoridad correspondiente*:</td>
                            <td align="center"><button class="btn btn-primary" onclick="setSend(this,'doc4','Constancia de horario de trabajo, expedida por la autoridad correspondiente')">Subir</button></td>
                            <td id="est_doc4">
                                <span><?=$data[3]['estadoTxt']?></span>
                                <input type="hidden" class="require" value="<?=$data[3]['estadoTxt']=="Cargado"?"ok":"error"?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Copia del último comprobante de percepciones y descuentos (Talón de Pago)*:</td>
                            <td align="center"><button class="btn btn-primary" onclick="setSend(this,'doc5','Copia del último comprobante de percepciones y descuentos (Talón de Pago)')">Subir</button></td>
                            <td id="est_doc5">
                                <span><?=$data[4]['estadoTxt']?></span>
                                <input type="hidden" class="require" value="<?=$data[4]['estadoTxt']=="Cargado"?"ok":"error"?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Copia del Acta de Nacimiento del menor certificada por el jefe de Capital Humano*:</td>
                            <td align="center"><button class="btn btn-primary" onclick="setSend(this,'doc6','Copia del Acta de Nacimiento del menor certificada por el jefe de Capital Humano')">Subir</button></td>
                            <td id="est_doc6">
                                <span><?=$data[5]['estadoTxt']?></span>
                                <input type="hidden" class="require" value="<?=$data[5]['estadoTxt']=="Cargado"?"ok":"error"?>">
                            </td>
                        </tr>
                        </tbody>

                    </table>



                </div>
            </div>
        </div>
        <input type="submit" id="finalizar" class="btn btn-primary float-right btnnet" value="Finalizar">

    </div>

</div>



<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" id="tipoDoc">Modal Heading</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="#" method="GET" class="form demo_form">
                    <input type="hidden" name="user" value="Algo">
                    <div class="upload" data-upload-options='{"action":"<?=_setUrl('app/alumno/fileUpload/doc')?>"}'></div>
                    <p class="info_docs">Formato: PDF o JPG. Tamaño máximo: 4 Mb</p>
                    <div class="filelists">
                        <ol class="filelist complete">
                            <li data-index="0"><span class="content"><span class="file" style="color: rgb(255, 255, 255);"><?=$data['derecho']['evidencia_a']?></span></span><span class="bar" style="width: 100%; background: rgb(47, 191, 65);"></span></li>
                        </ol>
                        <ol class="filelist queue">
                        </ol>
                    </div>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" id="cerrarmodal" data-dismiss="modal">Cerrar</button>
            </div>

        </div>
    </div>
</div>



<script>

    function setSend(t,tipo,titulo){
        $('#tipoDoc').html(titulo);
        TIPOVAL = tipo;
        $('.filelists ol').each(function (e,t) {
            $(this).html("");
        });
        $('#cerrarmodal').removeClass('btn-success').addClass('btn-danger').html("Cerrar").data('tr','est_'+tipo);
        $('#myModal').modal('show');
    }

    $(document).ready(function() {


        $(".upload").each(function (e,f) {

            $(this).upload({
                maxSize: 1073741824,
                maxConcurrent:1,

                beforeSend: onBeforeSendDoc
            }).on("start.upload", onStart)
                .on("complete.upload", onCompleteDoc)
                .on("filestart.upload", onFileStart)
                .on("fileprogress.upload", onFileProgress)
                .on("filecomplete.upload", onCompleteFile)
                .on("fileerror.upload", onFileError)
                .on("chunkstart.upload", onChunkStart)
                .on("chunkprogress.upload", onChunkProgress)
                .on("chunkcomplete.upload", onChunkComplete)
                .on("chunkerror.upload", onChunkError)
                .on("queued.upload", onQueued);

        });


    });
    var TIPOVAL = "";
    var ESTADODOC = false;

    function onBeforeSendDoc(formData, file) {
        ESTADODOC = false;
        console.log("Before Send");
        formData.append("tipoVal", TIPOVAL);
        if (TIPOVAL.length<1){
            return false;
        }

        return (file.name.indexOf(".jpg") < -1) || (file.name.indexOf(".pdf") < -1) ? false : formData; // cancel all jpgs

    }


    function  onCompleteDoc(e) {
        console.log(e)
    }

    function onCompleteFile(e, file, response) {
        console.dir(e);
        console.log(response);
        response = response.split("--code--")[1];
        if (response.trim() != "OK" ) {
            $(this).parents("form").find(".filelist.complete")
                .find("li[data-index=" + file.index + "]").addClass("error")
                .find(".progress").text(response.trim());
        } else {
            var $target = $(this).parents("form").find(".filelist.complete").find("li[data-index=" + file.index + "]");
            $target.find(".file").text(file.name);
            $target.find(".progress").remove();
            $target.find(".cancel").remove();
            //$target.appendTo($(this).parents("form").find(".filelist.complete"));
            $(this).parents("form").find(".filelist.complete").html($target);
            var a = $(this).parents("form").find(".filelist.complete .content .file")
            var b = $(this).parents("form").find(".filelist.complete .bar ")
            a.css('color','white')
            b.css('background','#2fbf41');
            ESTADODOC = true;
            $('#cerrarmodal').html("Aceptar").removeClass('btn-danger').addClass('btn-success');

            console.log($('#'+$('#cerrarmodal').data('tr')).children('span').html("Cargado"))
            console.log($('#'+$('#cerrarmodal').data('tr')).children('span.span_error').remove())
            console.log($('#'+$('#cerrarmodal').data('tr')).children('input').val("ok"))

        }
    }

    $('#finalizar').click(function (e) {
        if ($('#finalizar').next('.alert').length){
            $('#finalizar').next('.alert').remove();
        }
        $_Err = 0;
        $('.require').each(function (e) {
            if (this.value == "error" ){4
                $_Err +=1;
                $(this).parent().setEstatus('error',"Este campo es obligatorio");
            }
        });
        console.log($_Err)
        if ($_Err > 0){
            console.log("Errores");
            $(this).after('<div class="alert alert-danger alert-dismissible fade show" role="alert" style="    margin: 65px 15px 15px 15px;">\n' +
                '  <button type="button" class="close" data-dismiss="alert" aria-label="Close">\n' +
                '    <span aria-hidden="true">&times;</span>\n' +
                '  </button>\n' +
                '  <strong>¡Omitiste uno o más campos marcados como obligatorios!</strong> <br> Porfavor ingresa información en los campos marcados con *.\n' +
                '</div>')
        } else{
            window.location.href = "<?=URL_BASE?>app/alumno/reg_conyuge/<?=$data['estudiante']['idestudiante']?>"

        }

    });

</script>