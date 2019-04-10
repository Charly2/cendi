<?
    print_r($data['persona']);
?>
<div class="container">
    <h1 class="text-center">Pre-registro de Inscripción</h1>
    <h3>Ficha de Identificación</h3>

    <section class="mb-3">
        <div class="row">
            <div class="col-md-12 text-right">
                <span class="text-muted"><?=date('h-i-s, j-m-y, it is w Day')?></span>
            </div>
        </div>
    </section>
    <form id="form">

        <div class="list-group noPadding">



            <div class="list-group-item py-3 noPadding" data-acc-step>
                <div class="mb-0 headerform" data-acc-title>Datos del Derechohabiente </div>

                <div data-acc-content>
                    <div class="my-3">
                        <span class="subtitlereg">Datos Generales</span>
                        <div class="row rowjc">
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Nombre (s)*:</label>
                                    <input type="text" name="" class="form-control" placeholder="Escribe aquí tu nombre" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Primer apellido*:</label>
                                    <input type="text" name="" class="form-control" placeholder="Escribe aquí tu primer apellido" />
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
                                        <option value="a">CDMX</option>
                                        <option value="a">CDMX</option>
                                        <option value="a">CDMX</option>
                                        <option value="a">CDMX</option>
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
                                    <label>Ocupación*:</label>
                                    <input type="text" name="" class="form-control "  placeholder="Escribe aquí tu Ocupación"/>
                                </div>
                            </div>
                        </div>
                        <div class="row rowjc">
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Sexo*:</label>
                                    <select type="text" name="" class="form-control" >
                                        <option value="a">Hombre</option>
                                        <option value="a">Mujer</option>
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


                        <span class="subtitlereg">Estado Civil</span>
                        <div class="row rowjc">
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Género*:</label>
                                    <select type="text" name="" class="form-control" >
                                        <option value="m">Masculino</option>
                                        <option value="f">Femenino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Estado Civil*:</label>
                                    <select type="text" name="" class="form-control" >
                                        <option value="c">Casada</option>
                                        <option value="s">Soltero</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <label class="lw100">Adjuntar evidencia*:</label>
                                    <input type="file" class="form-control hide" placeholder="Adjuntar archivo">
                                    <input type="text" class="form-control" placeholder="Adjuntar archivo">
                                    <div class="input-group-btn">
                                        <div class="btn btn-default">
                                            <i class="fui-clip"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <span class="subtitlereg">Datos de Contacto</span>
                        <div class="row rowjc">
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Correo electrónico*:</label>
                                    <input type="text" name="" class="form-control" placeholder="user@domain.com" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Telefono celular*:</label>
                                    <input type="text" name="" class="form-control "  placeholder="Escribe aquí tu número interior"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Telefono Fijo*:</label>
                                    <input type="text" name="" class="form-control "  placeholder="Escribe aquí tu número interior"/>
                                </div>
                            </div>
                        </div>
                        <div class="row rowjc">
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Telefono de Trabajo*:</label>
                                    <div class="d-flex">
                                        <input type="text" name="" class="form-control w180" placeholder="xx-xx-xx-xx" />
                                        <input type="text" name="" class="form-control " placeholder="Ext." />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <span class="subtitlereg">Datos del Domicilio</span>
                        <div class="row rowjc">
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Domicilio / Calle*:</label>
                                    <input type="text" name="" class="form-control " placeholder="Escribe aquí tu domicilio" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Número exterior*:</label>
                                    <input type="text" name="" class="form-control " placeholder="Escribe aquí tu número exterior" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Número interior*:</label>
                                    <input type="text" name="" class="form-control "  placeholder="Escribe aquí tu número interior"/>
                                </div>
                            </div>
                        </div>
                        <div class="row rowjc">
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Código Postal*:</label>
                                    <input type="text" name="" class="form-control "  id="CP" placeholder="Escribe aquí tu CP"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Alcaldía / Municipio*:</label>
                                    <input type="text" name="" class="form-control " id="MU" placeholder="" value="Gustavo A. Madero" disabled="disabled"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Entidad Federativa*:</label>
                                    <input type="text" name="" class="form-control " id="EN" placeholder="" value="México" disabled="disabled"/>
                                </div>
                            </div>
                        </div>
                        <div class="row rowjc">

                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Colonia*:</label>
                                    <input type="text" name="" class="form-control "  placeholder="Escribe aquí tu colonia"/>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group ">
                                    <label>Señas particulares*:</label>
                                    <input type="text" name="" class="form-control " placeholder="Escribe aquí algunos detalles de tu domicilio" />
                                </div>
                            </div>
                        </div>






                        <span class="subtitlereg">Datos del Centro de Trabajo</span>




                        <div class="row rowjc">
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Centro de Trabajo*:</label>
                                    <select class="form-control select select-primary" data-toggle="select">
                                        <option value="0">ESCOM</option>
                                        <option value="1">ESIME</option>
                                        <option value="2">UPIITA</option>
                                        <option value="3">UPIICSA</option>
                                        <option value="4" selected>ESIQIE</option>
                                        <option value="5">CECYT 1</option>
                                        <option value="5">CECYT 2</option>
                                        <option value="5">CECYT 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Ocupación*:</label>
                                    <input type="text" name="" class="form-control" placeholder="Escribe aquí tu Ocupación" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Plaza o puesto*:</label>
                                    <input type="text" name="" class="form-control" placeholder="Escribe aquí tu plaza o puesto" />
                                </div>
                            </div>
                        </div>
                        <div class="row rowjc">
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Escolaridad*:</label>
                                    <input type="text" name="" class="form-control" placeholder="Escribe aquí tu escolaridad" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Hora de entrada*:</label>
                                    <input type="text" name="" class="form-control hora" placeholder="Escribe aquí tu hora de entrada" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Hora de salida*:</label>
                                    <input type="text" name="" class="form-control hora" placeholder="Escribe aquí tu hora de salida" />
                                </div>
                            </div>
                        </div>
                        <div class="row rowjc">

                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Horas de base*:</label>
                                    <input type="text" name="" class="form-control" placeholder="Escribe aquí tus horas de base" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Horas de Interinato*:</label>
                                    <input type="text" name="" class="form-control" placeholder="Escribe aquí tus horas de base" />
                                </div>
                            </div>
                        </div>


                        <span class="subtitlereg">Fotografía</span>

                        <div class="row rowjc">
                            <div class="col-md-4">
                                <div class="input-group">
                                    <label class="lw100">Adjuntar Fotografía*:</label>
                                    <input type="file" class="form-control hide" placeholder="Adjuntar archivo">
                                    <input type="text" class="form-control" placeholder="Adjuntar archivo">
                                    <div class="input-group-btn">
                                        <div class="btn btn-default" >
                                            <i class="fui-clip"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>

    </form>
</div>

<script src="public/js/jquery.accordion-wizard.min.js"></script>

<script>
    var options = {
        mode: 'wizard',
        autoButtonsNextClass: 'btn btn-primary float-right btnnet',
        autoButtonsPrevClass: 'btn btn-light mr-1 btnbac',
        stepNumberClass: 'badge badge-pill badge-primary-gin mr-1',
        autoButtonsSubmitText:'Finalizar',
        onSubmit: function() {
            window.location.href = 'registrocompleto';
            return false;
        }
    }

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

        $( "#form" ).accWizard(options);

        $('#CP').change(function (e) {
            console.log(this.value);

            fetch('https://api-codigos-postales.herokuapp.com/v2/codigo_postal/'+this.value)
                .then(function(response) {
                    return response.json();
                })
                .then(function(myJson) {
                    console.log(myJson);
                    document.getElementById('MU').value = myJson.municipio;
                    document.getElementById('EN').value = myJson.estado;



                });

        });

    });
</script>