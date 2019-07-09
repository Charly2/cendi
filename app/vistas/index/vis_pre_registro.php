<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 ">
            <h2 class="text-center">Prerregistro</h2>
            <div class="login">

                <form class="login-form" id="fforr" action="<?=_setUrl('pre_registro/create');?>" method="post">
                    <label class="lavllo" for="login-name">Número de empleado:</label>
                    <div class="form-group">
                        <input type="text" class="form-control login-field" value="" id="numem" placeholder="Ingresa tu usuario" autocomplete="off" name="numero">
                        <label class="login-field-icon fui-user" for="login-name"></label>
                    </div>
                    <label class="lavllo" for="login-pass">Tipo de empleado:</label>
                    <div class="form-group">
                        <select type="text" class="form-control login-field" value="" placeholder="Ingresa tu Password"  name="tipo">
                            <option value="d">Docente</option>
                            <option value="p">PAE</option>
                        </select>
                        <label class="login-field-icon fui" for="login-pass"></label>
                    </div>

                    <button class="btn btn-primary btn-lg btn-block" >Ingresar</button>

                </form>
            </div>
        </div>
    </div>
</div>
<style>
    .form-group.has-error input {
        border-color: #e74c3c!important;
    }
</style>

<script>
    $(document).ready(function () {

        $('#numem').keypress(valnum);
        $('#numem').keyup(valnum);


    });


    $('#fforr').on('submit',function (e) {
        e.preventDefault();
        var val = $('#numem').val();
        var lg = val.length;
        if ( (lg > 5 && lg <8 ) && $.isNumeric(val)){
            document.getElementById('fforr').submit();
        } else{
            if(lg==0){
                $('#numem').parent().setEstatus('error',"Ingresa un número de empleado valido")
            }else{
                $('#numem').parent().setEstatus('error',"No es un número de empleado valido")
            }

        }



    });

    function valnum(e) {
        var val = this.value;
        var lg = val.length;
        if ( (lg > 5 && lg <8 ) && $.isNumeric(val)){
            console.log($(this).parent().setEstatus());
        } else{
            console.log($(this).parent().setEstatus('error',"No es un número de empleado valido"));
        }
    }
</script>

