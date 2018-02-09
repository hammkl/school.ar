Ext.define('SchoolAR.sys.controller.LoginController', {
    extend: 'Ext.app.ViewController',
    alias: 'controller.login',

    onLoginClick: function() {
    	var view = this.getView();
    	var data = view.down('form').getForm().getValues();
    	Ext.Ajax.request({
    	   	url: 'api/login',
    	   	method: 'POST',
    	   	params: data,
    	   	success: function(response) {
    	   		var result = Ext.decode(response.responseText);
    	   		if(result.success) {
    	   			localStorage.setItem("SchoolArLoggedIn", true);
	    	   		localStorage.setItem("userId", result.data.id);
	    	   		localStorage.setItem("IsProfessor", result.data.isProfessor);
	    	   		localStorage.setItem("IsAdmin", result.data.isAdmin);
	    	   		view.destroy();
	    	        Ext.create({
	    	            xtype: 'app-main'
	    	        });
    	   		} else {
    	   			Ext.Msg.alert('Error', result.message);
    	   		}
    	   	},
    	   	failure: function(response) {
    	   		var result = Ext.decode(response.responseText);
    	   		Ext.Msg.alert('Error', result.message);
    	   	}
    	});

    },
    onRegisterClick: function(button) {
    	var window = Ext.create('SchoolAR.sys.view.RegisterForm',{
    	});
    	window.show();
    }
});