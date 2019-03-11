<?php require("header.php"); ?>

    <div class="container-fluid" id="botonera">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading text-left">
                        <button type="button" class="btn btn-default btn-sm text-center" id="btnCrear">
                            <i class="glyphicon glyphicon-plus"></i> <br>Crear
                        </button>
                        <button type="button" class="btn btn-default btn-sm text-center" id="btnEditar">
                            <i class="glyphicon glyphicon-pencil"></i> <br>Editar
                        </button>
                        <button type="button" class="btn btn-default btn-sm text-center"> 
                            <i class="glyphicon glyphicon-trash"></i> <br>Elimiar
                        </button>
                        <button type="button" class="btn btn-default btn-sm text-center" id="btnActualizarTabla"> 
                            <i class="glyphicon glyphicon-repeat"></i> <br>Actualizar Tabla
                        </button>
                        <button type="button" class="btn btn-default btn-sm text-center" id="btnAsignarRoal"> 
                            <i class="glyphicon glyphicon-thumbs-up"></i> <br>Asignar Rol
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid" id="buscador">
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
                                    <label class="col-md-4 control-label">NOMBRE:</label>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker11'>
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
                                    <label class="col-md-4 control-label">FECHA DE NACIMIENTO:</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="fechaNacimiento" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                        <label class="col-md-4 control-label">CODIGO:</label>
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
                                    <label class="col-md-4 control-label">PAIS:</label>
                                    <div class="col-md-8">
                                        <select name="selector" id="input2" class="form-control" multiple="multiple" >
                                            <option value="">Seleccione</option>
                                            <option value="1">Cochabamba</option>
                                            <option value="2">La Paz</option>
                                            <option value="3">Santa Cruz</option>
                                            <option value="4">Oruro</option>
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



        

    


    <div class="container-fluid" id="tablas">
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-body">
                        
                        <table id="tblUsuarios" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th style="width: 50px"></th>
                                    <th>NOMBRES Y APELLIDOS</th>
                                    <th>CUENTA</th>
                                    <th>CORREO ELECTRONICO</th>
                                    <th>CI</th>
                                    <th>SALARIO</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th>NOMBRES Y APELLIDOS</th>
                                    <th>CUENTA</th>
                                    <th>CORREO ELECTRONICO</th>
                                    <th>CI</th>
                                    <th>SALARIO</th>
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div><!-- /.container -->

    
    <!-- Modal -->
    <div class="modal fade" id="modalCrear" tabindex="-1" role="dialog" >
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content ">
                <form id="formCrear" action="index_submit" method="post" class="form-horizontal">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">CREACION DE USUARIOS</h4>
                    </div>
                    <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Nombres:</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control"  name="usuario[nombres]">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Apellido Paterno:</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="usuario[paterno]">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Apellido Materno:</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="usuario[materno]" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Cuenta:</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control"  name="usuario[cuenta]">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Email:</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control"  name="usuario[email]">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">CI:</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control"  name="usuario[ci]">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Contraseña:</label>
                                        <div class="col-md-8">
                                            <input type="password" class="form-control" id="password" name="usuario[password]">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Repetir Contraseña:</label>
                                        <div class="col-md-8">
                                            <input type="password" class="form-control"  name="usuario[rep_password]">
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


    <!-- Modal -->
    <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" >
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content ">
                <form id="formEditar" action="index_submit" method="post" class="form-horizontal">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">EDITACION DE USUARIOS</h4>
                    </div>
                    <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Nombres:</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control"  name="usuario[nombres]">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Apellido Paterno:</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="usuario[paterno]">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Apellido Materno:</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="usuario[materno]" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Cuenta:</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control"  name="usuario[cuenta]">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Email:</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control"  name="usuario[email]">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">CI:</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control"  name="usuario[ci]">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Contraseña:</label>
                                        <div class="col-md-8">
                                            <input type="password" class="form-control" id="password" name="usuario[password]">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Repetir Contraseña:</label>
                                        <div class="col-md-8">
                                            <input type="password" class="form-control"  name="usuario[rep_password]">
                                        </div>
                                    </div>

                                </div>                                
                            </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="usuario[id_usuario]">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>








    <!-- Modal -->
    <div class="modal fade" id="modalAsignarRol" tabindex="-1" role="dialog" >
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content ">
                <form id="formEditar" action="index_submit" method="post" class="form-horizontal">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Asignar Rol al usuario</h4>
                    </div>
                    <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Roles:</label>
                                        <div class="col-md-8">
                                            <select name="id_rol[]" class="form-control" multiple>
                                            </select>
                                        </div>
                                    </div>

                                </div>                                
                            </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="usuario[id_usuario]">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php require("footer.php"); ?>

<script src="public/js/demo1.js?date='<?php echo uniqid()?>'"></script>