Ext.define('SchoolAR.sets.viewmodel.PostalCodeViewModel', {
    extend: 'Ext.app.ViewModel',
    alias: 'viewmodel.postalcode',
    
    stores:{
        PostalCodes: {
        	type: 'PostalCode'
        }
	}
    
});
