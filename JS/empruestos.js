        $(document).ready(function(){
            $("#cboEmpresas").change(function() {
                var empresa = $(this).val();
                
                if(empresa > 0)
                {
                    var datos = {
                        idEmpresa : $(this).val()  
                    };

                    $.post("Configuracion/puesto.php", datos, function(puestos) {
                        var $comboPuestos = $("#cboPuestos");
                        $comboPuestos.empty();
                        $.each(puestos, function(index, cuidad) {
                            //
                            $comboPuestos.append("<option>" + cuidad.nombre + "</option>");
                        });
                    }, 'json');
                }
                else
                {
                    var $comboPuestos = $("#cboPuestos");
                    $comboPuestos.empty();
                    $comboPuestos.append("<option>Seleccione un Puesto</option>");
                }
            });
        }); 