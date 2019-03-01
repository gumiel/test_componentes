
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

    <title>Componentes</title>

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

table.dataTable tbody td.select-checkbox:before, table.dataTable tbody th.select-checkbox:before {
    margin-top: -12px;
}
table.dataTable tr.selected td.select-checkbox:after, table.dataTable tr.selected th.select-checkbox:after {
    margin-top: -15px;
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
                                    <label for="nombres" class="col-md-4 control-label">Nombre:</label>
                                    <div class="col-md-8">
                                        <input type="email" class="form-control" id="nombres" name="nombres" >
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

                        <div class="col-md-6">
                            
                        </div>
                    </div>
                    <div class="panel-footer text-right">
                        <button type="button" class="btn btn-sm btn-default">Limpiar</button>
                        <button type="button" class="btn btn-sm btn-primary">Buscar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



        
    </div>
</div>

    


    <div class="container-fluid">
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th style="width: 50px"></th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span style="display:none">1</span></td>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td><span style="display:none">2</span></td>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>$170,750</td>
                                </tr>
                                <tr>
                                    <td><span style="display:none">3</span></td>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>$86,000</td>
                                </tr>
                                <tr>
                                    <td><span style="display:none">4</span></td>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>$433,060</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Brielle Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>$372,000</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Herrod Chandler</td>
                                    <td>Sales Assistant</td>
                                    <td>San Francisco</td>
                                    <td>59</td>
                                    <td>$137,500</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Rhona Davidson</td>
                                    <td>Integration Specialist</td>
                                    <td>Tokyo</td>
                                    <td>55</td>
                                    <td>$327,900</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Colleen Hurst</td>
                                    <td>Javascript Developer</td>
                                    <td>San Francisco</td>
                                    <td>39</td>
                                    <td>$205,500</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Sonya Frost</td>
                                    <td>Software Engineer</td>
                                    <td>Edinburgh</td>
                                    <td>23</td>
                                    <td>$103,600</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Jena Gaines</td>
                                    <td>Office Manager</td>
                                    <td>London</td>
                                    <td>30</td>
                                    <td>$90,560</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Quinn Flynn</td>
                                    <td>Support Lead</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>$342,000</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Charde Marshall</td>
                                    <td>Regional Director</td>
                                    <td>San Francisco</td>
                                    <td>36</td>
                                    <td>$470,600</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Haley Kennedy</td>
                                    <td>Senior Marketing Designer</td>
                                    <td>London</td>
                                    <td>43</td>
                                    <td>$313,500</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Tatyana Fitzpatrick</td>
                                    <td>Regional Director</td>
                                    <td>London</td>
                                    <td>19</td>
                                    <td>$385,750</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Michael Silva</td>
                                    <td>Marketing Designer</td>
                                    <td>London</td>
                                    <td>66</td>
                                    <td>$198,500</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Paul Byrd</td>
                                    <td>Chief Financial Officer (CFO)</td>
                                    <td>New York</td>
                                    <td>64</td>
                                    <td>$725,000</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Gloria Little</td>
                                    <td>Systems Administrator</td>
                                    <td>New York</td>
                                    <td>59</td>
                                    <td>$237,500</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Salary</th>
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div><!-- /.container -->




    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content ">
                <form id="formCrearUsuario" action="index_submit" method="post" class="form-horizontal">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">CREACION DE USUARIOS</h4>
                    </div>
                    <div class="modal-body">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                    <div id="treeview1" class=""></div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                    <div class="form-group">
                                        <label for="nombres" class="col-md-4 control-label">Nombre:</label>
                                        <div class="col-md-8">
                                            <input type="email" class="form-control" id="nombres" name="nombres" placeholder="Ej. Henry">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="paterno" class="col-md-4 control-label">Paterno:</label>
                                        <div class="col-md-8">
                                            <input type="password" class="form-control" id="paterno" name="paterno" placeholder="Ej. Perez">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nacimiento" class="col-md-4 control-label">Fecha de Nacimiento:</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" id="nacimiento" name="nacimiento">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-offset-4 col-md-8">
                                            <div class="checkbox">
                                                <label>
                                                <input type="checkbox"> Soltero
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="public/libs/jquery/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="public/libs/moment/js/moment.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="public/libs/boostrap/js/transition.js"></script>
    <script src="public/libs/boostrap/js/collapse.js"></script>
    <script src="public/libs/boostrap/js/bootstrap.min.js"></script>

    <!-- DatePicker Bootstrap JS -->
    <script type="text/javascript" src="public/libs/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
    
    <!-- DataTable JS -->
    <script type="text/javascript" src="public/libs/datatables/js/datatables.min.js"></script>
    <script type="text/javascript" src="public/libs/datatables/js/dataTables.select.min.js"></script>
    <script type="text/javascript" src="public/libs/datatables/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="public/libs/datatables/responsive/dataTables.responsive.min.js"></script>

    <script type="text/javascript" src="public/libs/datatables/exports/buttons.flash.min.js"></script>
    <script type="text/javascript" src="public/libs/datatables/exports/jszip.min.js"></script>
    <script type="text/javascript" src="public/libs/datatables/exports/pdfmake.min.js"></script>
    <script type="text/javascript" src="public/libs/datatables/exports/vfs_fonts.js"></script>
    <script type="text/javascript" src="public/libs/datatables/exports/buttons.html5.min.js"></script>
    <script type="text/javascript" src="public/libs/datatables/exports/buttons.print.min.js"></script>
    <script type="text/javascript" src="public/js/CDatatable.js"></script>
    
    <!-- Jquery validation JS-->
    <script type="text/javascript" src="public/libs/jquery-validation/js/jquery.validate.min.js"></script>
    <script src="public/js/configurations.jquery.validate.js?date='<?php echo uniqid()?>'"></script>

    <!-- Select2 JS -->
    <script src="public/libs/select2/js/select2.min.js"></script>

    <!-- bootstrap-treeview JS -->
    <script src="public/libs/bootstrap-treeview/js/bootstrap-treeview.min.js"></script>

    <!-- Mask JS -->
    <script src="public/libs/mask/jquery.mask.min.js" type="text/javascript"></script>

    <script src="public/js/index.js?date='<?php echo uniqid()?>'"></script>
    <script src="public/js/data.js?date='<?php echo uniqid()?>'"></script>

  </body>
</html>
