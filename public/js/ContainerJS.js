function ContainerJS(elemento){
	this.ele = $(elemento);
	
	this.init = function(){ 
		var obj = this;		
		for (var property in obj)
		{
			if (typeof obj[property] == 'function')
		    {		      
		      if (property.substr(0,1)=='_')
		      {
		      	eval("this."+property+"();");
		      }
		    }

		}
	};
	
	this.methodsInitUsed = function()
	{
		var obj = this;
		var msg = "";
		for (var property in obj)
		{
			if (typeof obj[property] == 'function')
			{
			  var inicio = obj[property].toString().indexOf('function');
			  var fin = obj[property].toString().indexOf(')')+1;
			  var propertyValue=obj[property].toString().substring(inicio,fin);
			  msg +=(typeof obj[property])+' '+property+' : '+propertyValue+' ;\n';
			}
		}
		console.log(msg);
	}
}
