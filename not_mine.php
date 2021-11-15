<?
//Замените названия module.name1, module.name2, module.name3 и так далее на модули которые хотите скрыть от серверов битрикса
$arModules = array(
'module.aspro.max',
'module.bitrix.siteinfoportal',
'module.bitrix.sitecorporate',
'module.bitrix.sitepersonal',
'module.bitrix.sitecommunity',
'module.bitrix.siteeshop'
);

foreach($arModules as $val){
    if(isset($arClientModules[$val])) unset($arClientModules[$val]);
}
?>