Ext.define('SchoolAR.sets.view.CountryCombo', {
    extend: 'Ext.form.field.ComboBox',
    xtype: 'countrycombo',
    
    initComponent: function() {
    	Ext.apply(this, {
    		xtype: 'combobox',
        	fieldLabel: 'Country', 
        	name: 'country_id',
        	queryMode: 'local',
            displayField: 'name',
            valueField: 'id'
    	});
    	this.callParent();
    }

});