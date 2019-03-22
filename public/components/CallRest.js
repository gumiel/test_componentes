var CallRest = {
	config: {
		url: '',
		type: '',
		dataType: 'json',
		data: {},
		async: true,
	},
	post: function(url, data, callback){
		
		this.config.url = url;
		this.config.data = data;
		this.config.type = 'POST';
		
		$.ajax(this.config)
		.done(function(result) {
			return callback(result);
		})
		.fail(function() {
			console.log("error");
		});	
	},
	get : function(url, data, callback){
		
		this.config.url = url;
		this.config.data = data;
		this.config.type = 'GET';
		
		$.ajax(this.config)
		.done(function(result) {
			return callback(result);
		});	
	}  
	
	
};