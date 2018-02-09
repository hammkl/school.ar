Ext.define('SchoolAR.sets.view.PostalCodeCombo', {
    extend: 'Ext.form.field.ComboBox',
    xtype: 'postalcodecombo',
    
    initComponent: function() {
    	Ext.apply(this, {
    		xtype: 'combobox',
        	fieldLabel: 'Postal Code', 
        	name: 'postalcode_id',
        	queryMode: 'local',
            displayField: 'name',
            valueField: 'id'
    	});
    	this.callParent();
    }

});