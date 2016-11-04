<?php
//Загрузить объект из таблицы block_id = 1
$block = Mage::getModel('siteblocks/block')->load(1);

//Загрузить коллекцию блоков из таблицы
$blocks = Mage::getModel('siteblocks/block')->getCollection();

//Альтернативный способ загрузки коллекции
$blocks = Mage::getResourceModel('siteblocks/block_collection');

//Использование хелпера
Mage::helper('siteblocks');
