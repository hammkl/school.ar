Ext.define('SchoolAR.sets.store.CatalogueTypeStore', {
    extend: 'Ext.data.Store',
    alias: 'store.CatalogueType',
    storeId: 'CatalogueType',
    
    model: 'SchoolAR.sets.model.CatalogueType',
    
    pageSize: 25,
    
    proxy: {
        type: 'rest',
        url: 'api/cataloguetype',
        reader: {
            type: 'json',
            rootProperty: 'data',
            totalProperty: 'total'
        }
    }
});