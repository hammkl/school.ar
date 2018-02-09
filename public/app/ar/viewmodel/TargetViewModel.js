Ext.define('SchoolAR.ar.viewmodel.TargetViewModel', {
    extend: 'Ext.app.ViewModel',
    alias: 'viewmodel.target',
    data: {
    },
    stores:{
        Catalogues: {
        	type: 'Catalogue'
        },
        Targets: {
        	type: 'Target'
        },
        Bookmarks: {
        	type: 'Bookmark'
        },
        TargetLinks: {
        	type: 'TargetLink'
        }
	}
    
});
