Ext.define('SchoolAR.sys.view.RegisterForm', {
	extend : 'Ext.Window',
	
	xtype: 'registerForm',
	requires: [
		'SchoolAR.sys.controller.UserController'
		   ],
	controller: 'user',
	
	initComponent : function() {
		Ext.apply(this, {
			title : 'New user',
			layout: 'form',
			items : [{
						region: 'center',
						xtype : 'form',
						defaultType: 'displayfield',
						items : [{
							name : 'id',
							xtype : 'hidden'
						},{
							fieldLabel : 'First Name',
							name : 'name',
							xtype: 'textfield',
				            allowBlank : false
						}, {
							fieldLabel : 'Surname',
							name : 'surname',
							xtype: 'textfield',
				            allowBlank : false
						}, 
						 {
							fieldLabel : 'Email',
							name : 'email',
							vtype : 'email',
							xtype: 'textfield',
				            allowBlank : false
						},
						 {
							fieldLabel : 'Mobile number',
							name : 'mobile number',
							xtype: 'textfield',
				            allowBlank : false
						},
						
						 {
							fieldLabel : 'Password',
							name : 'password',
							xtype: 'textfield',
				            allowBlank : false
						},
						
						 {
							fieldLabel : 'Re-enter password',
							name : 'password2',
							xtype: 'textfield',
				            allowBlank : false
						},
						
						
						
						
						{
							xtype: 'button', 
							text: 'Save user',
							handler: 'doSignup'
						}]
					}
				]
				
		});
		this.callParent();
	}

});
