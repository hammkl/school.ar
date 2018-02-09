/**
 * This class is the view model for the Main view of the application.
 */
Ext.define('SchoolAR.sets.viewmodel.CatalogueViewModel', {
    extend: 'Ext.app.ViewModel',
    alias: 'viewmodel.catalogue',
    
    stores:{
        Catalogues: {
        	type: 'Catalogue'
        },
        CatalogueDeletes: {
        	url: 'api/catalogue'
        },
        Targets: {
        	type: 'Target'
        },
        CatalogueTypes: {
        	type: 'CatalogueType',
        	autoLoad: true
        },
        Publishers: {
        	type: 'Publisher',
        	autoLoad: true
        },
        Professors: {
        	type: 'Professor'
        }
	}
    
});
