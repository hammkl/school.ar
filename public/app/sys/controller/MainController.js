Ext.define('SchoolAR.sys.controller.MainController', {
    extend: 'Ext.app.ViewController',

    alias: 'controller.main',

    onLogout: function () {
        localStorage.removeItem('SchoolArLoggedIn');
        localStorage.removeItem("userId");
   		localStorage.removeItem("IsProfessor");
   		localStorage.removeItem("IsAdmin");
        
        this.getView().destroy();
        Ext.create({
            xtype: 'login'
        });
        location.reload();
    }
});