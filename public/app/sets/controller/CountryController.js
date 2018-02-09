Ext.define('SchoolAR.sets.controller.CountryController', {
    extend: 'Ext.app.ViewController',

    alias: 'controller.country',

    onAdd: function(button, e) {
    	var store = this.getViewModel().getStore('Countries');
    	store.insert(0, Ext.create('SchoolAR.sets.model.Country', {}));
    },
    
    onSave: function(button, e) {
    	var store = this.getViewModel().getStore('Countries');
    	var grid = this.getView().down('grid');
    	grid.editing.cancelEdit();
    	store.sync();
    	store.reload();
    },
    
    onDelete: function(button, e) {
    	var store = this.getViewModel().getStore('Countries');
    	var grid = this.getView().down('grid');
    	grid.editing.cancelEdit();
    	var selection = grid.getSelectionModel().getSelection();
    	if (selection) { 
            Ext.Msg.confirm('Delete Country', 'Delete this Country', function(button) {
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