Ext.define('SchoolAR.sets.store.CountryStore', {
    extend: 'Ext.data.Store',
    alias: 'store.Country',
    storeId: 'Country',
    
    model: 'SchoolAR.sets.model.Country',
    
    pageSize: 25,
    
    proxy: {
        type: 'rest',
        url: 'api/country',
        reader: {
            type: 'json',
            rootProperty: 'data',
            totalProperty: 'total'
        }
    }
});