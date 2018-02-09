Ext.define('SchoolAR.sys.store.PublisherStore', {
    extend: 'Ext.data.Store',
    alias: 'store.Publisher',
    storeId: 'Publisher',
    
    model: 'SchoolAR.sys.model.Publisher',
    proxy: {
        type: 'rest',
        url: 'api/publisher',
        reader: {
            type: 'json',
            rootProperty: 'data'
        }
    },
    autoLoad: true
    
});