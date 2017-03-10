<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @see       https://github.com/zendframework/ZendService_Amazon for the canonical source repository
 * @copyright Copyright (c) 2005-2017 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   https://github.com/zendframework/ZendService_Amazon/blob/master/LICENSE.md New BSD License
 * @package   Zend_Service
 */

namespace ZendService\Amazon\Ec2\Exception;

use ZendService\Amazon\Exception;

/**
 * @category   Zend
 * @package    Zend_Service_Amazon
 * @subpackage Ec2
 */
class RuntimeException extends Exception\RuntimeException implements ExceptionInterface
{
}
