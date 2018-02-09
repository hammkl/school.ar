Ext.define('SchoolAR.sys.view.UserPanel', {
    extend: 'Ext.Panel',
    xtype: 'userpanel',

    controller: 'user',
    viewModel: 'user',
    
    requires: [
    	'SchoolAR.sys.model.User',
    	'SchoolAR.sys.store.UserStore',
    	'SchoolAR.sys.store.ProfessorStore',
    	'SchoolAR.sys.viewmodel.UserViewModel',
    	'SchoolAR.sys.controller.UserController',
    	'SchoolAR.sys.view.UserGrid',
    	'SchoolAR.sys.view.UserFormWindow',
    	'SchoolAR.sys.view.ProfessorCombo',
    	'SchoolAR.ar.controller.BookmarkController',
    	'SchoolAR.ar.viewmodel.BookmarkViewModel',
    	'SchoolAR.ar.view.BookmarkGrid',
    	'Ext.form.field.Text',
        'Ext.toolbar.TextItem'
    ],
    initComponent: function() {
    	Ext.apply(this, {
    		title: 'Users',
    		iconCls: 'fa fa-user',
    		autoScroll: true,
    		layout: 'fit',
    		items: [{
    			title: 'Users', 
    			iconCls: 'fa fa-user', 
    			reference: 'grid',
    			xtype: 'usergrid'
    		}],
    		listeners: {
            	activate: function(panel, eOpts) {
            		this.getViewModel().getStore('Users').reload({
                		params: {
            		        start: 0,
            		        limit: 25
            		    }
                	});
            	}
            }
    	});
    	this.callParent();
    	this.getViewModel().getStore('Users').load({
    		params: {
		        start: 0,
		        limit: 25
		    }
    	});
    }
});
