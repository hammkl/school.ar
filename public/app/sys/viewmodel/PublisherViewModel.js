Ext.define('SchoolAR.sys.viewmodel.PublisherViewModel', {
    extend: 'Ext.app.ViewModel',
    alias: 'viewmodel.publisher',
    
    stores:{
        Publishers: {
        	type: 'Publisher'
        },
        PostalCodes: {
        	type: 'PostalCode',
        	autoLoad: true
        },
        Catalogues: {
        	type: 'Catalogue'
        },
        Targets: {
        	type: 'Target'
        }
	}
    
});
