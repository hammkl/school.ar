Ext.define('SchoolAR.sys.view.UserFormWindow', {
    extend: 'Ext.window.Window',
    xtype: 'userformwindow',

    controller: 'user',
    viewModel: 'user',
    
    initComponent: function() {
    	Ext.apply(this, {
    		title: 'User',
    		iconCls: 'fa fa-user',
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
                    items: [
                    	{ xtype: 'hidden', name: 'id'},
    	                { xtype: 'textfield', fieldLabel: 'Email', name: 'email' },
    	                { xtype: 'textfield', fieldLabel: 'Name', name: 'name' },
    	                { xtype: 'professorcombo',
    	                    bind: {
    	                    	store: '{Professors}'
    	                    } 
    	                }
                    ]
                },{
                    columnWidth: .5,
                    padding: 10,
                    items: [
                    	{ xtype: 'textfield', fieldLabel: 'Password', inputType: 'password', name: 'password' },
                    	{ xtype: 'textfield', fieldLabel: 'Surname', name: 'surname' },
                    	{
        					fieldLabel : 'Rights',
        					xtype : 'fieldcontainer',
        					defaultType : 'checkbox',
        					items : [ {
        						boxLabel : 'Admin',
        						name : 'isAdmin',
        						inputValue : 1
        					}, {
        						boxLabel : 'Professor',
        						name : 'isProfessor',
        						inputValue : 1
        					}, {
        						boxLabel : 'Active',
        						name : 'active',
        						inputValue : 1
        					} ]
        				}
                    ]
                }]
        	},
        	{
        		xtype: 'tabpanel',
        		defaults: {
        	        styleHtmlContent: true
        	    },

        	    items: [
        	        {
        	            title: 'Bookmarks',
        	            iconCls: 'fa fa-bookmark',
        	            xtype: 'bookmarkgrid',
        	            bind: {
        	            	store: '{Bookmarks}'
        	            }
        	        }
        	    ]
        	}],
            tbar: ['->', {
    	    	text: 'Save',
    	    	iconCls: 'fa fa-user',
    	    	handler: 'onSave'
    	    }]
    	});
    	this.callParent();
    }
});
