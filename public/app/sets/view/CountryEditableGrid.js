Ext.define('SchoolAR.sets.view.CountryEditableGrid', {
    extend: 'Ext.grid.Panel',
    xtype: 'countryeditablegrid',

    bind:{
        store:'{Countries}'
    },
    
    initComponent: function() {
    	var cellediting = Ext.create('Ext.grid.plugin.CellEditing', {
            clicksToEdit: 1
        });
    	Ext.apply(this, {
    		editing: cellediting,
    		plugins: [cellediting],
    		columns: [
    	    	{xtype: 'rownumberer'},
    	    	{ text: 'Code',  dataIndex: 'code', width: 80, field: {
                    type: 'textfield'
                }},
    	        { text: 'Name',  dataIndex: 'name', width: 220, field: {
                    type: 'textfield'
                }}
    	    ],
    	    tbar: ['->', {
    	    	text: 'Add',
    	    	iconCls: 'fa fa-globe',
    	    	handler: 'onAdd'
    	    },{
    	    	text: 'Save',
    	    	iconCls: 'fa fa-globe',
    	    	handler: 'onSave'
    	    },{
    	    	text: 'Delete',
    	    	iconCls: 'fa fa-globe',
    	    	handler: 'onDelete'
    	    }],
    	    bbar: {
    	        xtype: 'pagingtoolbar',
    	        displayInfo: true
    	    }
    	});
    	this.callParent();
    }
});
