Ext.define('SchoolAR.ar.viewmodel.TargetLinkViewModel', {
    extend: 'Ext.app.ViewModel',
    alias: 'viewmodel.targetlink',
    
    data: {
    },
    
    stores:{
        TargetLinks: {
        	type: 'TargetLink',
        	autoLoad: true
        }
	}
    
});
