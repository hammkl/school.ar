Ext.define('SchoolAR.ar.view.BookmarkPanel', {
    extend: 'Ext.Panel',
    xtype: 'bookmarkpanel',

    controller: 'bookmark',
    viewModel: 'bookmark',
    
    requires: [
    	'SchoolAR.ar.controller.BookmarkController',
    	'SchoolAR.ar.viewmodel.BookmarkViewModel',
    	'SchoolAR.ar.view.BookmarkGrid'
    ],
    
    
    initComponent: function() {
    	Ext.apply(this, {
    		title: 'Bookmarks',
    		iconCls: 'fa fa-bookmark',
    		autoScroll: true,
    		layout: 'fit',
    		items: [{
    			title: 'Bookmarks',
        		iconCls: 'fa fa-bookmark',
    			reference: 'grid',
    			xtype: 'bookmarkgrid'
    		}],
    		listeners: {
            	activate: function(panel, eOpts) {
            		this.getViewModel().getStore('Bookmarks').reload({
            			params: {
            		        start: 0,
            		        limit: 25
            		    }
                	});
            	}
            }
    	});
    	
    	this.getViewModel().getStore('Bookmarks').load({
			params: {
		        start: 0,
		        limit: 25
		    }
    	});
    	this.callParent();
    }
});
