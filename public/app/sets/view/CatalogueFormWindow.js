Ext.define('SchoolAR.sets.view.CatalogueFormWindow', {
    extend: 'Ext.window.Window',
    xtype: 'catalogueformwindow',

    controller: 'catalogue',    
    viewModel: 'catalogue',
    
    requires: [
    	'SchoolAR.sys.model.Publisher',
    	'SchoolAR.sys.store.PublisherStore',
    	'SchoolAR.sets.model.CatalogueType',
    	'SchoolAR.sets.store.CatalogueTypeStore',
    	'SchoolAR.sets.model.Catalogue',
    	'SchoolAR.sets.store.CatalogueStore',
    	'SchoolAR.sets.viewmodel.CatalogueViewModel',
    	'SchoolAR.sets.controller.CatalogueController',
    	'Ext.form.field.Text',
        'Ext.toolbar.TextItem'
    ],
    
    initComponent: function() {
    	
    	Ext.apply(this, {
    		title: 'Catalogue',
    		iconCls: 'fa fa-circle',
    		width: 850,
            height: 670,
            modal: true,
            items: [{
				xtype: 'form',
				id: 'CatalogueForm',
				padding: 10,
                reference: 'form',
                items: [
                	{
                		layout: 'column',
                		items: [{
	                        columnWidth: 1,
	                        items: [
	                        	{ xtype: 'hidden', name: 'id'},
	                			{ xtype: 'textfield', fieldLabel: 'Name', name: 'name', width: 590 }
	                        ]
	                    }]
                	},
                	
                	{
	                	layout: 'column',
	                	items: [{
	                        columnWidth: 0.5,
	                        items: [{ 
	                    		xtype: 'combobox',
	                        	fieldLabel: 'Publisher', 
	                        	name: 'publisher_id',
	                        	queryMode: 'local',
	                            displayField: 'short_name',
	                            valueField: 'id',
	                            bind: {
	                            	store: '{Publishers}'
	                            }
	                        },{ xtype: 'professorcombo',
	    	                    bind: {
	    	                    	store: '{Professors}'
	    	                    } 
	    	                }]
	                    },
	                    {
	                        columnWidth: 0.5,
	                        items: [{ 
                        		xtype: 'combobox',
                            	fieldLabel: 'Catalogue Type', 
                            	name: 'cataloguetype_id',
                            	queryMode: 'local',
                                displayField: 'name',
                                valueField: 'id',
                                bind: {
                                	store: '{CatalogueTypes}'
                                }
                            }]
	                    }]
	                },
	                {
	                	items: [{
	                        xtype: 'filefield',
	                        name: 'cataloguefile',
	                        fieldLabel: 'Image',
	                        labelWidth: 100,
	                        msgTarget: 'side',
	                        width: 420,
	                        buttonText: 'Select Catalogue...'
	                    }]
	                }
			    ]
        	},{
        		xtype: 'tabpanel',
        		defaults: {
        	        styleHtmlContent: true
        	    },
        	    height: 450,
        	    autoScroll: true,
        	    items: [
        	        {
        	            title: 'Targets',
        	            iconCls: 'fa fa-bullseye',
        	            xtype: 'targetgrid'
        	        }
        	    ]
        	}],
            tbar: ['->', {
    	    	text: 'Save',
    	    	iconCls: 'fa fa-circle',
    	    	handler: 'onSave'
    	    }]
    	});
    	this.callParent();
    }
});
