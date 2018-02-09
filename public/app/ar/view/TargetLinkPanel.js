Ext.define('SchoolAR.ar.view.TargetLinkPanel', {
    extend: 'Ext.Panel',
    xtype: 'targetlinkpanel',

    controller: 'targetlink',
    viewModel: 'targetlink',
    
    requires: [
    	'SchoolAR.ar.controller.TargetLinkController',
    	'SchoolAR.ar.viewmodel.TargetLinkViewModel',
    	'SchoolAR.ar.view.TargetLinkGrid'
    ],
    
    
    initComponent: function() {
    	Ext.apply(this, {
    		title: 'Target Links',
    		iconCls: 'fa fa-targetlink',
    		autoScroll: true,
    		layout: 'fit',
    		items: [{
    			title: 'Links',
        		iconCls: 'fa fa-targetlink',
    			reference: 'grid',
    			xtype: 'targetlinkgrid'
    		}],
    		listeners: {
            	activate: function(panel, eOpts) {
            		this.getViewModel().getStore('TargetLink').reload();
            	}
            }
    	});
    	
    	this.getViewModel().getStore('TargetLink').load();
    	this.callParent();
    }
});
