Ext.define('SchoolAR.ar.controller.BookmarkController', {
    extend: 'Ext.app.ViewController',

    alias: 'controller.bookmark',

    onAdd: function(button, e) {
    	//var store = this.getViewModel().getStore('CatalogueTypes');
    	//store.insert(0, Ext.create('SchoolAR.sets.model.CatalogueType', {}));
    },
    
    onSave: function(button, e) {
    	var store = this.getViewModel().getStore('Bookmark');
    	var grid = this.getView();
    	grid.editing.cancelEdit();
    	store.sync();
    	store.reload();
    },
    
    onDelete: function(button, e) {
    	var store = this.getViewModel().getStore('Bookmark');
    	var grid = this.getView();
    	grid.editing.cancelEdit();
    	
    	var selection = grid.getSelectionModel().getSelection();
    	
    	if (selection) { 
            Ext.Msg.confirm('Delete Bookmark', 'Delete this Bookmark', function(button) {
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