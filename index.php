<?php require("header.php"); ?>

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

<?php require("footer.php"); ?>