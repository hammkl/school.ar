Ext.define('SchoolAR.sets.store.PostalCodeStore', {
    extend: 'Ext.data.Store',
    alias: 'store.PostalCode',
    storeId: 'PostalCode',
    
    model: 'SchoolAR.sets.model.PostalCode',
    
    pageSize: 25,
    
    proxy: {
        type: 'rest',
        url: 'api/postalcode',
        reader: {
            type: 'json',
            rootProperty: 'data',
            totalProperty: 'total'
        }
    }
});