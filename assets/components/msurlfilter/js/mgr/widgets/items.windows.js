msUrlfilter.window.CreateItem = function (config) {
	config = config || {};
	if (!config.id) {
		config.id = 'msurlfilter-item-window-create';
	}
	Ext.applyIf(config, {
		title: _('msurlfilter_item_create'),
		width: 750,
		autoHeight: true,
		url: msUrlfilter.config.connector_url,
		action: 'mgr/item/create',
		fields: this.getFields(config),
		keys: [{
			key: Ext.EventObject.ENTER, shift: true, fn: function () {
				this.submit()
			}, scope: this
		}]
	});
	msUrlfilter.window.CreateItem.superclass.constructor.call(this, config);
};
Ext.extend(msUrlfilter.window.CreateItem, MODx.Window, {

	getFields: function (config) {
		return [{
			xtype: 'textfield',
			fieldLabel: _('msurlfilter_item_url'),
			name: 'url',
			id: config.id + '-url',
			anchor: '99%',
			allowBlank: false,
		}, {
			xtype: 'textfield',
			fieldLabel: _('msurlfilter_item_title'),
			name: 'title',
			id: config.id + '-title',
			anchor: '99%',
			allowBlank: false,
		}, {
			xtype: 'textarea',
			fieldLabel: _('msurlfilter_item_keywords'),
			name: 'keywords',
			id: config.id + '-keywords',
			anchor: '99%',
			height: 150,
		}, {
			xtype: 'textarea',
			fieldLabel: _('msurlfilter_item_description'),
			name: 'description',
			id: config.id + '-description',
			height: 150,
			anchor: '99%'
		}, {
			xtype: 'textarea',
			fieldLabel: _('msurlfilter_item_text'),
			name: 'text',
			id: config.id + '-text',
			anchor: '99%',
			height: 150,
		}, {
			xtype: 'xcheckbox',
			boxLabel: _('msurlfilter_item_active'),
			name: 'active',
			id: config.id + '-active',
			checked: true,
		}];
	},

	loadDropZones: function() {
	}

});
Ext.reg('msurlfilter-item-window-create', msUrlfilter.window.CreateItem);


msUrlfilter.window.UpdateItem = function (config) {
	config = config || {};
	if (!config.id) {
		config.id = 'msurlfilter-item-window-update';
	}
	Ext.applyIf(config, {
		title: _('msurlfilter_item_update'),
		width: 750,
		autoHeight: true,
		url: msUrlfilter.config.connector_url,
		action: 'mgr/item/update',
		fields: this.getFields(config),
		keys: [{
			key: Ext.EventObject.ENTER, shift: true, fn: function () {
				this.submit()
			}, scope: this
		}]
	});
	msUrlfilter.window.UpdateItem.superclass.constructor.call(this, config);
};
Ext.extend(msUrlfilter.window.UpdateItem, MODx.Window, {

	getFields: function (config) {
		return [{
			xtype: 'hidden',
			name: 'id',
			id: config.id + '-id',
		}, {
			xtype: 'textfield',
			fieldLabel: _('msurlfilter_item_url'),
			name: 'url',
			id: config.id + '-url',
			anchor: '99%',
			allowBlank: false,
		}, {
			xtype: 'textfield',
			fieldLabel: _('msurlfilter_item_title'),
			name: 'title',
			id: config.id + '-title',
			anchor: '99%',
			allowBlank: false,
		}, {
			xtype: 'textarea',
			fieldLabel: _('msurlfilter_item_keywords'),
			name: 'keywords',
			id: config.id + '-keywords',
			anchor: '99%',
			height: 150,
		}, {
			xtype: 'textarea',
			fieldLabel: _('msurlfilter_item_description'),
			name: 'description',
			id: config.id + '-description',
			anchor: '99%',
			height: 150,
		}, {
			xtype: 'textarea',
			fieldLabel: _('msurlfilter_item_text'),
			name: 'text',
			id: config.id + '-text',
			anchor: '99%',
			height: 150,
		}, {
			xtype: 'xcheckbox',
			boxLabel: _('msurlfilter_item_active'),
			name: 'active',
			id: config.id + '-active',
		}];
	},

	loadDropZones: function() {
	}

});
Ext.reg('msurlfilter-item-window-update', msUrlfilter.window.UpdateItem);