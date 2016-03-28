<?php
/** @var modX $modx */
/** @var Office $office */
if ($Office = $modx->getService('office', 'Office', MODX_CORE_PATH . 'components/office/model/office/')) {

	if (!($Office instanceof Office)) {
		$modx->log(xPDO::LOG_LEVEL_ERROR, '[msUrlfilter] Could not register paths for Office component!');

		return true;
	}
	elseif (!method_exists($Office, 'addExtension')) {
		$modx->log(xPDO::LOG_LEVEL_ERROR, '[msUrlfilter] You need to update Office for support of 3rd party packages!');

		return true;
	}

	/**@var array $options */
	switch ($options[xPDOTransport::PACKAGE_ACTION]) {
		case xPDOTransport::ACTION_INSTALL:
		case xPDOTransport::ACTION_UPGRADE:
			$Office->addExtension('msUrlfilter', '[[++core_path]]components/msurlfilter/controllers/office/');
			$modx->log(xPDO::LOG_LEVEL_INFO, '[msUrlfilter] Successfully registered msUrlfilter as Office extension!');
			break;

		case xPDOTransport::ACTION_UNINSTALL:
			$Office->removeExtension('msUrlfilter');
			$modx->log(xPDO::LOG_LEVEL_INFO, '[msUrlfilter] Successfully unregistered msUrlfilter as Office extension.');
			break;
	}
}
else {
	$modx->log(xPDO::LOG_LEVEL_ERROR, '[msUrlfilter] Could not register paths for Office component!');
}

return true;