<?php
/**
 * This file is released as free software: You can redistribute it and/or modify
 * it under the terms of the GNU General Public License v2 as published by
 * the Free Software Foundation, version 2 of the License.
 *
 * It is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with. If not, see <http://www.gnu.org/licenses>.
 *
 * @author      Christian André Lewin <christi@nlew.in>
 * @copyright   (c) 2005-2015 Lewinlabs. All Rights Reserved.
 * @link        https://www.lewinlabs.de
 * @license     GNU GPL v2
 */

if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'LEWINLABS.' . $_EXTKEY,
        'tools',
        'tx_t3deployer',
        // Position of the module
        '',
        [
            'Deployment' => 'index',
        ],
        [   // Additional configuration
            'access' => 'user,group',
            'icon'   => 'EXT:' . $_EXTKEY . '/ext_icon.png',
            'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mod_deployer.xml',
        ]
    );
}
