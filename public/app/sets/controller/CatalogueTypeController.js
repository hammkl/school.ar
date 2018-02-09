Ext.define('SchoolAR.sets.controller.CatalogueTypeController', {
    extend: 'Ext.app.ViewController',
    
    alias: 'controller.cataloguetype',

    onAdd: function(button, e) {
    	var store = this.getViewModel().getStore('CatalogueTypes');
    	store.insert(0, Ext.create('SchoolAR.sets.model.CatalogueType', {}));
    },
    
    onSave: function(button, e) {
    	var store = this.getViewModel().getStore('CatalogueTypes');
    	var grid = this.getView();
    	grid.editing.cancelEdit();
    	store.sync();
    	store.reload();
    },
    
    onDelete: function(button, e) {
    	var store = this.getViewModel().getStore('CatalogueTypes');
    	var grid = this.getView();
    	grid.editing.cancelEdit();
    	var selection = grid.getSelectionModel().getSelection();
    	if (selection) { 
            Ext.Msg.confirm('Delete Catalogue Type', 'Delete this Catalogue Type', function(button) {
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