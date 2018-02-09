Ext.define('SchoolAR.ar.viewmodel.BookmarkViewModel', {
    extend: 'Ext.app.ViewModel',
    alias: 'viewmodel.bookmark',
    
    stores:{
        Bookmarks: {
        	type: 'Bookmark',
        	autoLoad: true
        }
	}
    
});
