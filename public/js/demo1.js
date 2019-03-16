// require(["public/js/r.js?date='<?php echo uniqid()?>"]);

var tblUsuarios  = new CDataTable('#tblUsuarios');

var tablas          = new ContainerJS("#tablas");
var botonera        = new ContainerJS("#botonera");
var modalCrear      = new ContainerJS("#modalCrear");
var modalEditar     = new ContainerJS("#modalEditar");
var buscador        = new ContainerJS("#buscador");
var modalAsignarRol = new ContainerJS("#modalAsignarRol");


















/**
 * METODOS DEL OBJETO DE LA BOTORENA
 */
botonera._init = function()
{

    var self = this;
    self.ele.find('#btnCrear').click(function(event){
        modalCrear.openModal();  
    });

    self.ele.find('#btnEditar').click(function(event){
        var dataRow = tblUsuarios.getData()[0];
        console.log(dataRow.id_usuario);
        modalEditar.llenarModal(dataRow.id_usuario);      
    });

    self.ele.find('#btnEliminar').click(function(event){
        
        var dataRow = tblUsuarios.getData()[0];
        
        Notificacions.confirm("¿Desea eliminar el usuario?", function(respuesta){
            if(respuesta){
                var url = "http://localhost/codeigniter_custom_github/index.php/usuario/deleteUsuarioAjax"
                var data = {"usuario[id_usuario]": dataRow.id_usuario};
                CallRest.post(url, data, function(res){
                    if(res.result == 1){
                        tablas.llenarTabla();
                        Notificacions.success();
                    } else {
                        Notificacions.errors();
                    }
                });
            }
        });      
    });

    self.ele.find('#btnActualizarTabla').click(function(event){
        tablas.llenarTabla();    
    });

    self.ele.find('#btnAsignarRoal').click(function(event){

        modalAsignarRol.llenarRoles();   
    });

}











/**
 * METODOS DEL OBJETO BUSCADOR
 */
buscador._init = function()
{ 
    var self = this;
    self.ele.find('#input').select2();
    self.ele.find('#input2').select2();
    self.ele.find('input[name="fechaNacimiento"]').mask("00/00/0000", {placeholder: "__/__/____"});
}










/**
 * METODOS DEL OBJETO DEL MODAL
 */
modalCrear._init = function()
{
    // this.validacion();   
    
}

modalCrear.openModal = function()
{
    var self = this;
    self.ele.modal("show");
    self.ele.find('select[name="profesion"]').select2();
}


modalCrear._validacion = function()
{
    var self = this;
    var formCrear = self.ele.find("#formCrear");
    
    formCrear.validate({
        rules: {
            "usuario[nombres]": {
                required: true,
                minlength: 2
            },
            "usuario[paterno]": {
                required: true,
                minlength: 2
            },
            "usuario[materno]": {
                required: true,
                minlength: 2
            },
            "usuario[cuenta]": {
                required: true,
                minlength: 2
            },
            "usuario[email]": {
                required: true
            },
            "usuario[ci]": {    
                required: true
            },
            "usuario[password]": {
                required: true
            },
            "usuario[rep_password]": {
                required: true,
                equalTo: "#password"
            }
        }
    });

    formCrear.submitValidation(function(res){
        
        if(res) 
        {
            CallRest.post('http://localhost/codeigniter_custom_github/index.php/usuario/createAjax', 
                            formCrear.serialize(), 
                function(res)
                {
                    if(res.result==1)
                    {
                        self.ele.modal("hide");
                        Notificacions.success();
                        tablas.llenarTabla();
                    }
                });
        }
    });
}




















/**
 * 
 */
modalEditar._validacion = function()
{
    var self = this;
    var form = self.ele.find("#formEditar");
    
    form.validate({
        rules: {
            "usuario[nombres]": {
                required: true,
                minlength: 2
            },
            "usuario[paterno]": {
                required: true,
                minlength: 2
            },
            "usuario[materno]": {
                required: true,
                minlength: 2
            },
            "usuario[cuenta]": {
                required: true,
                minlength: 2
            },
            "usuario[email]": {
                required: true
            },
            "usuario[ci]": {    
                required: true
            }
        }
    });

    form.submitValidation(function(res){
        
        if(res) 
        {
            CallRest.post('http://localhost/codeigniter_custom_github/index.php/usuario/editAjax', 
                            form.serialize(), 
                function(res)
                {
                    if(res.result==1)
                    {
                        self.ele.modal("hide");
                        Notificacions.success();
                        tablas.llenarTabla();
                    }
                });
        }
    });
}

