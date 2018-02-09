 Ext.define('SchoolAR.sys.model.User', {
     extend: 'Ext.data.Model',
     alias:'model.User',
     
     fields: [
    	 {name: 'id', type: 'string'},
         {name: 'name', type: 'string'},
         {name: 'surname',  type: 'string'},
         {name: 'email',  type: 'string'},
         {name: 'username',  type: 'string'},
         {name: 'password',  type: 'string'},
         {name: 'active',  type: 'boolean'},
         {name: 'isProfessor',  type: 'boolean'},
         {name: 'isAdmin',  type: 'boolean'},
         {name: 'remember_token',  type: 'string'}
     ]
 });