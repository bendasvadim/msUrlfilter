<?php
/** @var array $scriptProperties */
/** @var msUrlfilter $msUrlfilter 
[[!msUrlfilter? &field=`text` &default=`[[*content]]`]]
<title>[[!msUrlfilter? &field=`title` &default=`[[*title]]`]]</title>
<meta name="description" content="[[!msUrlfilter? &field=`description` &default=`[[*seo_description]]`]]">
<meta name="keywords" content="[[!msUrlfilter? &field=`keywords` &default=`[[*keywords]]`]]">
*/
if (!$msUrlfilter = $modx->getService('msurlfilter', 'msUrlfilter', $modx->getOption('msurlfilter_core_path', null, $modx->getOption('core_path') . 'components/msurlfilter/') . 'model/msurlfilter/', $scriptProperties)) {
	return 'Could not load msUrlfilter class!';
}
/**
 * $field - Поле для вывода 
 * $default - Вывод по умолчанию
**/
$field = $modx->getOption('field', $scriptProperties, 'title');
$default = $modx->getOption('default', $scriptProperties, $modx->resource->get('pagetitle'));

if ($meta = $modx->getObject('msUrlfilterItem', array('url' => $_SERVER['REQUEST_URI'], 'active' => '1'))) {
    if ($meta->get($field)) {
        return $meta->get($field);
    } else {
        return $default;
    }
} else {
    return $default;
}