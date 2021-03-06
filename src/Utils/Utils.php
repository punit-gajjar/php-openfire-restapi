<?php
/**
 * OpenFireRestAPI is based entirely on official documentation of the REST API
 * Plugin and you can extend it by following the directives of the documentation
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code. For the full list of
 * contributors, visit https://github.com/gnello/PHPOpenFireRestAPI/contributors
 *
 * @author Luca Agnello <luca@gnello.com>
 * @link https://www.igniterealtime.org/projects/openfire/plugins/restapi/readme.html
 */

namespace Gnello\OpenFireRestAPI\Utils;

/**
 * Class Utils
 * @package Gnello\OpenFireRestAPI\Utils
 */
abstract class Utils
{
    /**
     * @param $item
     * @return array
     */
    public static function toArray($item) {
        if (!is_array($item)) {
            $item = array($item);
        }

        return $item;
    }
}
