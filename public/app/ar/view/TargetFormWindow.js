Ext.define('SchoolAR.ar.view.TargetFormWindow', {
    extend: 'Ext.window.Window',
    xtype: 'targetformwindow',

    controller: 'target',
    viewModel: 'target',
    
    requires: [
    	'SchoolAR.sets.model.Catalogue',
    	'SchoolAR.sets.store.CatalogueStore',
    	'SchoolAR.sets.view.CatalogueTypeCombo',
    	
    	'SchoolAR.ar.viewmodel.TargetViewModel',
    	'SchoolAR.ar.controller.TargetController',
    	
    	'Ext.form.field.Text',
    	'Ext.form.field.File',
        'Ext.toolbar.TextItem'
    ],
    
    initComponent: function() {
    	
    	Ext.apply(this, {
    		title: 'Target',
    		iconCls: 'fa fa-bullseye',
    		width: 850,
            height: 850,
            modal: true,
            layout: 'fit',
            items: {
                xtype: 'panel',
                autoScroll: true,
                items: [{
    				xtype: 'form',
    				id: 'TargetForm',
    				padding: 10,
                    reference: 'form',
                    items: [
                    	{ xtype: 'hidden', name: 'id'},
                    	{ xtype: 'hidden', name: 'targetfile_id'},
                    	{ xtype: 'hidden', name: 'pattfile_id'},
            			{ xtype: 'textfield', fieldLabel: 'Name', name: 'name', width: 590 },
            			{ xtype: 'cataloguetypecombo', bind: {
                        	store: '{Catalogues}'	
                        }},
                        {
                        	layout: 'column',
                        	items: [{
                        	    columnWidth: .5,
                        	    items: [{
                                    xtype: 'filefield',
                                    name: 'targetfile',
                                    fieldLabel: 'Image',
                                    labelWidth: 100,
                                    msgTarget: 'side',
                                    width: 420,
                                    buttonText: 'Select Target...'
                                }]
                        	},{
                        	    columnWidth: .5,
                        	    items: [{
                                	id: 'image',
                                	xtype: 'box',
                                	//imageSrc : 'image',
                                	margin: 10,
                                	autoEl: {tag: 'img', width: 250},
                                	refreshMe : function(src){
                                		var el;
                                		if(el = this.el){
                                			el.dom.src = (src || this.imageSrc) + '?dc=' + new Date().getTime();
                                		}
                                	},
                                	listeners : {
                                		render :  function(){
                                			this.refreshMe();
                                		}
                                	}
                                }]
                        	}]
                        },
                        {
                            xtype: 'filefield',
                            name: 'isetfile',
                            fieldLabel: 'iset',
                            labelWidth: 100,
                            msgTarget: 'side',
                            width: 420,
                            buttonText: 'Select iset file ...'
                        },{
                            xtype: 'filefield',
                            name: 'fsetfile',
                            fieldLabel: 'fset',
                            labelWidth: 100,
                            msgTarget: 'side',
                            width: 420,
                            buttonText: 'Select fset file ...'
                        },{
                            xtype: 'filefield',
                            name: 'fset3file',
                            fieldLabel: 'fset3',
                            labelWidth: 100,
                            msgTarget: 'side',
                            width: 420,
                            buttonText: 'Select fset3 file ...'
                        }
                    ]
            	},{
            		xtype: 'tabpanel',
            		defaults: {
            	        styleHtmlContent: true
            	    },
            	    items: [
            	        {
            	            title: 'Bookmarks',
            	            iconCls: 'fa fa-bookmark',
            	            id: 'bookmarkgrid',
            	            xtype: 'bookmarkgrid',
            	            autoScroll: true,
            	            bind: {
            	            	store: '{Bookmarks}',
            	            }
            	        },
            	        {
            	            title: 'Links',
            	            iconCls: 'fa fa-link',
            	            id: 'targetlinkgrid',
            	            xtype: 'targetlinkgrid',
            	            autoScroll: true,
            	            bind: {
            	            	store: '{TargetLinks}',
            	            }
            	        }
            	    ]
            	}]
            },
            tbar: ['->', {
    	    	text: 'Save',
    	    	iconCls: 'fa fa-bullseye',
    	    	handler: 'onSave'
    	    }]
    	});
    	this.callParent();
    }
});
