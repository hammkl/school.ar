Ext.define('SchoolAR.sys.view.PublisherPanel', {
    extend: 'Ext.Panel',
    xtype: 'publisherpanel',

    controller: 'publisher',
    viewModel: 'publisher',
    
    requires: [
    	'SchoolAR.sets.model.PostalCode',
    	'SchoolAR.sets.store.PostalCodeStore',
    	'SchoolAR.sys.model.Publisher',
    	'SchoolAR.sys.store.PublisherStore',
    	'SchoolAR.sys.viewmodel.PublisherViewModel',
    	'SchoolAR.sys.controller.PublisherController',
    	'SchoolAR.sys.view.PublisherGrid',
    	'Ext.form.field.Text',
        'Ext.toolbar.TextItem'
    ],
    
    initComponent: function() {
    	Ext.apply(this, {
    		title: 'Publishers',
    		iconCls: 'fa fa-qrcode',
    		autoScroll: true,
    		layout: 'fit',
    		items: [{
    			title: 'Publishers',
        		iconCls: 'fa fa-qrcode',
        		reference: 'grid',
    			xtype: 'publishergrid'
    		}],
    		listeners: {
            	activate: function(panel, eOpts) {
            		this.getViewModel().getStore('Publishers').reload({
                		params: {
            		        start: 0,
            		        limit: 25
            		    }
                	});
            	}
            }
    	});
    	
    	this.getViewModel().getStore('Publishers').load({
    		params: {
		        start: 0,
		        limit: 25
		    }
    	});
    	this.callParent();
    }
});
