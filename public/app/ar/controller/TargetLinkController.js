Ext.define('SchoolAR.ar.controller.TargetLinkController', {
    extend: 'Ext.app.ViewController',

    alias: 'controller.targetlink',

    onAdd: function(button, e) {
    	var targetId = this.getViewModel().get('target').id;
    	var store = this.getViewModel().getStore('TargetLinks');
    	store.insert(0, Ext.create('SchoolAR.ar.model.TargetLink', {
    		target_id: targetId 
    	}));
    },
    
    onSave: function(button, e) {
    	var store = this.getViewModel().getStore('TargetLinks');
    	
    	var targetId = this.getViewModel().get('target').id;
    	store.proxy.url = 'api/target/' + targetId + '/link';
    	
    	var grid = this.getView();
    	grid.editing.cancelEdit();
    	store.sync();
    	store.reload();
    },
    
    onDelete: function(button, e) {
    	var store = this.getViewModel().getStore('TargetLinks');
    	var targetId = this.getViewModel().get('target').id;
    	store.proxy.url = 'api/target/' + targetId + '/link';
    	
    	var grid = this.getView();
    	grid.editing.cancelEdit();
    	
    	var selection = grid.getSelectionModel().getSelection();
    	
    	if (selection) { 
            Ext.Msg.confirm('Delete Link', 'Delete this Links', function(button) {
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