Ext.define('SchoolAR.ar.store.TargetLinkStore', {
    extend: 'Ext.data.Store',
    alias: 'store.TargetLink',
    storeId: 'TargetLink',
    
    model: 'SchoolAR.ar.model.TargetLink',
    proxy: {
        type: 'rest',
        reader: {
            type: 'json',
            rootProperty: 'data'
        }
    }
});