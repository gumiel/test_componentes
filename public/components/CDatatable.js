function CDataTable(element)
{
	this.element = element;
    this.table   = null;
	this.dataSelected   = [];
	
	var configIni = {
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

    var configSelectMultiple = {
        responsive: true,
        colReorder: true,
        columnDefs: [ {
            orderable: false,
            className: 'select-checkbox',
            targets:   0
        } ],
        select: {
            style:    'multi',
            selector: 'td:first-child'
        },
        order: [[ 1, 'asc' ]],
    };

    var configSelectSimple = {
    	columnDefs: [ {
            orderable: false,
            className: 'select-checkbox',
            targets:   0
        } ],
        select: {
            style:    'os',
            selector: 'td:first-child'
        },
        order: [[ 1, 'asc' ]]
	};

	var configExports = {
		dom: 'Bfrtip',
        // buttons: [
        //     'copy', 'csv', 'excel', 'pdf', 'print'
        // ],
        buttons: [
            {
                extend:    'copyHtml5',
                text:      '<i class="glyphicon glyphicon-save-file">Copiar</i>',
                titleAttr: 'Copiar'
            },
            {
                extend:    'excelHtml5',
                text:      '<i class="glyphicon glyphicon-save-file">Excel</i>',
                titleAttr: 'Excel'
            },
            {
                extend:    'csvHtml5',
                text:      '<i class="glyphicon glyphicon-save-file">CSV</i>',
                titleAttr: 'CSV'
            },
            {
                extend:    'pdfHtml5',
                text:      '<i class="glyphicon glyphicon-save-file">PDF</i>',
                titleAttr: 'PDF'
            },
            {
                extend:    'print',
                text:      '<i class="glyphicon glyphicon-save-file">Imprimir</i>',
                titleAttr: 'Imprimir'
            },
        ]
	};

    this.simple = function ()
    {
    	this.table = $(this.element).DataTable(configIni);
    	this.table.rows( { selected: true } ).data();
    };

    this.clean = function()
    {

        if(this.table){
            this.table.destroy();
            this.dataSelected   = []; 
        }

        if($(this.element).find('tbody').length>0){
            $(this.element).find('tbody').html("");
        }else{
            $(this.element).html("");
        }
    }

    this.append = function(row)
    {
        if($(this.element).find('tbody').length>0){
            $(this.element).find('tbody').append(row);
        }else{
            $(this.element).append(row);
        }
    }

    this.simpleSelect = function()
    {
    	this.buildCheckboxs();
    	var config = Object.assign(configSelectSimple, configIni);
    	this.table = $(this.element).DataTable(config);
        this.accumulated();
        this.table.rows( { selected: true } ).data();
    };

    this.simpleSelectExport = function()
    {

        
        this.buildCheckboxs();
        var config1 = Object.assign(configSelectSimple, configIni);
        var config = Object.assign(configExports, config1);
        this.table = $(this.element).DataTable(config);
        this.accumulated();
        this.table.rows( { selected: true } ).data();
        // this.table.clear().draw();
    };

    this.multiSelect = function()
    {
        this.buildCheckboxs();
        var config1 = Object.assign(configSelectMultiple, configIni);
        this.table = $(this.element).DataTable(config1);
        this.accumulated();
        this.table.rows( { selected: true } ).data();
    };

    this.multiSelectExport = function()
    {
    	this.buildCheckboxs();
    	var config1 = Object.assign(configSelectMultiple, configIni);
    	var config = Object.assign(configExports, config1);
    	this.table = $(this.element).DataTable(config);
        this.accumulated();
        this.table.rows( { selected: true } ).data();
    };

    this.buildCheckboxs = function ()
    {
    	$(this.element).find('[data-type~="checkbox"]').each(function(index, el) {
    		var id = $(el).data('id');
    		$(el).html('<input type="checkbox" name="data[]" value="'+id+'" />');
    	});
    };

    this.accumulated = function()
    {
        var self = this;
        self.table
        .on( 'select', function ( e, dt, type, indexes ) {
            var rowData = self.table.rows( indexes ).data().toArray();
            console.log( self.table.rows( indexes ).data() );
            self.dataSelected.push(rowData[0]);
        } )
        .on( 'deselect', function ( e, dt, type, indexes ) {
            var rowData = self.table.rows( indexes ).data().toArray();
            console.log(  rowData );
            self.removeItemFromArr ( self.dataSelected, rowData[0] );
        } );
    };

    this.removeItemFromArr = function( arr, item ) {
        var i = arr.indexOf( item );
        arr.splice( i, 1 );
    };

    this.getIds = function()
    {
        var ids = [];
        this.dataSelected.forEach( function(element, index) {
            ids.push($(element[0]).html());
        });
        return ids;
    };


}