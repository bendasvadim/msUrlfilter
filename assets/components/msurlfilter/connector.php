<?php
/** @noinspection PhpIncludeInspection */
require_once dirname(dirname(dirname(dirname(__FILE__)))) . '/config.core.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CORE_PATH . 'config/' . MODX_CONFIG_KEY . '.inc.php';
/** @noinspection PhpIncludeInspection */
require_once MODX_CONNECTORS_PATH . 'index.php';
/** @var msUrlfilter $msUrlfilter */
$msUrlfilter = $modx->getService('msurlfilter', 'msUrlfilter', $modx->getOption('msurlfilter_core_path', null, $modx->getOption('core_path') . 'components/msurlfilter/') . 'model/msurlfilter/');
$modx->lexicon->load('msurlfilter:default');

// handle request
$corePath = $modx->getOption('msurlfilter_core_path', null, $modx->getOption('core_path') . 'components/msurlfilter/');
$path = $modx->getOption('processorsPath', $msUrlfilter->config, $corePath . 'processors/');
$modx->request->handleRequest(array(
	'processors_path' => $path,
	'location' => '',
));