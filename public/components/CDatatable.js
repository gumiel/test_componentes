function CDataTable(element)
{
    var constructor = function (){
        $(element).closest('.preloadContainer').find('table').css("display","none");
        // $(element).closest('.preloadContainer').prepend('<div class="spanLoader" style="text-align:center; background: #cce8ca"><img src="public/images/rotor.gif" alt="Cargando..."> Cargando...</div>');
    };
    constructor();


	this.element = element;
    this.table   = null;
	this.dataSelected   = [];
	
	var configIni = {
        responsive: true,
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
        select: true,
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
        this.dataSelected   = []; 


        if(this.table && $.fn.DataTable.isDataTable( this.element )){
            this.table.destroy();
        }

        if($(this.element).find('tbody').length>0){
            $(this.element).find('tbody').html("");
        }else{
            $(this.element).html("");
        }
        $(this.element).closest('.preloadContainer').find('.spanLoader').css("display","block");
        $(this.element).closest('.preloadContainer').find('table').css("display","none");
    };

    this.append = function(row)
    {
        if($(this.element).find('tbody').length>0){
            $(this.element).find('tbody').append(row);
        }else{
            $(this.element).append(row);
        }
    };

    this.html = function(tabla)
    {
        if($(this.element).find('tbody').length>0){
            $(this.element).find('tbody').html(tabla);
        }else{
            $(this.element).html(tabla);
        }
    };

    this.simpleSelect = function()
    {   
        $(this.element).closest('.preloadContainer').find('table').css("display","block");
        $(this.element).closest('.preloadContainer').find('.spanLoader').css("display","none");
    	this.buildCheckboxs();
    	var config = Object.assign(configSelectSimple, configIni);
    	this.table = $(this.element).DataTable(config);
        this.accumulated();
        this.table.rows( { selected: true } ).data();
    };

    this.simpleSelectExport = function()
    {

        // $(this.element).closest('.preloadContainer').css("display","block");
        $(this.element).closest('.preloadContainer').find('table').css("display","block");
        $(this.element).closest('.preloadContainer').find('.spanLoader').css("display","none");
        this.buildCheckboxs();
        var config1 = Object.assign(configSelectSimple, configIni);
        var config = Object.assign(configExports, config1);
        this.table = $(this.element).DataTable(config);
        this.accumulated();
        this.table.rows( { selected: true } ).data();
        // this.table.clear().draw();
        // this.select();
    };

    this.OnSelect = function(callback)
    {
        var self = this;
        this.table.on( 'select', function ( e, dt, type, indexes ) {
            if ( type === 'row' ) {
                var data = self.table.rows( indexes ).data().pluck( 'id' );
                // alert(data);
                var rowData = self.table.rows( indexes ).data().toArray(); 
                var elements = $.parseHTML(rowData[0][0]);

                var objectRow = [];
                objectRow = self.convertElementsHtmlToObject(elements);

                return callback(objectRow);
            }
        });
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
            self.dataSelected.push(rowData[0]);
        } )
        .on( 'deselect', function ( e, dt, type, indexes ) {
            var rowData = self.table.rows( indexes ).data().toArray();            
            self.removeItemFromArr ( self.dataSelected, rowData[0] );
        } );
    };

    this.removeItemFromArr = function( arr, item ) {
        var i = arr.indexOf( item );
        arr.splice( i, 1 );
    };

    this.getIds = function()
    {
        var self = this;
        var ids = [];
        this.dataSelected.forEach( function(element, index) {
            var elements = $.parseHTML(element[0]);
            var objectRow = [];
            objectRow = self.convertElementsHtmlToObject(elements);
            ids.push(objectRow);
        });
        return ids;
    };

    this.convertElementsHtmlToObject = function(elements)
    {
        var self = this;
        var objectRow = [];
        elements.forEach(function(dataElements){
            var attribute = {};
            var name  = $(dataElements).prop('name');
            var value = $(dataElements).val();
            // eval('attribute = {"'+name+'":'+value+'}');
            if(self.isInt(value)){
                value = parseInt(value);
            }

            if(typeof name != 'undefined'){
                attribute[name] = value;
                objectRow = Object.assign(objectRow, attribute);
            }
        });
        return objectRow;
    };

    this.isInt = function (x){
        var y = parseInt(x);
        if (isNaN(y)) 
            return false;
        return x == y && x.toString() == y.toString();
    };

    this.isBoolean = function (x){
        // Falta crear la validacion
    };
    
    this.isFloat = function (x){
        // falta crear la validacion
    };

}