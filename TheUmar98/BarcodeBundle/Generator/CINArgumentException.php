<?php
/**
 *--------------------------------------------------------------------
 *
 * Argument Exception
 *
 *--------------------------------------------------------------------
 * 
 * @author  Akhtar Khan <er.akhtarkhan@gmail.com>
 * @link http://www.theumar98.com
 * @package https://github.com/theumar98/barcode-generator
 */

namespace TheUmar98\BarcodeBundle\Generator;
use Exception;

class CINArgumentException extends Exception {
    protected $param;

    /**
     * Constructor with specific message for a parameter.
     *
     * @param string $message
     * @param string $param
     */
    public function __construct($message, $param) {
        $this->param = $param;
        parent::__construct($message, 20000);
    }
}
?>