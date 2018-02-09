Ext.define('SchoolAR.sys.viewmodel.UserViewModel', {
    extend: 'Ext.app.ViewModel',
    alias: 'viewmodel.user',
    
    stores:{
        Users: {
        	type: 'User'
        },
        Bookmarks: {
        	type: 'Bookmark'
        },
        Professors: {
        	type: 'Professor'
        }
	}
    
});
