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

$EM_CONF[$_EXTKEY] = [
    'title'            => 'T3 Deployer',
    'description'      => 'A simple extension to facilitate the deployment of code where no other option is possible.',
    'category'         => 'misc',
    'author'           => 'Christian Lewin',
    'author_company'   => 'Lewinlabs',
    'author_email'     => 'christi@nlew.in',
    'dependencies'     => 'extbase,fluid',
    'state'            => 'alpha',
    'clearCacheOnLoad' => '1',
    'version'          => '0.0.0',
    'constraints'      => [
        'depends' => [
            'typo3'   => '6.2.0-0.0.0',
            'extbase' => '0.0.0-0.0.0',
            'fluid'   => '0.0.0-0-0-0',
            'php'     => '5.5.0-0.0.0',
        ]
    ]
];
