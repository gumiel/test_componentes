function DataTableCI(element)
{
	this.element = element;
	this.table;
	
	var config = {
    	language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
	            "first": "Primero",
	            "last": "Ultimo",
	            "next": "Siguiente",
	            "previous": "Anterior"
	        }
	    },
	    rowReorder: true
    };

    this.simple = function ()
    {
    	this.buildCheckboxs();
    	this.table = $(this.element).DataTable(config);
    	this.table.rows( { selected: true } ).data();
    }

    this.buildCheckboxs = function ()
    {
    	$(this.element).find('[data-type~="checkbox"]').each(function(index, el) {
    		var id = $(el).data('id');
    		$(el).html('<input type="checkbox" name="data[]" value="'+id+'" />')
    	});
    }

    this.simpleSelect = function()
    {

    }




}




var dataTablaExample = new DataTableCI('#example');
console.log(dataTablaExample.element);



$(document).ready(function() {

    
    // dataTablaExample.simple();
    var events = $('#events');
    var table = $('#example').DataTable( {
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
    } );

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
    
    $("#signupForm").validate({
        rules: {
            "nombres": {
                required: true,
                minlength: 2
            },
            "paterno": {
                required: true,
                minlength: 5
            },
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
} );