<?php

/**
 * Remove an Items
 */
class msUrlfilterOfficeItemRemoveProcessor extends modObjectProcessor {
	public $objectType = 'msUrlfilterItem';
	public $classKey = 'msUrlfilterItem';
	public $languageTopics = array('msurlfilter');
	//public $permission = 'remove';


	/**
	 * @return array|string
	 */
	public function process() {
		if (!$this->checkPermissions()) {
			return $this->failure($this->modx->lexicon('access_denied'));
		}

		$ids = $this->modx->fromJSON($this->getProperty('ids'));
		if (empty($ids)) {
			return $this->failure($this->modx->lexicon('msurlfilter_item_err_ns'));
		}

		foreach ($ids as $id) {
			/** @var msUrlfilterItem $object */
			if (!$object = $this->modx->getObject($this->classKey, $id)) {
				return $this->failure($this->modx->lexicon('msurlfilter_item_err_nf'));
			}

			$object->remove();
		}

		return $this->success();
	}

}

return 'msUrlfilterOfficeItemRemoveProcessor';