modalEditar.llenarModal = function(id)
{
    var self = this;
    if(id)
    {

        var data = { "usuario[id_usuario]": id };
        var url = 'http://localhost/codeigniter_custom_github/index.php/usuario/getUsuarioAjax';

        CallRest.post(url, data, function(res)
        {
            if(res.result==1)
            {                
                self.ele.modal("show");
                self.ele.find("input[name='usuario[nombres]']").val(res.usuario.nombres);
                self.ele.find("input[name='usuario[paterno]']").val(res.usuario.paterno);
                self.ele.find("input[name='usuario[materno]']").val(res.usuario.materno);
                self.ele.find("input[name='usuario[cuenta]']").val(res.usuario.cuenta);
                self.ele.find("input[name='usuario[cuenta]']").val(res.usuario.cuenta);
                self.ele.find("input[name='usuario[email]']").val(res.usuario.email);
                self.ele.find("input[name='usuario[ci]']").val(res.usuario.ci);                
                self.ele.find("input[name='usuario[id_usuario]']").val(res.usuario.id_usuario);                
            }
        });
    }
}
















/**
 * METODOS DEL OBJETO TABLA
 */
tablas._init = function()
{
    var self = this;
    self.llenarTabla();
}

tablas.llenarTabla = function()
{
    var self = this;
    var data = "";
    var url = 'http://localhost/codeigniter_custom_github/index.php/usuario/listaAjax';

    CallRest.post(url, data, function(res)
    {
        if(res.result==1)
        {
            tblUsuarios.clean();            
            $.each(res.usuarios, function(index, val) {
                var row = "";
                row += "<tr>";
                row += "    <td><input type='hidden'name='id_usuario' value='"+val.id_usuario+"' /></td>";
                row += "    <td>"+val.nombres+" "+val.paterno+" "+val.materno+"</td>";
                row += "    <td>"+val.cuenta+"</td>";
                row += "    <td>"+val.email+"</td>";
                row += "    <td>"+val.ci+"</td>";
                row += "    <td>$320,800</td>";
                row += "</tr>";

                tblUsuarios.append(row);                 
            });
            tblUsuarios.simpleSelectExport();    
        }
    });
}


modalAsignarRol.llenarRoles = function()
{   
    var self = this;
    self.ele.modal("show");
    if(tblUsuarios.getIds()[0]>0)
    {    
        self.ele.find('select[name="id_rol[]"]').select2({
            width: '100%',
            placeholder: 'Buscar Rol.',
            minimumInputLength: 0,
            ajax: {
                url: 'http://localhost/codeigniter_custom_github/index.php/rol/listAjax',
                data: function (params) {
                    var query = {
                        search: params.term,
                        page: params.page || 1
                    }

                  // Query parameters will be ?search=[term]&page=[page]
                  return query;
                },
                processResults: function (data, params) {

                    params.page = params.page || 1;

                    return {
                        results: $.map(data.rols, function(obj) {
                                    return { id: obj.id_rol, text: obj.denominacion };
                                }),
                        pagination: {
                            more: (params.page * 5) < data.total_count
                        }
                    };
                }
            },
        });
        
    }

    function nuevo()
    {

    }
}













$(document).ready(function() {

    botonera.init();
    buscador.init();
    tablas.init();
    modalCrear.init();
    modalEditar.init();
    

    // $('#datetimepicker1').datetimepicker();   
    // $('#sandbox-container .input-group.date').datepicker({
    //     weekStart: "dsasd1223123",
    //     startView: 1,
    //     todayBtn: "linked",
    //     clearBtn: true,
    //     language: "es",
    //     orientation: "bottom auto",
    //     daysOfWeekDisabled: "0,1"
    // }); 





    

    


    var defaultData = [
          {
            text: 'Parent 1',
            href: '#parent1',
            tags: ['4'],
            nodes: [
              {
                text: 'Child 1',
                href: '#child1',
                tags: ['2'],
                nodes: [
                  {
                    text: 'Grandchild 1',
                    href: '#grandchild1',
                    tags: ['0']
                  },
                  {
                    text: 'Grandchild 2',
                    href: '#grandchild2',
                    tags: ['0']
                  }
                ]
              },
              {
                text: 'Child 2',
                href: '#child2',
                tags: ['0']
              }
            ]
          },
          {
            text: 'Parent 2',
            href: '#parent2',
            tags: ['0']
          },
          {
            text: 'Parent 3',
            href: '#parent3',
             tags: ['0']
          },
          {
            text: 'Parent 4',
            href: '#parent4',
            tags: ['0']
          },
          {
            text: 'Parent 5',
            href: '#parent5'  ,
            tags: ['0']
          }
        ];

        
    $('#treeview1').treeview({
        data: defaultData
    });


    
    
    // dataTablaExample.simple();





    // $('#datetimepicker1').datetimepicker();

    
    

});