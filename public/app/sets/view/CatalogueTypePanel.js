Ext.define('SchoolAR.sets.view.CatalogueTypePanel', {
    extend: 'Ext.Panel',
    xtype: 'cataloguetypepanel',

    controller: 'cataloguetype',
    viewModel: 'cataloguetype',
    
    requires: [
    	'SchoolAR.sets.model.CatalogueType',
    	'SchoolAR.sets.store.CatalogueTypeStore',
    	'SchoolAR.sets.controller.CatalogueTypeController',
    	'SchoolAR.sets.viewmodel.CatalogueTypeViewModel',
    	'SchoolAR.sets.view.CatalogueTypeEditableGrid',
    	'Ext.grid.plugin.CellEditing',
        'Ext.form.field.Text',
        'Ext.toolbar.TextItem'
    ],
    
    initComponent: function() {
    	
    	Ext.apply(this, {
    		title: 'Catalogue Types',
    		iconCls: 'fa fa-circle-o',
    		autoScroll: true,
    		layout: 'fit',
    		items: [{
    			title: 'Catalogue Types', 
    			iconCls: 'fa fa-circle-o', 
    			reference: 'grid',
    			xtype: 'cataloguetypeeditablegrid'
    		}],
    		listeners: {
            	activate: function(panel, eOpts) {
            		this.getViewModel().getStore('CatalogueTypes').reload({
            			params: {
            		        start: 0,
            		        limit: 25
            		    }
                	});
            	}
            }
    	});
    	
    	this.getViewModel().getStore('CatalogueTypes').load({
			params: {
		        start: 0,
		        limit: 25
		    }
    	});
    	this.callParent();
    }
});