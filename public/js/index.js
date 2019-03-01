
// function DataTableCI(element)
// {
// 	this.element = element;
// 	this.table;
	
// 	var config = {
//     	language: {
//         "decimal": "",
//         "emptyTable": "No hay información",
//         "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
//         "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
//         "infoFiltered": "(Filtrado de _MAX_ total entradas)",
//         "infoPostFix": "",
//         "thousands": ",",
//         "lengthMenu": "Mostrar _MENU_ Entradas",
//         "loadingRecords": "Cargando...",
//         "processing": "Procesando...",
//         "search": "Buscar:",
//         "zeroRecords": "Sin resultados encontrados",
//         "paginate": {
// 	            "first": "Primero",
// 	            "last": "Ultimo",
// 	            "next": "Siguiente",
// 	            "previous": "Anterior"
// 	        }
// 	    },
// 	    rowReorder: true
//     };

//     this.simple = function ()
//     {
//     	this.buildCheckboxs();
//     	this.table = $(this.element).DataTable(config);
//     	this.table.rows( { selected: true } ).data();
//     }

//     this.buildCheckboxs = function ()
//     {
//     	$(this.element).find('[data-type~="checkbox"]').each(function(index, el) {
//     		var id = $(el).data('id');
//     		$(el).html('<input type="checkbox" name="data[]" value="'+id+'" />')
//     	});
//     }

//     this.simpleSelect = function()
//     {

//     }




// }




// var dataTablaExample = new DataTableCI('#example');
// console.log(dataTablaExample.element);

var dtEjemplo = new CDataTable('#example');

$(document).ready(function() {
    

$(document).ready(function() {

    dtEjemplo.simpleExports();

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

    $('#nacimiento').mask("00/00/0000", {placeholder: "__/__/____"});


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


    $('#input').select2();
    $('#input2').select2();
    // dataTablaExample.simple();
    var events = $('#events');
    // var table = $('#example').DataTable( {
        // columnDefs: [ {
        //     orderable: false,
        //     className: 'select-checkbox',
        //     targets:   0
        // } ],
        // select: {
        //     style:    'multi',
        //     selector: 'td:first-child'
        // },
        // order: [[ 1, 'asc' ]],
        // buttons: [
        //     {
        //         text: 'Get selected data',
        //         action: function () {
        //             var count = table.rows( { selected: true } ).count();
        //             console.log(table.rows( { selected: true } ).data());
        //             events.prepend( '<div>'+count+' row(s) selected</div>' );
        //         }
        //     }
        // ],
        // dom: 'Bfrtip',
    // } ); 

    // table.on( 'selectItems', function ( e, dt, items ) {
    //     console.log( 'Items to be selected are now: ', items );
    // } );

    // table.on( 'select', function ( e, dt, type, indexes ) {
    //     if ( type === 'row' ) {
    //         var data = table.rows( indexes ).data().pluck( 'id' );
    //         console.log(table.rows( { selected: true } ).data());
    //         // do something with the ID of the selected items
    //     }
    // } );





    // $('#datetimepicker1').datetimepicker();

    
 
    var valFormCrearUsuario = $("#formCrearUsuario").validate({
        rules: {
            "nombres": {
                required: true,
                minlength: 2
            },
            "paterno": {
                required: true,
                minlength: 5
            },
        }
    });

    valifda

    $( "#formCrearUsuario" ).submit(function( event ) {
        alert( "Handler for .submit() called." );
        event.preventDefault();
    });

    
    form.valid()
    

});