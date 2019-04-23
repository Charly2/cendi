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
            <div class="mb-0 headerform" data-acc-title>Documentación requerida </div>
            <div data-acc-content>
                <div class="my-3">
                    <div class="row rowjc">
                        <div class="col-md-6">
                            <div class="input-group">
                                <label class="lw100">Oficio del centro de trabajo solicitando la prestación*:</label>
                                <input type="file" class="form-control hide" placeholder="Adjuntar archivo">
                                <input type="text" class="form-control" placeholder="Adjuntar archivo">
                                <div class="input-group-btn">
                                    <div class="btn btn-default" >
                                        <i class="fui-clip"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <label class="lw100">Nombramiento de basse (FUB)*:</label>
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
                    <div class="row rowjc">
                        <div class="col-md-6">
                            <div class="input-group">
                                <label class="lw100">Nombramieto de base con minimo 18 horas para las trabajadoras académicas*:</label>
                                <input type="file" class="form-control hide" placeholder="Adjuntar archivo">
                                <input type="text" class="form-control" placeholder="Adjuntar archivo">
                                <div class="input-group-btn">
                                    <div class="btn btn-default" >
                                        <i class="fui-clip"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <label class="lw100">Constancia de horario de trabajo, expedida por la autoridad correspondiente*:</label>
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
                    <div class="row rowjc">
                        <div class="col-md-6">
                            <div class="input-group">
                                <label class="lw100">Copia del último comprobante de percepciones y descuentos (Talón de Pago)*:</label>
                                <input type="file" class="form-control hide" placeholder="Adjuntar archivo">
                                <input type="text" class="form-control" placeholder="Adjuntar archivo">
                                <div class="input-group-btn">
                                    <div class="btn btn-default" >
                                        <i class="fui-clip"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <label class="lw100">Copia de la credencial vigente del I.P.N.*:</label>
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
                    <div class="row rowjc">
                        <div class="col-md-6">
                            <div class="input-group">
                                <label class="lw100">Copia del Acta de Nacimiento del menor certificada por el jefe de Capital Humano*:</label>
                                <input type="file" class="form-control hide" placeholder="Adjuntar archivo">
                                <input type="text" class="form-control" placeholder="Adjuntar archivo">
                                <div class="input-group-btn">
                                    <div class="btn btn-default" >
                                        <i class="fui-clip"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <label class="lw100">Certificado Médico del menor*:</label>
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
                    <div class="row rowjc">
                        <div class="col-md-6">
                            <div class="input-group">
                                <label class="lw100">Estudio socioeconómico*:</label>
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
</script>