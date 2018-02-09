Ext.define('SchoolAR.sets.store.CatalogueStore', {
    extend: 'Ext.data.Store',
    alias: 'store.Catalogue',
    storeId: 'Catalogue',
    
    model: 'SchoolAR.sets.model.Catalogue',
    
    pageSize: 25,
    
    proxy: {
        type: 'rest',
        url: 'api/catalogue',
        reader: {
            type: 'json',
            rootProperty: 'data',
            totalProperty: 'total'
        }
    }
});