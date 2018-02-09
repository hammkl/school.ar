Ext.define('SchoolAR.sys.store.UserStore', {
    extend: 'Ext.data.Store',
    alias: 'store.User',
    storeId: 'User',
    
    model: 'SchoolAR.sys.model.User',
    
    pageSize: 25,
    
    proxy: {
        type: 'rest',
        url: 'api/user',
        reader: {
            type: 'json',
            rootProperty: 'data',
            totalProperty: 'total'
        }
    }
    
});