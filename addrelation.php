<?php
require_once 'vtlib/Vtiger/Module.php';
require_once 'modules/ModComments/ModComments.php';
$commentsModule = Vtiger_Module::getInstance('ModComments');
$fieldInstance = Vtiger_Field::getInstance('related_to', $commentsModule);
$fieldInstance->setRelatedModules(array('ModuleName'));// Give the Module name for which you want to add comment
$detailviewblock = ModComments::addWidgetTo('ModuleName');//Give the Module name for which you want to add comment
echo "Comments module successfully linked!";
?>
