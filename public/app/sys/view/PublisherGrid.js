Ext.define('SchoolAR.sys.view.PublisherGrid', {
    extend: 'Ext.grid.Panel',
    xtype: 'publishergrid',

    controller: 'publisher',
    
    bind:{
        store: '{Publishers}'
    },
    
    initComponent: function() {
    	
    	Ext.apply(this, {
    		autoScroll: true,
    		columns: [
    			{ xtype: 'rownumberer'},
    			{ text: 'Short Name',  dataIndex: 'short_name', width: 200 },
    	    	{ text: 'Email',  dataIndex: 'email', width: 140 },
    	    	{ text: 'Active', xtype: 'checkcolumn', editable:false, dataIndex: 'active', width: 70, processEvent: function () { return false; } }
    	    ],
    	    tbar: ['->', {
    	    	text: 'Add',
    	    	iconCls: 'fa fa-qrcode',
    	    	handler: 'onAdd'
    	    },{
    	    	text: 'Delete',
    	    	iconCls: 'fa fa-qrcode',
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
