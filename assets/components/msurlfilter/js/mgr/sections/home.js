msUrlfilter.page.Home = function (config) {
	config = config || {};
	Ext.applyIf(config, {
		components: [{
			xtype: 'msurlfilter-panel-home', renderTo: 'msurlfilter-panel-home-div'
		}]
	});
	msUrlfilter.page.Home.superclass.constructor.call(this, config);
};
Ext.extend(msUrlfilter.page.Home, MODx.Component);
Ext.reg('msurlfilter-page-home', msUrlfilter.page.Home);