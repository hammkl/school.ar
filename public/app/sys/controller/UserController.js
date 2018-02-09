Ext.define('SchoolAR.sys.controller.UserController', {
    extend: 'Ext.app.ViewController',

    alias: 'controller.user',

    onRowDoubleClick: function(grid, record , element , rowIndex , e , eOpts ) {
    	var view = this.getView();
    	var viewModel = this.getViewModel();
    	var store = viewModel.getStore('Users');
    	var win = Ext.create('SchoolAR.sys.view.UserFormWindow', {
    		listeners: {
    			activate: function(panel, eOpts) {
    				win.getViewModel().getStore('Professors').load();	
    			},
    			close: function(panel, eOpts) {
    				store.reload();
    			}
    		}
    	});
    	
    	win.down('form').getForm().load({
    		url: 'api/user/' + record.data.id,
    		method: 'GET',
    		success: function(response, opts) {
    			win.getViewModel().getStore('Bookmarks').load({
    	    		params: {
    	    			user: record.data.id
    	    		}
    	    	});
    			win.show();
    	   	},
    	   	failure: function(response, opts){
    	   		console.log('server-side failure with status code ' + response.status);
    	   		Ext.Msg.alert('Error', 'server-side failure with status code ' + response.status);
    	   	}
    	});
    },
    
    onAdd: function(button, e) {
    	var store = this.getViewModel().getStore('Users');
    	var win = Ext.create('SchoolAR.sys.view.UserFormWindow', {
    		listeners: {
    			activate: function(panel, eOpts) {
    				win.getViewModel().getStore('Professors').load();	
    			},
    			close: function(panel, eOpts) {
    				store.reload();
    			}
    		}
    	});
    	win.show();    	
    },
    
    onSave: function(button, e) {
    	var form = this.getView().down('form').getForm();
    	var values = form.getValues();
    	
    	if (values['active']==null) values['active'] = 0;
    	if (values['isAdmin']==null) values['isAdmin'] = 0;
    	if (values['isProfessor']==null) values['isProfessor'] = 0;
    	
    	//var auth = 'Basic ' + Base64.encode(user + ':' + pass);
    	Ext.Ajax.request({
    	   	url: (values.id)?
    	   			'api/user/' + values.id:
    	   			'api/user',
    	   	method: (values.id)?'PUT':'POST',
    	    //headers : { Authorization : auth }
	      	jsonData: Ext.util.JSON.encode(values),
    	   	success: function(response, opts) {
    	   		var obj = Ext.decode(response.responseText);
    	        Ext.Msg.alert('Notice', obj.message);
    	        var record = Ext.create('SchoolAR.sys.model.User', obj.data)
    	        form.loadRecord(record);
    	   	},
    	   	failure: function(response, opts){
    	   		console.log('server-side failure with status code ' + response.status);
    	   		Ext.Msg.alert('Error', 'server-side failure with status code ' + response.status);
    	   	}
    	});
    },
    
    onDelete: function(button, e) {
    	var store = this.getViewModel().getStore('Users');
    	var grid = this.getView();
    	var selection = grid.getSelectionModel().getSelection();
    	if (selection) { 
            Ext.Msg.confirm('Delete User', 'Delete this User', function(button) {
                if (button === 'yes') {
                	selection.forEach(function(entry) {
                		store.remove(entry);
                	});
                	store.sync({
                        success: function() {
                            store.reload();
                        },
                        scope: this
                    });
                }
            }, this);
        }
    },
    doSignup: function(button, e) {
    	var form = this.getView().down('form').getForm();
    	var values = form.getValues();
    	Ext.Ajax.request({
    	   	url: 'api/signup',
    	   	method: 'POST',
	      	jsonData: Ext.util.JSON.encode(values),
    	   	success: function(response, opts) {
    	   		var obj = Ext.decode(response.responseText);
    	        Ext.Msg.alert('Notice', obj.message);
    	   	},
    	   	failure: function(response, opts){
    	   		console.log('server-side failure with status code ' + response.status);
    	   		Ext.Msg.alert('Error', 'server-side failure with status code ' + response.status);
    	   	}
    	});
    },
    
    
});