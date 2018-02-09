Ext.define('SchoolAR.sets.view.CatalogueTypeEditableGrid', {
    extend: 'Ext.grid.Panel',
    xtype: 'cataloguetypeeditablegrid',

    controller: 'cataloguetype',
    viewModel: 'cataloguetype',
    
    requires: [
    	'SchoolAR.sets.model.CatalogueType',
    	'SchoolAR.sets.store.CatalogueTypeStore',
    	'SchoolAR.sets.controller.CatalogueTypeController',
    	'SchoolAR.sets.viewmodel.CatalogueTypeViewModel',
    	'Ext.grid.plugin.CellEditing',
        'Ext.form.field.Text',
        'Ext.toolbar.TextItem'
    ],
    
    bind:{
        store:'{CatalogueTypes}'
    },
    
    initComponent: function() {
    	var cellediting = Ext.create('Ext.grid.plugin.CellEditing', {
            clicksToEdit: 1
        });
    	Ext.apply(this, {
    		title: 'Catalogue Types',
    		iconCls: 'fa fa-circle-o',
    		editing: cellediting,
    		plugins: [cellediting],
    		scrollable: true,
    	    columns: [
    	    	{xtype: 'rownumberer'},
    	    	{ text: 'Name',  dataIndex: 'name', width: 320, field: {
                    type: 'textfield'
                }}
    	    ],
    	    tbar: ['->', {
    	    	text: 'Add',
    	    	iconCls: 'fa fa-circle-o',
    	    	handler: 'onAdd'
    	    },{
    	    	text: 'Save',
    	    	iconCls: 'fa fa-circle-o',
    	    	handler: 'onSave'
    	    },{
    	    	text: 'Delete',
    	    	iconCls: 'fa fa-circle-o',
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
