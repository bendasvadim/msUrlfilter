<?php

/**
 * The home manager controller for msUrlfilter.
 *
 */
class msUrlfilterHomeManagerController extends msUrlfilterMainController {
	/* @var msUrlfilter $msUrlfilter */
	public $msUrlfilter;


	/**
	 * @param array $scriptProperties
	 */
	public function process(array $scriptProperties = array()) {
	}


	/**
	 * @return null|string
	 */
	public function getPageTitle() {
		return $this->modx->lexicon('msurlfilter');
	}


	/**
	 * @return void
	 */
	public function loadCustomCssJs() {
		$this->addCss($this->msUrlfilter->config['cssUrl'] . 'mgr/main.css');
		$this->addCss($this->msUrlfilter->config['cssUrl'] . 'mgr/bootstrap.buttons.css');
		$this->addJavascript($this->msUrlfilter->config['jsUrl'] . 'mgr/misc/utils.js');
		$this->addJavascript($this->msUrlfilter->config['jsUrl'] . 'mgr/widgets/items.grid.js');
		$this->addJavascript($this->msUrlfilter->config['jsUrl'] . 'mgr/widgets/items.windows.js');
		$this->addJavascript($this->msUrlfilter->config['jsUrl'] . 'mgr/widgets/home.panel.js');
		$this->addJavascript($this->msUrlfilter->config['jsUrl'] . 'mgr/sections/home.js');
		$this->addHtml('<script type="text/javascript">
		Ext.onReady(function() {
			MODx.load({ xtype: "msurlfilter-page-home"});
		});
		</script>');
	}


	/**
	 * @return string
	 */
	public function getTemplateFile() {
		return $this->msUrlfilter->config['templatesPath'] . 'home.tpl';
	}
}