<?php
/**
 *--------------------------------------------------------------------
 *
 * Parse Exception
 *
 *--------------------------------------------------------------------
 * @author  Akhtar Khan <er.akhtarkhan@gmail.com>
 * @link http://www.theumar98.com
 * @package https://github.com/theumar98/barcode-generator
 */
namespace TheUmar98\BarcodeBundle\Generator;
use Exception;

class CINParseException extends Exception {
    protected $barcode;

    /**
     * Constructor with specific message for a parameter.
     *
     * @param string $barcode
     * @param string $message
     */
    public function __construct($barcode, $message) {
        $this->barcode = $barcode;
        parent::__construct($message, 10000);
    }
}
?>