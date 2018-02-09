Ext.define('SchoolAR.ar.store.TargetStore', {
    extend: 'Ext.data.Store',
    alias: 'store.Target',
    storeId: 'Target',
    
    model: 'SchoolAR.ar.model.Target',
    proxy: {
        type: 'rest',
        url: 'api/target',
        reader: {
            type: 'json',
            rootProperty: 'data'
        }
    }
});