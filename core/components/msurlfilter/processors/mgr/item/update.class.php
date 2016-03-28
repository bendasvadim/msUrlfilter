<?php

/**
 * Update an Item
 */
class msUrlfilterItemUpdateProcessor extends modObjectUpdateProcessor {
	public $objectType = 'msUrlfilterItem';
	public $classKey = 'msUrlfilterItem';
	public $languageTopics = array('msurlfilter');
	//public $permission = 'save';


	/**
	 * We doing special check of permission
	 * because of our objects is not an instances of modAccessibleObject
	 *
	 * @return bool|string
	 */
	public function beforeSave() {
		if (!$this->checkPermissions()) {
			return $this->modx->lexicon('access_denied');
		}

		return true;
	}


	/**
	 * @return bool
	 */
	public function beforeSet() {
		$id = (int)$this->getProperty('id');
		$url = trim($this->getProperty('url'));
		if (empty($id)) {
			return $this->modx->lexicon('msurlfilter_item_err_ns');
		}

		if (empty($url)) {
			$this->modx->error->addField('url', $this->modx->lexicon('msurlfilter_item_err_name'));
		}
		elseif ($this->modx->getCount($this->classKey, array('url' => $url, 'id:!=' => $id))) {
			$this->modx->error->addField('url', $this->modx->lexicon('msurlfilter_item_err_ae'));
		}

		return parent::beforeSet();
	}
}

return 'msUrlfilterItemUpdateProcessor';
