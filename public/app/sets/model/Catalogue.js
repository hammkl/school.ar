 Ext.define('SchoolAR.sets.model.Catalogue', {
     extend: 'Ext.data.Model',
     alias:'model.Catalogue',
     
     fields: [
    	 {name: 'id', type: 'string'},
         {name: 'name', type: 'string'},
         {name: 'cataloguefile_id', type: 'string'},
         {name: 'publisher_id', type: 'string'},
         {name: 'publisher_name', type: 'string'},
         {name: 'cataloguetype_id', type: 'string'},
         {name: 'cataloguetype_name', type: 'string'}
     ]
 });