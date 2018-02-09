Ext.define('SchoolAR.ar.view.TargetGrid', {
    extend: 'Ext.grid.Panel',
    xtype: 'targetgrid',
    
    controller: 'target',
    
    bind:{
        store: '{Targets}',
        selection: '{target}'
    },
    
    initComponent: function() {
    	Ext.apply(this, {
    		columns: [
    			{xtype: 'rownumberer'},
    			{ text: 'Image',  dataIndex: 'id', width: 100, renderer: function(value) {
    				return '<img src="api/target/' + value + '/image?' + this.createUUID() + '" width="80"/>';
    			}},
    	    	{ text: 'Name',  dataIndex: 'name', width: 360 },
                { text: 'Catalogue',  dataIndex: 'catalogue_name', width: 220 }
    	    ],
    	    tbar: ['->', {
    	    	text: 'Add',
    	    	iconCls: 'fa fa-bullseye',
    	    	handler: 'onAdd'
    	    },{
    	    	text: 'Delete',
    	    	iconCls: 'fa fa-bullseye',
    	    	handler: 'onDelete'
    	    }],
    	    bbar: {
		        xtype: 'pagingtoolbar',
		        displayInfo: true
		    }
    	});
    	this.callParent();
    },
    
    createUUID: function() {
        // http://www.ietf.org/rfc/rfc4122.txt
        var s = [];
        var hexDigits = "0123456789abcdef";
        for (var i = 0; i < 36; i++) {
            s[i] = hexDigits.substr(Math.floor(Math.random() * 0x10), 1);
        }
        s[14] = "4";  // bits 12-15 of the time_hi_and_version field to 0010
        s[19] = hexDigits.substr((s[19] & 0x3) | 0x8, 1);  // bits 6-7 of the clock_seq_hi_and_reserved to 01
        s[8] = s[13] = s[18] = s[23] = "-";

        var uuid = s.join("");
        return uuid;
    },

    listeners: {
        rowdblclick: 'onRowDoubleClick'
    }
});
