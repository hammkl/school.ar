 Ext.define('SchoolAR.ar.model.Bookmark', {
     extend: 'Ext.data.Model',
     fields: [
    	 {name: 'id', type: 'string'},
         {name: 'name', type: 'string'},
         {name: 'surname',  type: 'string'},
         {name: 'targetname',  type: 'string'},
         {name: 'cataloguename',  type: 'string'},
         {name: 'cataloguetypename',  type: 'string'}
     ]
 });