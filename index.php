
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
    <link rel="stylesheet" type="text/css" href="public/libs/datatables/css/select.dataTables.min.css"/>
	<link rel="stylesheet" type="text/css" href="public/libs/datatables/css/buttons.dataTables.min.css"/>
 


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
                    <div class="panel-heading">Buscador</div>
                    <div class="panel-body">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
    <div class="row">
        <div class='col-sm-6'>
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

    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-body text-right">
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Crear</button>
                        <button type="button" class="btn btn-primary btn-sm">Editar</button>
                        <button type="button" class="btn btn-primary btn-sm">Elimiar</button>
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
                                    <th></th>
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
                                    <td>2</td>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>$170,750</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>$86,000</td>
                                </tr>
                                <tr>
                                    <td></td>
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
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">CREACION DE USUARIOS</h4>
                </div>
                <div class="modal-body">
        

                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="nombres" class="col-sm-2 control-label">Nombre:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="nombres" name="nombres" placeholder="Ej. Henry">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="paterno" class="col-sm-2 control-label">Paterno:</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="paterno" name="paterno" placeholder="Ej. Perez">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                                <label>
                                <input type="checkbox"> Soltero
                                </label>
                            </div>
                        </div>
                    </div>
                </form>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="public/libs/jquery/jquery-3.3.1.min.js"></script>
    <script src="public/libs/boostrap/js/transition.js"></script>
    <script src="public/libs/boostrap/js/collapse.js"></script>
    <script src="public/libs/boostrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="public/libs/moment/js/moment.min.js"></script>
    <script type="text/javascript" src="public/libs/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
    
    <script type="text/javascript" src="public/libs/datatables/js/datatables.min.js"></script>
    <script type="text/javascript" src="public/libs/datatables/js/dataTables.select.min.js"></script>
    <script type="text/javascript" src="public/libs/datatables/js/dataTables.buttons.min.js"></script>
    
    <!-- Jquery validation -->
    <script type="text/javascript" src="public/libs/jquery-validation/js/jquery.validate.min.js"></script>

    <script type="text/javascript" src="public/js/index.js"></script>

  </body>
</html>
