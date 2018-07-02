Ext.define('SchoolAR.sys.view.Main', {
    extend: 'Ext.tab.Panel',
    xtype: 'app-main',

    requires: [
        'Ext.plugin.Viewport',
        'Ext.window.MessageBox',
        
        'SchoolAR.sys.controller.MainController',
        
        'SchoolAR.sys.view.UserPanel',
        'SchoolAR.sets.view.CountryPanel',
        'SchoolAR.sets.view.PostalCodePanel',
        'SchoolAR.sets.view.CatalogueTypePanel',
        'SchoolAR.sets.view.CataloguePanel',
        'SchoolAR.sys.view.PublisherPanel',
        'SchoolAR.ar.view.TargetPanel',
        'SchoolAR.ar.view.BookmarkPanel',
        'SchoolAR.ar.view.TargetLinkPanel'
    ],

    controller: 'main',
    
    plugins: 'viewport',
    ui: 'navigation',
    
    tabBarHeaderPosition: 1,
    titleRotation: 0,
    tabRotation: 0,

    header: {
        layout: {
            align: 'stretchmax'
        },
        title: {
            flex: 0
        },
        html: '<img src="resources/logo.png" />',
        iconCls: 'fa-th-list',
        items: [{
            xtype: 'button',
            iconCls: 'fa fa-sign-out',
            text: 'Logout',
            handler: 'onLogout'
        }]
    },

    tabBar: {
        flex: 1,
        layout: {
            align: 'stretch',
            overflowHandler: 'none'
        }
    },

    responsiveConfig: {
        tall: {
            headerPosition: 'top'
        },
        wide: {
            headerPosition: 'left'
        }
    },

    defaults: {
        bodyPadding: 20,
        tabConfig: {
        	plugins: 'responsive',
        	responsiveConfig: {
                wide: {
                    iconAlign: 'left',
                    textAlign: 'left',
                    width: 210
                },
                tall: {
                    iconAlign: 'top',
                    textAlign: 'center',
                    width: 210
                }
            }
        }
    },
    initComponent: function() {
    	
    	var js = document.createElement("script");
    	js.type = "text/javascript";
    	js.src = "generic_wiris/integration/WIRISplugins.js?viewer=image";
    	document.head.appendChild(js);
    	console.log("Wiris load done.");
    	
    	/*var js = document.createElement("script");
    	js.type = "text/javascript";
    	js.src = "https://www.wiris.net/demo/editor/editor";
    	document.head.appendChild(js);*/
    	
    	Ext.apply(this, {
    		items: []
    	});
    	
    	this.callParent();
    	
    	if (localStorage.getItem("IsAdmin")==1) {
    			this.add({ xtype: 'userpanel' });
    			this.add({ xtype: 'countrypanel', autoScroll: true });
    			this.add({ xtype: 'postalcodepanel', autoScroll: true });
    			this.add({ xtype: 'cataloguetypepanel', autoscroll: true });
    			this.add({ xtype: 'cataloguepanel', autoScroll: true });
		    	this.add({ xtype: 'publisherpanel', autoScroll: true });
		    	this.add({ xtype: 'targetpanel', autoScroll: true });
		    	this.add({ xtype: 'bookmarkpanel', autoScroll: true });
    	} else if (localStorage.getItem("IsProfessor")==1) {
    		this.add({ xtype: 'cataloguepanel', autoScroll: true });
    		this.add({ xtype: 'targetpanel', autoScroll: true });
	    	this.add({ xtype: 'bookmarkpanel', autoScroll: true });
    	}
    	
    }
});