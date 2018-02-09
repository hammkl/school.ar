Ext.define('SchoolAR.ar.view.TargetPanel', {
    extend: 'Ext.Panel',
    xtype: 'targetpanel',

    controller: 'target',
    viewModel: 'target',
    
    requires: [
    	'SchoolAR.ar.model.Target',
    	'SchoolAR.ar.store.TargetStore',
    	'SchoolAR.ar.controller.TargetController',
    	'SchoolAR.ar.viewmodel.TargetViewModel',
    	'SchoolAR.ar.view.TargetGrid',
    	'SchoolAR.ar.view.TargetFormWindow',
    	'SchoolAR.sets.model.Catalogue',
    	'SchoolAR.sets.store.CatalogueStore',
    	'Ext.form.field.Text',
        'Ext.toolbar.TextItem'
    ],
    
    initComponent: function() {
    	Ext.apply(this, {
    		title: 'Targets',
    		iconCls: 'fa fa-bullseye',
    		layout: 'fit',
    		autoScroll: true,
    		items: [{
    			title: 'Targets',
        		iconCls: 'fa fa-bullseye',
        		reference: 'grid',
    			xtype: 'targetgrid'
    		}],
    		listeners: {
            	activate: function(panel, eOpts) {
            		this.getViewModel().getStore('Targets').reload({
                		params: {
                			start: 0,
            		        limit: 25,
                			userId: localStorage.getItem("userId")
                	    }
                	});
            	}
            }
    	});
    	
    	this.getViewModel().getStore('Targets').load({
    		params: {
    			start: 0,
		        limit: 25,
    			userId: localStorage.getItem("userId")
    	    }
    	});
    	this.callParent();
    }
});
