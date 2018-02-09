Ext.define('SchoolAR.sys.controller.PublisherController', {
    extend: 'Ext.app.ViewController',

    alias: 'controller.publisher',

    onRowDoubleClick: function(grid, record , element , rowIndex , e , eOpts ) {
    	
    	var view = this.getView();
    	var viewModel = this.getViewModel();
    	
    	var store = viewModel.getStore('Publishers');
    	var win = Ext.create('SchoolAR.sys.view.PublisherFormWindow', {
    		listeners: {
    			close: function(panel, eOpts) {
    				store.reload();
    			}
    		}
    	});
    	win.down('form').getForm().load({
    		url: 'api/publisher/' + record.data.id,
    		method: 'GET',
    		success: function(response, opts) {
    			win.getViewModel().getStore('Catalogues').load({
    	    		params: {
    	    			publisher: record.data.id,
    	    			userId: localStorage.getItem("userId")
    	    		}
    	    	});
    			win.getViewModel().getStore('Targets').load({
    	    		params: {
    	    			publisher: record.data.id
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
    	var store = this.getViewModel().getStore('Publishers');
    	var win = Ext.create('SchoolAR.sys.view.PublisherFormWindow', {
    		listeners: {
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
    	Ext.Ajax.request({
    	   	url: (values.id)?
    	   			'api/publisher/' + values.id:
    	   			'api/publisher',
    	   	method: (values.id)?'PUT':'POST',
	      	jsonData: Ext.util.JSON.encode(values),
    	   	success: function(response, opts) {
    	   		var obj = Ext.decode(response.responseText);
    	        Ext.Msg.alert('Notice', obj.message);
    	        var record = Ext.create('SchoolAR.sys.model.Publisher', obj.data)
    	        form.loadRecord(record);
    	   	},
    	   	failure: function(response, opts){
    	   		console.log('server-side failure with status code ' + response.status);
    	   		Ext.Msg.alert('Error', 'server-side failure with status code ' + response.status);
    	   	}
    	});
    },
    
    onDelete: function(button, e) {
    	var viewModel = this.getViewModel();
    	var grid = this.getView();
    	var store = grid.getStore();
    	var selection = grid.getSelectionModel().getSelection();

    	if (selection) { 
            Ext.Msg.confirm('Delete Publisher', 'Delete this Publisher', function(button) {
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
    
    
    
    
    /*
    
    onRowDoubleClickCatalogue: function(grid, record , element , rowIndex , e , eOpts ) {
    	var store = this.getViewModel().getStore('Catalogues');
    	var win = Ext.create('SchoolAR.sets.view.CatalogueFormWindow', {
    		listeners: {
    			close: function(panel, eOpts) {
    				store.reload();
    			}
    		}
    	});
    	win.down('form').getForm().loadRecord(record);
    	this.getViewModel().getStore('Targets').load({
    		params: {
    			catalogue: record.data.id
    		}
    	});
    	win.show();
    },
    
    onAddCatalogue: function(button, e) {
    	var store = this.getViewModel().getStore('Catalogues');
    	var win = Ext.create('SchoolAR.sets.view.CatalogueFormWindow', {
    		listeners: {
    			close: function(panel, eOpts) {
    				store.reload();
    			}
    		}
    	});
    	var form = this.getView().down('form').getForm();
    	var values = form.getValues();
    	win.down('form').getForm().loadRecord(Ext.create('SchoolAR.sys.model.Publisher', {
    		publisher_id: values.id
    	}));
    	win.show(); 
    },
    
    */
    
    
});