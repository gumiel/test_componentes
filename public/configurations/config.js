/**
 * Variables de configuracion
 */


var Config = {
	folderServer  : "/",
	folder  : "/",
	domain : document.domain,
	protocol : window.location.protocol,
	baseUrl : function(){
		return this.protocol + "//" + this.domain + this.folderServer;
	},
	siteUrl : function(){
		return this.protocol + "//" + this.domain + this.folderServer + this.folder;
	}
};
