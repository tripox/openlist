<?php
/**
 * Openlist index file | index.php
 *
 * @package     Openlist
 * @author      B14
 * @version     1.0
 */

/**
 * WSDL:
 * http://code.google.com/p/php-wsdl-creator/
 * http://framework.zend.com/manual/en/zend.soap.html
 *
 * SOAP:
 * http://dk.php.net/manual/en/class.soapserver.php
 */

require_once 'settings.php';

if (!isset($_GET['wsdl'])) {
  require_once OPENLIST_ROOT . '/boot.php';
}
else {
  require_once OPENLIST_ROOT . '/wsdl.php';
}
