Ext.define('SchoolAR.sets.view.CatalogueTypeCombo', {
    extend: 'Ext.form.field.ComboBox',
    xtype: 'cataloguetypecombo',
    
    initComponent: function() {
    	Ext.apply(this, {
    		xtype: 'combobox',
        	fieldLabel: 'Catalogue', 
        	name: 'catalogue_id',
        	queryMode: 'local',
            displayField: 'name',
            valueField: 'id'
    	});
    	this.callParent();
    }

});