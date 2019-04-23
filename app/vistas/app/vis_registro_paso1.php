<h1 class="text-center">Pre-registro de Inscripción</h1>
<h3>Ficha de Identificación</h3>
<section class="mb-3">
    <div class="row">
        <div class="col-md-12 text-right">
            <span class="text-muted">09-19-13, 26-03-19, 1931 1913 2 Tueam19</span>
        </div>
    </div>
</section>


<form id="form">

    <div class="list-group noPadding">

        <div class="list-group-item py-3 noPadding" data-acc-step>
            <div class="mb-0 headerform" data-acc-title>Datos del Niño o de la Niña</div>
            <div data-acc-content>
                <div class="my-3">
                    <div class="row rowjc">
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>Nombre (s)*:</label>
                                <input type="text" name="" class="form-control" placeholder="Escribe aquí tu nombre" value=""/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>Primer apellido*:</label>
                                <input type="text" name="" class="form-control" placeholder="Escribe aquí tu primer apellido" value=""/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Segundo apellido*:</label>
                                <input type="text" name="" class="form-control" placeholder="Escribe aquí tu segundo apellido"/>
                            </div>
                        </div>
                    </div>
                    <div class="row rowjc">
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>Lugar de nacimiento*:</label>
                                <select type="text" name="" class="form-control" >
                                    <?=getSelectEstados($data['persona']['lugarnac']);?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>Fecha de nacimiento*:</label>
                                <input type="text" name="" class="form-control fecha" placeholder="" />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>CURP*:</label>
                                <input type="text" name="" class="form-control "  placeholder="Escribe aquí tu CURP"/>
                            </div>
                        </div>
                    </div>
                    <div class="row rowjc">
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label>Grupo sanguíneo y Rh:*:</label>
                                <select type="text" name="" class="form-control" >
                                    <option value="a">O+</option>
                                    <option value="a">O-</option>
                                    <option value="a">A+</option>
                                    <option value="a">A-</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <input type="submit" id="finalizar" class="btn btn-primary float-right btnnet" value="Siguiente">


    </div>

</form>



<script src="<?=URL_BASE?>public/js/jquery.accordion-wizard.min.js"></script>

<script>


    $( function() {
        $('.fecha').datepicker({
            timepicker: false,
            language: 'es',
            maxHours: 18,
            onSelect: function (fd, d, picker) {
            }
        });
        $('.hora').datepicker({
            timepicker: true,
            onlyTimepicker: true,
            language: 'es',
            maxHours: 18,
            onSelect: function (fd, d, picker) {
            }
        });

    });

    $('#finalizar').click(function (e) {

        $_Err = 0;
        $('.req_this').each(function (e) {
            if (this.value == "" ){4
                $_Err +=1;
                $(this).parent().setEstatus('error')
            }
        });
        console.log($_Err)
        if ($_Err > 0){
            console.log("Errores")
        } else{
            window.location.href = "/cendi/pre_registro/ok";
        }

    });
</script>