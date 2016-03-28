var msUrlfilter = function (config) {
	config = config || {};
	msUrlfilter.superclass.constructor.call(this, config);
};
Ext.extend(msUrlfilter, Ext.Component, {
	page: {}, window: {}, grid: {}, tree: {}, panel: {}, combo: {}, config: {}, view: {}, utils: {}
});
Ext.reg('msurlfilter', msUrlfilter);

msUrlfilter = new msUrlfilter();