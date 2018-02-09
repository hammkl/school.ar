 Ext.define('SchoolAR.sets.model.PostalCode', {
     extend: 'Ext.data.Model',
     alias:'model.PostalCode',
     
     fields: [
    	 {name: 'id', type: 'string'},
         {name: 'code', type: 'string'},
         {name: 'name',  type: 'string'},
         {name: 'country_id',  type: 'string'}
     ]
 });