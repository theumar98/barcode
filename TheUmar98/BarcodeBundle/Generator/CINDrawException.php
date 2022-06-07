<?php
/**
 *--------------------------------------------------------------------
 *
 * Draw Exception
 *
 *--------------------------------------------------------------------
 * @author  Akhtar Khan <er.akhtarkhan@gmail.com>
 * @link http://www.theumar98.com
 * @package https://github.com/theumar98/barcode-generator
 */
namespace TheUmar98\BarcodeBundle\Generator;
use Exception;

class CINDrawException extends Exception {
    /**
     * Constructor with specific message.
     *
     * @param string $message
     */
    public function __construct($message) {
        parent::__construct($message, 30000);
    }
}
?>