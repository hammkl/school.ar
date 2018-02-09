Ext.define('SchoolAR.ar.view.TargetLinkGrid', {
    extend: 'Ext.grid.Panel',
    xtype: 'targetlinkgrid',

    controller: 'targetlink',
    
    requires: [
    	'SchoolAR.ar.model.TargetLink',
    	'SchoolAR.ar.store.TargetLinkStore',
    	'Ext.grid.plugin.CellEditing',
        'Ext.form.field.Text',
        'Ext.toolbar.TextItem'
    ],
    
    bind:{
        store:'{TargetLinks}'
    },
    
    initComponent: function() {
    	var cellediting = Ext.create('Ext.grid.plugin.CellEditing', {
            clicksToEdit: 1
        });
    	Ext.apply(this, {
    		editing: cellediting,
    		plugins: [cellediting],
    		autoScroll: true,
    	    columns: [
    	    	{xtype: 'rownumberer'},
    	    	{ text: 'Link',  dataIndex: 'link', width: 300, field: {
                    type: 'textfield'
                }},
    	        { text: 'Description',  dataIndex: 'description', width: 300, field: {
                    type: 'textfield'
                }}
    	    ],
    	    tbar: ['->', {
    	    	text: 'Add',
    	    	iconCls: 'fa fa-targetlink',
    	    	handler: 'onAdd'
    	    },{
    	    	text: 'Save',
    	    	iconCls: 'fa fa-targetlink',
    	    	handler: 'onSave'
    	    },{
    	    	text: 'Delete',
    	    	iconCls: 'fa fa-targetlink',
    	    	handler: 'onDelete'
    	    }]
    	});
    	this.callParent();
    }
});
