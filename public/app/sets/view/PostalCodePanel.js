Ext.define('SchoolAR.sets.view.PostalCodePanel', {
    extend: 'Ext.Panel',
    xtype: 'postalcodepanel',

    controller: 'postalcode',
    viewModel: 'postalcode',
    
    requires: [
    	'SchoolAR.sets.model.Country',
    	'SchoolAR.sets.store.CountryStore',
    	'SchoolAR.sets.view.CountryCombo',
    	'SchoolAR.sets.model.PostalCode',
    	'SchoolAR.sets.store.PostalCodeStore',
    	'SchoolAR.sets.viewmodel.PostalCodeViewModel',
    	'SchoolAR.sets.controller.PostalCodeController',
    	'SchoolAR.sets.view.PostalCodeEditableGrid',
    	'Ext.grid.plugin.CellEditing',
        'Ext.form.field.Text',
        'Ext.toolbar.TextItem'
    ],
    
    initComponent: function() {
    	Ext.apply(this, {
    		title: 'Postal Codes',
    		iconCls: 'fa fa-envelope',
    		autoScroll: true,
    		layout: 'fit',
    		items: [{
    			title: 'Postal Codes', 
    			iconCls: 'fa fa-envelope', 
    			reference: 'grid',
    			xtype: 'postalcodeeditablegrid'
    		}],
    		listeners: {
            	activate: function(panel, eOpts) {
            		this.getViewModel().getStore('PostalCodes').reload({
            			params: {
            		        start: 0,
            		        limit: 25
            		    }
                	});
            	}
            }
    	});
    	
    	this.getViewModel().getStore('PostalCodes').load({
			params: {
		        start: 0,
		        limit: 25
		    }
    	});
    	this.callParent();
    }
});
