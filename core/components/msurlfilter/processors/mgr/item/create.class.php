<?php

/**
 * Create an Item
 */
class msUrlfilterItemCreateProcessor extends modObjectCreateProcessor {
	public $objectType = 'msUrlfilterItem';
	public $classKey = 'msUrlfilterItem';
	public $languageTopics = array('msurlfilter');
	//public $permission = 'create';


	/**
	 * @return bool
	 */
	public function beforeSet() {
		$url = trim($this->getProperty('url'));
		if (empty($url)) {
			$this->modx->error->addField('url', $this->modx->lexicon('msurlfilter_item_err_name'));
		}
		elseif ($this->modx->getCount($this->classKey, array('url' => $url))) {
			$this->modx->error->addField('url', $this->modx->lexicon('msurlfilter_item_err_ae'));
		}

		return parent::beforeSet();
	}

}

return 'msUrlfilterItemCreateProcessor';