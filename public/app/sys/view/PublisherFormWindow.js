Ext.define('SchoolAR.sys.view.PublisherFormWindow', {
    extend: 'Ext.window.Window',
    xtype: 'publisherformwindow',

    controller: 'publisher',
    viewModel: 'publisher',
    
    requires: [
    	'SchoolAR.sets.model.PostalCode',
    	'SchoolAR.sets.store.PostalCodeStore',
    	'SchoolAR.sets.view.PostalCodeCombo',
    	
    	'SchoolAR.sys.model.Publisher',
    	'SchoolAR.sys.store.PublisherStore',
    	'SchoolAR.sys.viewmodel.PublisherViewModel',
    	'SchoolAR.sys.controller.PublisherController',
    	'Ext.form.field.Text',
    	'Ext.form.field.ComboBox',
        'Ext.toolbar.TextItem'
    ],
    
    initComponent: function() {
    	
    	Ext.apply(this, {
    		title: 'Publisher',
    		iconCls: 'fa fa-qrcode',
    		width: 850,
            height: 650,
            modal: true,
            items: [{
				layout: 'column',
        	    xtype: 'form',
                reference: 'form',
                items: [{
                    columnWidth: .5,
                    padding: 10,
                    defaults: {
                    	xtype: 'textfield'
                    },
                    items: [
                    	{ xtype: 'hidden', name: 'id'},
    	                { fieldLabel: 'Short Name', name: 'short_name' },
    	                { fieldLabel: 'Email', name: 'email' },
    	                { fieldLabel: 'VatID', name: 'vatid' },
    	                { xtype: 'postalcodecombo',
    	                    bind: {
    	                    	store: '{PostalCodes}'
    	                    } 
    	                }
                    ]
                },
                {
                    columnWidth: .5,
                    padding: 10,
                    defaults: {
                    	xtype: 'textfield'
                    },
                    items: [
                    	{ fieldLabel: 'Long Name', name: 'long_name' },
                    	{ fieldLabel: 'Password', inputType: 'password', name: 'password' },
                    	{ fieldLabel: 'Company ID', name: 'companyid' },
                    	{
        					xtype : 'fieldcontainer',
        					defaultType : 'checkboxfield',
        					items : [ {
        						boxLabel : 'Active',
        						name : 'active',
        						inputValue : 'true',
        						id : 'checkbox1'
        					} ]
        				}
                    ]
                }]
        	},{
        		xtype: 'tabpanel',
        		defaults: {
        	        styleHtmlContent: true
        	    },

        	    items: [
        	    	{
        	            title: 'Catalogues',
        	            iconCls: 'fa fa-circle',
        	            xtype: 'cataloguegrid', 
        	            bind: {
        	            	store: '{Catalogues}'
        	            }
        	        },
        	        {
        	            title: 'Targets',
        	            iconCls: 'fa fa-target',
        	            xtype: 'targetgrid',
        	            bind: {
        	            	store: '{Targets}'
        	            }
        	        }
        	    ]
        	}],
            tbar: ['->', {
    	    	text: 'Save',
    	    	iconCls: 'fa fa-qrcode',
    	    	handler: 'onSave'
    	    }]
    	});
    	this.callParent();
    }
});
