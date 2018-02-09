Ext.define('SchoolAR.sys.view.Login', {
    extend: 'Ext.window.Window',
    xtype: 'login',
    
    requires: [
        'SchoolAR.sys.controller.LoginController',
        'Ext.form.Panel',
        'SchoolAR.sys.view.RegisterForm'
    ],

    controller: 'login',
    
    bodyPadding: 10,
    title: 'Login Window',
    closable: false,
    autoShow: true,
    
    items: {
        xtype: 'form',
        reference: 'form',
        items: [{
            xtype: 'textfield',
            name: 'email',
            fieldLabel: 'Email',
            allowBlank: false
        }, {
            xtype: 'textfield',
            name: 'password',
            inputType: 'password',
            fieldLabel: 'Password',
            allowBlank: false
        }, {
            xtype: 'displayfield',
            hideEmptyLabel: false,
            value: 'Enter any non-blank password'
        }],
        buttons: [{
            text: 'Login',
            formBind: true,
            listeners: {
                click: 'onLoginClick'
            }
        },
        {
            text: 'New user',
            formBind: true,
            listeners: {
                click: 'onRegisterClick'
            }
        }]
    }
});