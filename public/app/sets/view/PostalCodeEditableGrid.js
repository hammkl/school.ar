Ext.define('SchoolAR.sets.view.PostalCodeEditableGrid', {
    extend: 'Ext.grid.Panel',
    xtype: 'postalcodeeditablegrid',

    bind:{
        store: '{PostalCodes}'
    },
    
    initComponent: function() {
    	var cellediting = Ext.create('Ext.grid.plugin.CellEditing', {
            clicksToEdit: 1
        });
    	
    	this.countryStore = Ext.create('SchoolAR.sets.store.CountryStore');
    	this.countryStore.load();
    	
    	var countryCombo = Ext.create('SchoolAR.sets.view.CountryCombo', {
    		hideLabel: true,
    		store: this.countryStore
    		/*bind: {
    			store: '{Countries}'
    		}*/
    	});
    	
    	Ext.apply(this, {
    		editing: cellediting,
    		plugins: [cellediting],
    		autoScroll: true,
    	    columns: [
    	    	{xtype: 'rownumberer'},
    	    	{ text: 'Code',  dataIndex: 'code', width: 80, field: {
                    type: 'textfield'
                }},
    	        { text: 'Name',  dataIndex: 'name', width: 220, field: {
                    type: 'textfield'
                }},
                {
                	text: 'Country',
                	dataIndex: 'country_id', 
                	width: 220,
                	editor: countryCombo,
                	renderer: function(value) {
                		var record = countryCombo.findRecord(countryCombo.valueField || countryCombo.displayField, value);
                		return record ? record.get(countryCombo.displayField) : countryCombo.valueNotFoundText;
            	    }
                }
    	    ],
    	    tbar: ['->', {
    	    	text: 'Add',
    	    	iconCls: 'fa fa-envelope',
    	    	handler: 'onAdd'
    	    },{
    	    	text: 'Save',
    	    	iconCls: 'fa fa-envelope',
    	    	handler: 'onSave'
    	    },{
    	    	text: 'Delete',
    	    	iconCls: 'fa fa-envelope',
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
