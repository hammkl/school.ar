Ext.define('SchoolAR.sys.store.ProfessorStore', {
    extend: 'Ext.data.Store',
    alias: 'store.Professor',
    storeId: 'Professor',
    
    model: 'SchoolAR.sys.model.User',
    proxy: {
        type: 'rest',
        url: 'api/professor',
        reader: {
            type: 'json',
            rootProperty: 'data'
        }
    }
    
});