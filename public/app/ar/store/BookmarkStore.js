Ext.define('SchoolAR.ar.store.BookmarkStore', {
    extend: 'Ext.data.Store',
    alias: 'store.Bookmark',
    storeId: 'Bookmark',
    
    model: 'SchoolAR.ar.model.Bookmark',
    
    pageSize: 25,
    
    proxy: {
        type: 'rest',
        url: 'api/bookmark?userId=' + localStorage.getItem("userId"),
        reader: {
            type: 'json',
            rootProperty: 'data',
            totalProperty: 'total'
        }
    }
});