Ext.define('SchoolAR.sets.controller.CatalogueController', {
    extend: 'Ext.app.ViewController',

    alias: 'controller.catalogue',

    onRowDoubleClick: function(grid, record , element , rowIndex , e , eOpts ) {
    	
    	var view = this.getView();
    	var viewModel = this.getViewModel();
    	var store = viewModel.getStore('Catalogues');
    	
    	var win = Ext.create('SchoolAR.sets.view.CatalogueFormWindow', {
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
    		url: 'api/catalogue/' + record.data.id,
    		method: 'GET',
    		success: function(response, opts) {
    			win.getViewModel().getStore('Targets').load({
    	    		params: {
    	    			catalogue: record.data.id
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
    	var store = this.getViewModel().getStore('Catalogues');
    	var win = Ext.create('SchoolAR.sets.view.CatalogueFormWindow', {
    		listeners: {
    			activate: function(panel, eOpts) {
    				win.getViewModel().getStore('Professors').load();	
    			},
    			close: function(panel, eOpts) {
    				store.reload();
    			}
    		}
    	});
    	/*var form = this.getView().down('form').getForm();
    	var values = form.getValues();
    	win.down('form').getForm().load(Ext.create('SchoolAR.sets.model.Catalogue', {
    		
    	}));*/
    	win.show(); 
    },
    
    onSave: function(button, e) {
    	var form = this.getView().down('form').getForm();
    	if(form.isValid()) {
            form.submit({
            	url: 'api/catalogue/upload',
        	   	waitMsg: 'Uploading your photo...',
                success: function(fp, o) {
                	var obj = Ext.decode(o.response.responseText);
                	var record = Ext.create('SchoolAR.sets.model.Catalogue', obj.data);
                	form.loadRecord(record);
        	        viewModel.set('catalogue', obj.data);
        	        Ext.Msg.alert('Notice', o.result.message);
                },
                failure: function(response, opts){
                	console.log('server-side failure with status code ' + response.status);
        	   		Ext.Msg.alert('Error', 'server-side failure with status code ' + response.status);
        	   	}
            });
        }
    	
    },
    
    onDelete: function(button, e) {
    	var viewModel = this.getViewModel();
    	var grid = this.getView();
    	var store = grid.getStore('Catalogues');
    	var selection = grid.getSelectionModel().getSelection();
    	
    	if (selection) { 
            Ext.Msg.confirm('Delete Catalogue', 'Delete this Catalogue', function(button) {
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
    }
    
});