Ext.define('SchoolAR.sets.viewmodel.CatalogueTypeViewModel', {
    extend: 'Ext.app.ViewModel',
    
    alias: 'viewmodel.cataloguetype',
    
    stores:{
        CatalogueTypes: {
        	type: 'CatalogueType'
        }
	}
    
});