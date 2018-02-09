Ext.define('SchoolAR.sets.view.CataloguePanel', {
    extend: 'Ext.Panel',
    xtype: 'cataloguepanel',

    controller: 'catalogue',
    viewModel: 'catalogue',
    
    requires: [
    	'SchoolAR.sys.model.Publisher',
    	'SchoolAR.sys.store.PublisherStore',
    	'SchoolAR.sets.model.CatalogueType',
    	'SchoolAR.sets.store.CatalogueTypeStore',
    	'SchoolAR.sets.model.Catalogue',
    	'SchoolAR.sets.store.CatalogueStore',
    	'SchoolAR.sets.view.CatalogueFormWindow',
    	'SchoolAR.sets.view.CatalogueGrid',
    	'SchoolAR.sets.viewmodel.CatalogueViewModel',
    	'SchoolAR.sets.controller.CatalogueController',
    	'SchoolAR.ar.model.Target',
    	'SchoolAR.ar.store.TargetStore',
    	'SchoolAR.ar.controller.TargetController',
    	'SchoolAR.ar.viewmodel.TargetViewModel',
    	'SchoolAR.ar.view.TargetGrid',
    	'Ext.form.field.Text',
        'Ext.toolbar.TextItem'
    ],
    
    initComponent: function() {
    	Ext.apply(this, {
    		title: 'Catalogues',
    		iconCls: 'fa fa-circle',
    		autoScroll: true,
    		layout: 'fit',
    		items: [{
    			title: 'Catalogues',
        		iconCls: 'fa fa-circle',
    			reference: 'grid',
    			xtype: 'cataloguegrid'
    		}],
    		listeners: {
            	activate: function(panel, eOpts) {
            		this.getViewModel().getStore('Catalogues').reload({
            			params: {
            				userId: localStorage.getItem("userId"),
            		        start: 0,
            		        limit: 25
            		    }
                	});
            	}
            }
    	});
    	
    	this.getViewModel().getStore('Catalogues').load({
    		params: {
				userId: localStorage.getItem("userId"),
		        start: 0,
		        limit: 25
		    }
    	});
    	this.callParent();
    }
});
