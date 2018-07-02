Ext.define('Stub', {
     extend: 'Ext.data.Model',
     fields: [
         {name: 'name', type: 'string'},
         {name: 'code',  type: 'string'}
     ]
});

Ext.define('SchoolAR.ar.view.TargetCodeEditor', {
    extend: 'Ext.Panel',
    xtype: 'targetcodeeditor',
    
    _wrs_int_language: 'en',
    iframe: null,
    
    wrs_addEvent: function(element, event, func) {
    	if (element.addEventListener) {
    		element.addEventListener(event, func, false);
    	}
    	else if (element.attachEvent) {
    		element.attachEvent('on' + event, func);
    	}
    },
    
    displayMath: function() {
    	console.log('Displaying math');
    	wrs_int_openNewFormulaEditor(this.iframe, this._wrs_int_language);
    },
    
    displayChem: function() {
    	console.log('Displaying chem');
    	wrs_int_openNewCAS(this.iframe, this._wrs_int_language);
    },
    
    initComponent: function() {
    	
    	var editor;
    	
    	var stubsStore = new Ext.data.Store({
    		model: 'Stub',
    		data: [
    			{ name: 'assignment', code: ', { "nr": "b", "text": "", "fields": [] }' },
    			{ name: 'ohne Nr', code: '{ "nr": "",\n"text": "",\n"fields": []\n},\n{ "nr": "d",\n"text": "",\n"fields": []\n}\n' },
    			{ name: 'picture', code: ',{"picture": 1}\n' },
    			{ name: 'formula', code: '"formula": "",\n"parameter": [],\n' },
    			{ name: 'steps', code: '"steps": [],\n' },
    			{ name: 'table', code: '"table": {\n\t"columns": 2, \t"cells" : []\n},\n' },
    			{ name: 'all Features', code: '"table": { "columns": 2, "cells" : [], "name": "x1", "check": [], "rows": 0, "style": "table-striped  table-borderless", "feature": { "columns": ["pull-right",""], "delimitor": "|" } }, "table": { "columns": 2, "cells" : [] },' },
    			{ name: 'parameter (p)', code: ',{  "name": "p2", "type": "number", "prefix": "", "value": null, "postfix": "", "pool": [] }' },
    			{ name: 'type: number (ZR10)', code: ', {  "name": "p3",  "type": "number", "prefix": "", "value": 0, "postfix": "", "pool": ["ZR10"] }, {  "name": "p4", "type": "number", "prefix": "", "value": null, "postfix": "", "pool": [] } '},
    			{ name: 'type: word', code: ', {  "name": "p5", "type": "word", "prefix": "", "value": 0, "postfix": "", "pool": [] }, {  "name": "p6", "type": "number", "prefix": "", "value": null, "postfix": "", "pool": [] }' },
    			{ name: 'inputfield number(x)', code: '{ "name": "x1", "type": "number", "pretext": "", "prefix": "", "check": null, "postfix": "", "posttext": "", "feature": { "calculator": { "showFormula": true}, "hint": "" }}' },
    			{ name: 'type:number without calculator', code: '{ "name": "x1", "type": "number", "pretext": "", "prefix": "", "check": null, "postfix": "", "posttext": "" }' },
    			{ name: 'type:set (CSV)', code: ', { "name": "x2", "type": "set", "pretext": "", "prefix": "", "check": [], "postfix": "", "posttext": "" }' },
    			{ name: 'type:vector (CSV)', code: ', {  "name": "x3", "type": "vector", "pretext": "", "prefix": "", "check": [], "postfix": "", "posttext": "" }' },
    			{ name: 'type:fraction(string)', code: ', {  "name": "x5", "type": "fraction", "pretext": "", "prefix": "", "check": null, "postfix": "", "posttext": "" }' },
    			{ name: 'type:syllable(char)', code: ', {  "name": "x6", "type": "syllable", "pretext": "", "prefix": "", "options": [], "check": null, "postfix": "", "posttext": "" }' },
    			{ name: 'type:word(string)', code: ', {  "name": "x7", "type": "word", "pretext": "", "prefix": "", "options": [], "check": null, "postfix": "", "posttext": "" }' },
    			{ name: 'type:statement(string)', code: ', {  "name": "x8", "type": "statement", "pretext": "", "prefix": "", "check": [], "postfix": "", "posttext": "" }' },
    			{ name: 'type:text(multistring)', code: ', {  "name": "x9", "type": "text", "pretext": "", "check": [], "posttext": "" }' },
    			{ name: 'type:radiobuttons(string)', code: ', {  "name": "x10", "type": "radio", "pretext": "", "prefix": "", "options": ["",""], "check": [], "postfix": "", "posttext": "" }' },
    			{ name: 'type:checkbuttons(string)', code: ', {  "name": "x11", "type": "check", "pretext": "", "prefix": "", "options": ["",""], "check": null, "postfix": "", "posttext": "" }' },
    			{ name: 'type:formula(string)', code: ', {  "name": "x12", "type": "formula", "pretext": "", "prefix": "", "parameter": [], "check": [], "postfix": "", "posttext": "" }' },
    			{ name: 'type:calculated(string)', code: ', {  "name": "x13", "type": "calculated", "pretext": "", "prefix": "", "formula": "", "check": null, "postfix": "", "posttext": "" }' },
    			{ name: 'type:geometry', code: ', {  "name": "x14", "type": "geometry", "pretext": "", "check": null, "posttext": "" }' }
    		]
    	});
        
        
    	var stubsGrid = new Ext.grid.Panel({
    		store: stubsStore,
    		columns: [{ text: 'Name',  dataIndex: 'name', align: 'left', flex: 1 }],
    		listeners : {
    		    itemdblclick: function(dv, record, item, index, e) {
    		    	editor.session.insert(
    		    		editor.getCursorPosition(), 
    		    		record.data.code
    		    	);
    		    }
    		}
    	});
    	
    	Ext.apply(this, {
			width: 800,
    	    height: 800,
    	    title: 'Editor',
    	    layout: 'border',
    		items: [{
    	    	region: 'west',
    	    	xtype: 'panel',
    	    	collapsible: true,
    	    	autoScroll: true,
    	    	width: 300,
    	    	items: [stubsGrid]
    	    },
    	    {
    	    	region: 'center',
    	    	xtype: 'panel',
    	    	layout: 'fit',
    	    	id: 'editor',
    	    	class: 'wrs_div_box',
    	    	html: '',
    	    	tbar: [{
    	    		xtype: 'button',
    	    		text: 'Math',
    	    		handler: this.displayMath,
                    scope:this
    	    	}],
    	    	listeners: {
    	    		afterlayout: function(p, layout) {
    	    			editor = ace.edit("editor-body");
    	    			editor.container.style.fontFamily = "monospace";
    	    			editor.setTheme("ace/theme/monokai");
    	    			editor.session.setMode("ace/mode/javascript");
    	    			wrs_int_init(editor);
    	    		},
    	    		scope: this
    	    	}
    	    }]
    	});
    	
    	this.callParent();
    }

});