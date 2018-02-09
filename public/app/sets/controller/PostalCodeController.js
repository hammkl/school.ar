Ext.define('SchoolAR.sets.controller.PostalCodeController', {
    extend: 'Ext.app.ViewController',

    alias: 'controller.postalcode',
    
    require:[
    	'SchoolAR.sets.viewmodel.PostalCodeViewModel'
    ],
    
    onAdd: function(button, e) {
    	var store = this.getViewModel().getStore('PostalCodes');
    	store.insert(0, Ext.create('SchoolAR.sets.model.PostalCode', {}));
    },
    
    onSave: function(button, e) {
    	var store = this.getViewModel().getStore('PostalCodes');
    	var grid = this.getView().down('grid');
    	grid.editing.cancelEdit();
    	store.sync();
    	store.reload();
    },
    
    onDelete: function(button, e) {
    	var store = this.getViewModel().getStore('PostalCodes');
    	var grid = this.getView().down('grid');
    	grid.editing.cancelEdit();
    	var selection = grid.getSelectionModel().getSelection();
    	
    	if (selection) { 
            Ext.Msg.confirm('Delete Postal Code', 'Delete this Postal Code', function(button) {
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