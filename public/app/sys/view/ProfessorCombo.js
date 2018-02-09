Ext.define('SchoolAR.sys.view.ProfessorCombo', {
    extend: 'Ext.form.field.ComboBox',
    xtype: 'professorcombo',
    
    initComponent: function() {
    	Ext.apply(this, {
    		xtype: 'combobox',
        	fieldLabel: 'Professor', 
        	name: 'professor_id',
        	queryMode: 'local',
            displayField: 'email',
            valueField: 'id'
    	});
    	this.callParent();
    }

});