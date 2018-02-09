Ext.define('SchoolAR.ar.view.BookmarkGrid', {
    extend: 'Ext.grid.Panel',
    xtype: 'bookmarkgrid',

    controller: 'bookmark',
    
    requires: [
    	'SchoolAR.ar.model.Bookmark',
    	'SchoolAR.ar.store.BookmarkStore',
    	'Ext.grid.plugin.CellEditing',
        'Ext.form.field.Text',
        'Ext.toolbar.TextItem'
    ],
    
    bind:{
        store:'{Bookmarks}'
    },
    
    initComponent: function() {
    	var cellediting = Ext.create('Ext.grid.plugin.CellEditing', {
            clicksToEdit: 1
        });
    	
    	var user_store = Ext.create('SchoolAR.sys.store.UserStore');
    	var target_store = Ext.create('SchoolAR.ar.store.TargetStore');
    	
    	Ext.apply(this, {
    		editing: cellediting,
    		plugins: [cellediting],
    		autoScroll: true,
    	    columns: [
    	    	{xtype: 'rownumberer'},
    	    	{ text: 'Name',  dataIndex: 'name', width: 120 },
    	        { text: 'Surname',  dataIndex: 'surname', width: 120 },
    	        { text: 'Target',  dataIndex: 'targetname', width: 180 },
    	        { text: 'Catalogue',  dataIndex: 'cataloguename', width: 150 },
    	        { text: 'Type',  dataIndex: 'cataloguetypename', width: 120 },
    	    ],/*,
    	    tbar: ['->', {
    	    	text: 'Add',
    	    	iconCls: 'fa fa-bookmark',
    	    	handler: 'onAddBookmark'
    	    },{
    	    	text: 'Save',
    	    	iconCls: 'fa fa-bookmark',
    	    	handler: 'onSaveBookmark'
    	    },{
    	    	text: 'Delete',
    	    	iconCls: 'fa fa-bookmark',
    	    	handler: 'onDeleteBookmark'
    	    }]*/
    	    bbar: {
		        xtype: 'pagingtoolbar',
		        displayInfo: true
		    }
    	});
    	this.callParent();
    }
});
