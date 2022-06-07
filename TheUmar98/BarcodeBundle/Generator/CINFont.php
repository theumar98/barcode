<?php
/**
 *--------------------------------------------------------------------
 *
 * Interface for a font.
 *
 *--------------------------------------------------------------------
 * @author  Akhtar Khan <er.akhtarkhan@gmail.com>
 * @link http://www.theumar98.com
 * @package https://github.com/theumar98/barcode-generator
 */
namespace TheUmar98\BarcodeBundle\Generator;

interface CINFont {
    public /*internal*/ function getText();
    public /*internal*/ function setText($text);
    public /*internal*/ function getRotationAngle();
    public /*internal*/ function setRotationAngle($rotationDegree);
    public /*internal*/ function getBackgroundColor();
    public /*internal*/ function setBackgroundColor($backgroundColor);
    public /*internal*/ function getForegroundColor();
    public /*internal*/ function setForegroundColor($foregroundColor);
    public /*internal*/ function getDimension();
    public /*internal*/ function draw($im, $x, $y);
}
?>