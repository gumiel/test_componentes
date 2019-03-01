
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="public/libs/boostrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="public/libs/datatables/css/datatables.min.css"/>

    <!-- DataTable core CSS -->
    <link rel="stylesheet" type="text/css" href="public/libs/datatables/css/select.dataTables.min.css"/>
	<link rel="stylesheet" type="text/css" href="public/libs/datatables/css/buttons.dataTables.min.css"/>
 
    <!-- Select2 core CSS -->
    <link href="public/libs/select2/css/select2.min.css" rel="stylesheet">
    
    <!-- TreeView Bootstrap code CSS -->
    <link rel="stylesheet" href="public/libs/bootstrap-treeview/css/bootstrap-treeview.min.css" />
    
    <style type="text/css" media="screen">
 
.btn-glyphicon { padding:8px; background:#ffffff; margin-right:4px; }
.icon-btn { padding: 1px 15px 3px 2px; border-radius:50px;}

.clickable{
    cursor: pointer;   
}

.panel-heading span {
    margin-top: -20px;
    font-size: 15px;
}
    </style>

  </head>

  <body>

    <nav class="navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading text-left">
                        <button type="button" class="btn btn-default btn-sm text-center" data-toggle="modal" data-target="#myModal">
                            <i class="glyphicon glyphicon-plus"></i> <br>Crear
                        </button>
                        <button type="button" class="btn btn-default btn-sm text-center">
                            <i class="glyphicon glyphicon-pencil"></i> <br>Editar
                        </button>
                        <button type="button" class="btn btn-default btn-sm text-center"> 
                            <i class="glyphicon glyphicon-trash"></i> <br>Elimiar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <form id="formBuscador" action="validacion_submit" method="get" accept-charset="utf-8">
                        
                    
                        <div class="panel-heading"> 
                            <h3 class="panel-title">Buscador</h3>
                            <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-down"></i></span>

                        </div>
                        <div class="panel-body" class="collapse" id="collapseExample">
                            <div class="row">
                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="nombres" class="col-md-4 control-label">Nombre:</label>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <div class='input-group date' id='datetimepicker1'>
                                                    <input type='text' class="form-control" />
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class='col-md-6'>
                                    <div class="form-group">
                                        <label for="telefono" class="col-md-4 control-label">Telefono:</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="telefono" name="telefono" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                            <label for="nombres" class="col-md-4 control-label">Codigo:</label>
                                            <div class="col-md-8">
                                                <select name="selector" id="input" class="form-control" >
                                                    <option value="">SELECCIONE</option>
                                                    <option value="1">UNO</option>
                                                    <option value="2">DOS</option>
                                                    <option value="3">TRES</option>
                                                    <option value="4">CUATRO</option>
                                                </select>
                                            </div>
                                    </div>
                                    
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nombres" class="col-md-4 control-label">Pais:</label>
                                        <div class="col-md-8">
                                            <select name="selector" id="input2" class="form-control" multiple="multiple" >
                                                <option value="">SELECCIONE</option>
                                                <option value="1">UNO</option>
                                                <option value="2">DOS</option>
                                                <option value="3">TRES</option>
                                                <option value="4">CUATRO</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>


                        </div>
                        <div class="panel-footer text-right">
                            <button type="button" class="btn btn-sm btn-default">Limpiar</button>
                            <button type="submit" class="btn btn-sm btn-primary">Buscar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



        
    </div>
</div>

    







    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="public/libs/jquery/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="public/libs/boostrap/js/transition.js"></script>
    <script src="public/libs/boostrap/js/collapse.js"></script>
    <script src="public/libs/boostrap/js/bootstrap.min.js"></script>

    
    <!-- Jquery validation JS-->
    <script type="text/javascript" src="public/libs/jquery-validation/js/jquery.validate.min.js"></script>

    <script>
        
        jQuery(document).ready(function($) {
            

            $("#formBuscador").validate({
                rules: {
                    "telefono": {
                        required: true,
                        minlength: 2
                    }
                },
                messages: {
                    "nombres": {
                        required: "Please enter a username",
                        minlength: "Your username must consist of at least 2 characters"
                    },
                    "paterno": {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
                    },
                }
            });





        }); 

    </script>

  </body>
</html>
