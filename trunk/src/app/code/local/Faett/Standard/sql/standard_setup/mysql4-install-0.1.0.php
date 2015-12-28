<?php

/**
 * Faett_Standard
 *
 * NOTICE OF LICENSE
 * 
 * Faett_Standard is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * Faett_Standard is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with Faett_Standard. If not, see <http://www.gnu.org/licenses/>.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Faett_Standard to newer
 * versions in the future. If you wish to customize Faett_Standard for your
 * needs please refer to http://www.faett.net for more information.
 *
 * @category   Faett
 * @package    Faett_Standard
 * @copyright  Copyright (c) 2009 <tw@faett.net> Tim Wagner
 * @license    <http://www.gnu.org/licenses/> 
 * 			   GNU General Public License (GPL 3)
 */

/**
 * @category   	Faett
 * @package    	Faett_Standard
 * @copyright  	Copyright (c) 2009 <tw@faett.net> Tim Wagner
 * @license    	<http://www.gnu.org/licenses/> 
 * 				GNU General Public License (GPL 3)
 * @author      Tim Wagner <tw@faett.net>
 */

$installer = $this;

$installer->startSetup();

$installer->run("

INSERT INTO `{$installer->getTable('manager/package')}` (`channel_id_fk`, `name`, `summary`, `state`, `version_installed`, `version_latest`, `created_time`, `update_time`, `serialz`) VALUES
(1, 'ArtsOnIT_OfflineMaintenance', '', 2, '1.5.0', '1.5.0', NOW(), NOW(), ''),
(1, 'BoutikCircus_DeleteOrders', '', 2, '1.1', '1.1', NOW(), NOW(), ''),
(1, 'Flagbit_ChangeAttributeSet', '', 2, '1.0.4', '1.0.4', NOW(), NOW(), ''),
(1, 'Fontis_Recaptcha', '', 2, '2.1.0', '2.1.0', NOW(), NOW(), ''),
(1, 'Fooman_EmailAttachments', '', 2, '0.6.3', '0.6.3', NOW(), NOW(), ''),
(1, 'magento_classic_theme_free', '', 2, '1.1.3', '1.1.3', NOW(), NOW(), ''),
(1, 'magento_easy_tabs', '', 2, '1.1', '1.1', NOW(), NOW(), ''),
(1, 'Unirgy_Giftcert', '', 2, '0.9.14', '0.9.14', NOW(), NOW(), ''),
(1, 'RicoNeitzel_PaymentFilter', '', 2, '0.1.5beta', '0.1.5beta', NOW(), NOW(), '');

");

$installer->endSetup();