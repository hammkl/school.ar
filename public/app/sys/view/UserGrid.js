Ext.define('SchoolAR.sys.view.UserGrid', {
    extend: 'Ext.grid.Panel',
    xtype: 'usergrid',

    controller: 'user',
    
    requires: [
    	'SchoolAR.sys.model.User',
    	'SchoolAR.sys.store.UserStore',
    	'SchoolAR.sys.viewmodel.UserViewModel',
    	'SchoolAR.sys.controller.UserController',
    	'SchoolAR.sys.view.UserFormWindow',
    	'Ext.form.field.Text',
        'Ext.toolbar.TextItem'
    ],
    
    bind:{
        store: '{Users}'
    },
    
    initComponent: function() {
    	Ext.apply(this, {
    		autoScroll: true,
    		columns: [
    			{ xtype: 'rownumberer'},
    			{ text: 'Email',  dataIndex: 'email', width: 200 },
    	    	{ text: 'Name',  dataIndex: 'name', width: 140 },
                { text: 'Surname',  dataIndex: 'surname', width: 140 },
                { text: 'Active', xtype: 'checkcolumn', editable:false, dataIndex: 'active', width: 70, processEvent: function () { return false; } },
                { text: 'Professor', xtype: 'checkcolumn', dataIndex: 'isProfessor', width: 70},
                { text: 'Admin', xtype: 'checkcolumn', dataIndex: 'isAdmin', width: 70}
    	    ],
    	    tbar: ['->', {
    	    	text: 'Add',
    	    	iconCls: 'fa fa-user',
    	    	handler: 'onAdd'
    	    },{
    	    	text: 'Delete',
    	    	iconCls: 'fa fa-user',
    	    	handler: 'onDelete'
    	    }],
    	    bbar: {
    	        xtype: 'pagingtoolbar',
    	        displayInfo: true
    	    }
    	});
    	this.callParent();
    },

    listeners: {
        rowdblclick: 'onRowDoubleClick'
    }
});
