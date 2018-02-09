 Ext.define('SchoolAR.sys.model.Publisher', {
     extend: 'Ext.data.Model',
     alias:'model.Publisher',
     
     fields: [
    	 {name: 'id', type: 'string' },
         {name: 'short_name', type: 'string' },
         {name: 'long_name',  type: 'string' },
         {name: 'email',  type: 'string' },
         {name: 'password',  type: 'string' },
         {name: 'vatid',  type: 'string' },
         {name: 'companyid',  type: 'string' },
         {name: 'active',  type: 'boolean' },
         {name: 'postalcode_id',  type: 'string' }
     ]
 });