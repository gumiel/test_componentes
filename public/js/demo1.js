require(["public/js/r.js"])

var tblUsuarios  = new CDataTable('#tblUsuarios');

var tablas      = new ContainerJS("#tablas");
var botonera    = new ContainerJS("#botonera");
var modalCrear  = new ContainerJS("#modalCrear");
var modalEditar = new ContainerJS("#modalEditar");
var buscador    = new ContainerJS("#buscador");


















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
        modalEditar.llenarModal(tblUsuarios.getIds()[0]);      
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
    this.validacion();    
}

modalCrear.openModal = function()
{
    var self = this;
    self.ele.modal("show");
    self.ele.find('select[name="profesion"]').select2();
}


modalCrear.validacion = function()
{
    var self = this;
    var formCrear = self.ele.find("#formCrear");
    
    formCrear.validate({
        rules: {
            "nombres": {
                required: true,
                minlength: 2
            },
            "paterno": {
                required: true,
                minlength: 5
            },
            "materno": {
                required: true,
                minlength: 5
            },
        }
    });

    formCrear.submitValidation(function(res){
        if(res) {
            alert("SI");
            console.log(formCrear.serializeJSON());
        }
    });
}




















/**
 * 
 */
modalEditar.llenarModal = function(id)
{
    var data = { "usuario[id_usuario]": id };
    var url = 'http://localhost/codeigniter_custom_github/index.php/usuario/getUsuarioAjax';

    CallRest.post(url, data, function(res)
    {
        if(res.result==1)
        {
            console.log(res.usuario);
        }
    });
}
















/**
 * METODOS DEL OBJETO TABLA
 */
tablas._init = function()
{
    var self = this;
    var data = "";
    var url = 'http://localhost/codeigniter_custom_github/index.php/usuario/listaAjax';

    CallRest.post(url, data, function(res)
    {
        if(res.result==1)
        {
            $.each(res.usuarios, function(index, val) {
                var row = "";
                row += "<tr>";
                row += "    <td><span style='display:none'>"+val.id_usuario+"</span></td>";
                row += "    <td>"+val.nombres+" "+val.paterno+" "+val.materno+"</td>";
                row += "    <td>"+val.cuenta+"</td>";
                row += "    <td>"+val.email+"</td>";
                row += "    <td>"+val.ci+"</td>";
                row += "    <td>$320,800</td>";
                row += "</tr>";
                self.ele.find("#tblUsuarios tbody").append(row);
            });
            tblUsuarios.simpleSelectExport();    
        }
    });
    
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





    $(document).on('click', '.panel-heading span.clickable', function(e){
        var $this = $(this);
        if(!$this.hasClass('panel-collapsed')) {
            $this.parents('.panel').find('.panel-body').slideUp();
            $this.addClass('panel-collapsed');
            $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
            
        } else {
            $this.parents('.panel').find('.panel-body').slideDown();
            $this.removeClass('panel-collapsed');
            $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
            
        }
    });

    


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