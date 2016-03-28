Ext.onReady(function() {
	msUrlfilter.config.connector_url = OfficeConfig.actionUrl;

	var grid = new msUrlfilter.panel.Home();
	grid.render('office-msurlfilter-wrapper');

	var preloader = document.getElementById('office-preloader');
	if (preloader) {
		preloader.parentNode.removeChild(preloader);
	}
});