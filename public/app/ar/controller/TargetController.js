Ext.define('SchoolAR.ar.controller.TargetController', {
    extend: 'Ext.app.ViewController',

    alias: 'controller.target',

    onRowDoubleClick: function(grid, record , element , rowIndex , e , eOpts ) {
    	
    	var view = this.getView();
    	var viewModel = this.getViewModel();
    	
    	var store = viewModel.getStore('Targets');
    	var win = Ext.create('SchoolAR.ar.view.TargetFormWindow', {
    		listeners: {
    			close: function(panel, eOpts) {
    				store.reload();
    			}
    		}
    	});
    	win.down('form').getForm().load({
    		url: 'api/target/' + record.data.id,
    		method: 'GET',
    		success: function(response, opts) {
    			win.getViewModel().set('target', record.data);
    			if (record.data.id) {
    				
    				var image = Ext.get('image');
	    			image.dom.attributes['src'].value='api/target/' + record.data.id + '/image?' + new Date().getTime();
	    			win.getViewModel().getStore('Catalogues').load({
	    	    		params: {
	    	    			target: record.data.id,
	    	    			userId: localStorage.getItem("userId")
	    	    		}
	    	    	});
	    			win.getViewModel().getStore('Bookmarks').load({
	    	    		params: {
	    	    			target: record.data.id
	    	    		}
	    	    	});
	    			win.getViewModel().getStore('TargetLinks').load({
	    				url: 'api/target/' + record.data.id + '/link'
	    	    	});
    			}
    	   	},
    	   	failure: function(response, opts){
    	   		console.log('server-side failure with status code ' + response.status);
    	   		Ext.Msg.alert('Error', 'server-side failure with status code ' + response.status);
    	   	}
    	});
    	
    	win.show();
    },
    
    onAdd: function(button, e) {
    	var store = this.getViewModel().getStore('Targets');
    	var win = Ext.create('SchoolAR.ar.view.TargetFormWindow', {
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
    	var viewModel = this.getViewModel();
    	if(form.isValid()) {
            form.submit({
                url: 'api/target/upload',
                waitMsg: 'Uploading your photo...',
                success: function(fp, o) {
                	var obj = Ext.decode(o.response.responseText);
        	        var record = Ext.create('SchoolAR.ar.model.Target', obj.data);
        	        
        	        viewModel.set('target', obj.data);
        	        
        	        if (obj.data.id) {
        	        	var image = Ext.get('image');
	        			//image.dom.attributes['src'].value='api/target/image/' + record.data.targetfile_id;
	                	image.imageSrc = 'api/target/' + record.data.id + '/image?' + new Date().getTime();
        	        }
        			Ext.Msg.alert('Success', o.result.message);
                },
                failure: function(response, opts){
                	console.log('server-side failure with status code ' + response.status);
        	   		Ext.Msg.alert('Error', 'server-side failure with status code ' + response.status);
        	   	}
            });
        }
    },
    
    onDelete: function(button, e) {
    	var store = this.getViewModel().getStore('Targets');
    	var grid = this.getView();
    	var selection = grid.getSelectionModel().getSelection();
    	if (selection) { 
            Ext.Msg.confirm('Delete Target', 'Delete this Target', function(button) {
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