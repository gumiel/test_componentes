<?php require("header.php"); ?>

    <div class="container-fluid" id="botonera">
        <div class="row">
            <div class="col-md-12" >
                <div class="panel panel-primary">
                    <div class="panel-heading text-left">
                        <a href="/test_components/demo2.php/pagina1" class="btn btn-default btn-sm text-center" id="btn1">
                            <i class="glyphicon glyphicon-plus"></i> <br>BOTON 1
                        </a>
                        <a href="/test_components/demo2.php/pagina2" class="btn btn-default btn-sm text-center" id="btn2">
                            <i class="glyphicon glyphicon-pencil"></i> <br>BOTON 2
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" id="page1" style="display: none">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" id="page2" style="display: none">
                Esto es la PAGINA 2 Esto es la PAGINA 2 Esto es la PAGINA 2 Esto es la PAGINA 2 Esto es la PAGINA 2 Esto es la PAGINA 2 Esto es la PAGINA 2 Esto es la PAGINA 2 Esto es la PAGINA 2 Esto es la PAGINA 2 Esto es la PAGINA 2 Esto es la PAGINA 2 Esto es la PAGINA 2 Esto es la PAGINA 2 Esto es la PAGINA 2 Esto es la PAGINA 2 
            </div>
        </div>
    </div>
    




        

    




<?php require("footer.php"); ?>

<script src="public/js/demo1.js?date='<?php echo uniqid()?>'"></script>

<script type="text/javascript" >
    page();
    page("/test_components/demo2.php/pagina1", pagina1)
    page("/test_components/demo2.php/pagina2", pagina2)
    
    require.config({
        paths: {
            'Conta': 'vendor/jquery-1.9.0.min',
            'underscore': 'vendor/underscore-1.9.min'
        },
        shim: {
            'jQuery': {
                exports: '$'
            },
            'underscore': {
                exports: '_'
            }
        }
    });

    function pagina1(){
        // var valor = require("http://localhost/test_components/public/js/demo2.js");
        require(["http://localhost/test_components/public/js/demo2.js"], function(valor){
            // console.log(valor);
            valor.saludo();
        });

        $("#page1").show();
        $("#page2").hide();
    }

    function pagina2(){
        $("#page2").show();
        $("#page1").hide();
    }

</script>