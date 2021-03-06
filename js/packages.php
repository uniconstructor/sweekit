<?php
/**
 * packages.php
 *
 * PHP version 5.2+
 *
 * @author    Philippe Gaultier <pgaultier@sweelix.net>
 * @copyright 2010-2013 Sweelix
 * @license   http://www.sweelix.net/license license
 * @version   2.0.0
 * @link      http://www.sweelix.net
 * @category  js
 * @package   Sweeml.js
 */

return array(
		'sweelix' => array(
			'js' => array('sweelix.js'),
		),
		'debug' => array(
			'js' => array('sweelix.debug.js'),
			'depends' => array('sweelix', 'log4javascript'),
		),
		'callback' => array(
			'js' => array('sweelix.callback.js'),
			'depends' => array('sweelix', 'debug'),
		),
		'ajax' => array(
			'js' => array('sweelix.ajax.js'),
			'depends' => array('jquery', 'sweelix', 'debug', 'callback'),
		),
		'shadowbox' => array(
			'js' => array('sweelix.shadowbox.js'),
			'depends' => array('sweelix', 'debug', 'callback', 'shadowboxjs'),
		),
		'notice' => array(
			'js' => array('sweelix.notice.js'),
			'css' => array('sweelix.notice.css'),
			'depends' => array('jquery', 'sweelix', 'debug', 'callback'),
		),
		'log4javascript' => array(
			'js' => array('log4javascript/log4javascript.js'),
		),
		'shadowboxjs' => array(
			'js' => array('jquery.shadowbox.js'),
			'css' => array('shadowbox.css'),
			'depends' => array('jquery', 'sweelix', 'debug', 'callback'),
		),
		'plupload.html5' => array(
			'js' => array('plupload/plupload.html5.js'),
			'depends' => array('jquery', 'sweelix', 'debug', 'callback', 'ajax', 'plupload', 'sweepload'),
		),
		'plupload.html4' => array(
			'js' => array('plupload/plupload.html4.js'),
			'depends' => array('jquery', 'sweelix', 'debug', 'callback', 'ajax', 'plupload', 'sweepload'),
		),
		'plupload.flash' => array(
			'js' => array('plupload/plupload.flash.js'),
			'depends' => array('jquery', 'sweelix', 'debug', 'callback', 'ajax', 'plupload', 'sweepload'),
		),
		'plupload.browserplus' => array(
			'js' => array('plupload/plupload.browserplus.js'),
			'depends' => array('jquery', 'sweelix', 'debug', 'callback', 'ajax', 'plupload', 'sweepload'),
		),
		'plupload.silverlight' => array(
			'js' => array('plupload/plupload.silverlight.js'),
			'depends' => array('jquery', 'sweelix', 'debug', 'callback', 'ajax', 'plupload', 'sweepload'),
		),
		'plupload.gears' => array(
			'js' => array('plupload/plupload.gears.js'),
			'depends' => array('jquery', 'sweelix', 'debug', 'callback', 'ajax', 'plupload', 'sweepload'),
		),
		'plupload' => array(
			'js' => array('plupload/plupload.js'),
			'depends' => array('jquery', 'sweelix', 'debug', 'callback', 'ajax'),
		),
		'plupload.full' => array(
			'js' => array('plupload/plupload.full.js'),
			'depends' => array('jquery', 'sweelix', 'debug', 'callback', 'ajax'),
		),
		'plupload.ui.plupload' => array(
			'js' => array('plupload/jquery.ui.plupload/jquery.ui.plupload.js'),
			'css' => array('plupload/jquery.ui.plupload/css/jquery.ui.plupload.css'),
			'depends' => array('jquery', 'sweelix', 'debug', 'callback', 'ajax'),
		),
		'sweepload' => array(
			'js' => array('sweelix.plupload.js'),
			'depends' => array('jquery', 'sweelix', 'debug', 'callback', 'ajax'),
		),
		'sweepload.ui' => array(
			'js' => array('sweelix.plupload.ui.js'),
			'css' => array('sweelix.plupload.ui.css'),
			'depends' => array('jquery', 'sweelix', 'debug', 'callback', 'ajax', 'sweepload'),
		),
	);