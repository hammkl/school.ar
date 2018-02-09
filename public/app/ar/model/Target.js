 Ext.define('SchoolAR.ar.model.Target', {
     extend: 'Ext.data.Model',
     fields: [
    	 {name: 'id', type: 'string'},
    	 {name: 'targetfile_id', type: 'string'},
    	 {name: 'pattfile_id', type: 'string'},
    	 {name: 'name', type: 'string'},
    	 {name: 'catalogue_id', type: 'string'},
    	 {name: 'catalogue_name', type: 'string'},
    	 {name: 'targetfile', type: 'string'},
    	 {name: 'pattfile', type: 'string'},
     ]
 });