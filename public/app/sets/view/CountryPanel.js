Ext.define('SchoolAR.sets.view.CountryPanel', {
    extend: 'Ext.Panel',
    xtype: 'countrypanel',

    controller: 'country',
    viewModel: 'country',
    
    requires: [
    	'SchoolAR.sets.model.Country',
    	'SchoolAR.sets.store.CountryStore',
    	'SchoolAR.sets.controller.CountryController',
    	'SchoolAR.sets.viewmodel.CountryViewModel',
    	'SchoolAR.sets.view.CountryEditableGrid',
    	'Ext.grid.plugin.CellEditing',
        'Ext.form.field.Text',
        'Ext.toolbar.TextItem'
    ],
    
    initComponent: function() {
    	
    	Ext.apply(this, {
    		title: 'Countries',
    		iconCls: 'fa fa-globe',
    		autoScroll: true,
    		layout: 'fit',
    		items: [{
    			title: 'Countries', 
    			iconCls: 'fa fa-globe', 
    			reference: 'grid',
    			xtype: 'countryeditablegrid'
    		}],
    		listeners: {
            	activate: function(panel, eOpts) {
            		this.getViewModel().getStore('Countries').reload({
            			params: {
            		        start: 0,
            		        limit: 25
            		    }
                	});
            	}
            }
    	});
    	
    	this.getViewModel().getStore('Countries').load({
			params: {
		        start: 0,
		        limit: 25
		    }
    	});
    	this.callParent();
    }
});
