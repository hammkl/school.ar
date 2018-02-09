/**
 * This class is the view model for the Main view of the application.
 */
Ext.define('SchoolAR.sets.viewmodel.CountryViewModel', {
    extend: 'Ext.app.ViewModel',
    alias: 'viewmodel.country',
    
    stores:{
        Countries: {
        	type: 'Country'
        }
	}
    
});
