Ext.define('SchoolAR.sets.view.CatalogueGrid', {
    extend: 'Ext.grid.Panel',
    xtype: 'cataloguegrid',
    
    controller: 'catalogue',
    
    bind:{
        store: '{Catalogues}'
    },
    
    initComponent: function() {
    	Ext.apply(this, {
    		autoScroll: true,
    		columns: [
    			{xtype: 'rownumberer'},
    			{ text: 'Image',  dataIndex: 'id', width: 100, renderer: function(value) {
    				return '<img src="api/catalogue/' + value + '/image?' + new Date().getTime() + '" width="80"/>';
    			}},
    	    	{ text: 'Name',  dataIndex: 'name', width: 360 },
                { text: 'Publisher',  dataIndex: 'publisher_name', width: 220 },
                { text: 'Catalogue Type',  dataIndex: 'cataloguetype_name', width: 220}
    	    ],
    	    tbar: ['->', {
    	    	text: 'Add',
    	    	iconCls: 'fa fa-circle',
    	    	handler: 'onAdd'
    	    },{
    	    	text: 'Delete',
    	    	iconCls: 'fa fa-circle',
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
