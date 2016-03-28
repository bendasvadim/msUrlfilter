<?php

/**
 * Class msUrlfilterMainController
 */
abstract class msUrlfilterMainController extends modExtraManagerController {
	/** @var msUrlfilter $msUrlfilter */
	public $msUrlfilter;


	/**
	 * @return void
	 */
	public function initialize() {
		$corePath = $this->modx->getOption('msurlfilter_core_path', null, $this->modx->getOption('core_path') . 'components/msurlfilter/');
		require_once $corePath . 'model/msurlfilter/msurlfilter.class.php';

		$this->msUrlfilter = new msUrlfilter($this->modx);
		//$this->addCss($this->msUrlfilter->config['cssUrl'] . 'mgr/main.css');
		$this->addJavascript($this->msUrlfilter->config['jsUrl'] . 'mgr/msurlfilter.js');
		$this->addHtml('
		<script type="text/javascript">
			msUrlfilter.config = ' . $this->modx->toJSON($this->msUrlfilter->config) . ';
			msUrlfilter.config.connector_url = "' . $this->msUrlfilter->config['connectorUrl'] . '";
		</script>
		');

		parent::initialize();
	}


	/**
	 * @return array
	 */
	public function getLanguageTopics() {
		return array('msurlfilter:default');
	}


	/**
	 * @return bool
	 */
	public function checkPermissions() {
		return true;
	}
}


/**
 * Class IndexManagerController
 */
class IndexManagerController extends msUrlfilterMainController {

	/**
	 * @return string
	 */
	public static function getDefaultController() {
		return 'home';
	}
}