
var Notificacions = {
	success: function(message){
		var msg = (message && message!="")? message: 'Existieron errores al procesar sus datos.';
		PNotify.desktop.permission();
	    (new PNotify({
	        title: 'Correcto.',
	        text: msg,
	        type: 'success',
	        desktop: {
	            desktop: true
	        }
	    })); 
	},
	errors: function(message){
		var msg = (message && message!="")? message: 'Existieron errores al procesar sus datos.';
		PNotify.desktop.permission();
		(new PNotify({
		    title: 'Error.',
		    text: msg,
		    type: 'error',
		    desktop: {
		        desktop: true
		    }
		}));
	},
	warning: function(message){
		var msg = (message && message!="")? message: 'Existieron errores al procesar sus datos.';
		PNotify.desktop.permission();
		(new PNotify({
		    title: 'Advertencia.',
		    text: msg,
		    desktop: {
		        desktop: true,
		        icon: 'includes/le_happy_face_by_luchocas-32.png'
		    }
		}));
	},
	info: function(message){
		var msg = (message && message!="")? message: 'Existieron errores al procesar sus datos.';
		PNotify.desktop.permission();
		(new PNotify({
		    title: 'Información.',
		    text: msg,
		    type: 'info',
		    desktop: {
		        desktop: true
		    }
		}));
	}
}