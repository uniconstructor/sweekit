<?php
/**
 * File SwMailProvider.php
 *
 * PHP version 5.2+
 *
 * @author    Philippe Gaultier <pgaultier@sweelix.net>
 * @copyright 2010-2013 Sweelix
 * @license   http://www.sweelix.net/license license
 * @version   2.0.0
 * @link      http://www.sweelix.net
 * @category  mailer
 * @package   sweekit.mailer
 */

/**
 * Class SwMailProvider allow configuration of selected mailer
 *
 * component must be called mailer.
 *
 * <code>
 * 		'mailProvider' => array(
 * 			'class' => 'ext.sweekit.mailer.SwMailProvider',
 * 			'fromEmail' => 'sender@email.com',
 * 			'fromName' => 'Sender Name',
 * 			'replyTo' => 'reply@email.com',
 * 			'connector' => array(
 * 				//  @see SwXxxMailer (email provider)
 * 			),
 * 		),
 * </code>
 *
 * @author    Philippe Gaultier <pgaultier@sweelix.net>
 * @copyright 2010-2013 Sweelix
 * @license   http://www.sweelix.net/license license
 * @version   2.0.0
 * @link      http://www.sweelix.net
 * @category  mailer
 * @package   sweekit.mailer
 * @since     2.0.0
 */
 class SwMailProvider extends CApplicationComponent {
 	/**
 	 * @var boolean define status of the module
 	 */
 	private $_initialized = false;

 	/**
 	 * @var array Connector configuration
 	 */
 	private $_connector;

 	/**
 	 * Define connector parameters using classic component configuration
 	 *
 	 * @param array $connector connector configuration
 	 *
 	 * @return void
 	 * @since  2.0.0
 	 */
 	public function setConnector($connector) {
 		if($this->_initialized === true) {
			throw new CException(Yii::t('sweelix', 'SwMailProvider, connector can be defined only during configuration'));
		}
 		$this->_connector = $connector;
 	}

 	/**
 	 * Get current configuration
 	 *
 	 * @return array
 	 * @since  2.0.0
 	 */
 	public function getConnector() {
 		return $this->_connector;
 	}

 	/**
 	 * @var string reply email
 	 */
 	private $_replyTo;

 	/**
 	 * Define the replyTo field
 	 *
 	 * @param string $email email for reply to
 	 *
 	 * @return void
 	 * @since  2.0.0
 	 */
 	public function setReplyTo($email) {
 	 	if($this->_initialized === true) {
			throw new CException(Yii::t('sweelix', 'SwMailProvider, replyTo can be defined only during configuration'));
		}
 		$this->_replyTo = $email;
 	}

 	/**
 	 * Retrieve current replyTo setting
 	 *
 	 * @return string
 	 * @since  2.0.0
 	*/
 	public function getReplyTo() {
 		return $this->_replyTo;
 	}

 	/**
 	 * @var array from data
 	 */
 	private $_from;

 	/**
 	 * Define the from email
 	 *
 	 * @param string $email email sender
 	 *
 	 * @return void
 	 * @since  2.0.0
 	*/
 	public function setFromEmail($email) {
 		if($this->_initialized === true) {
 			throw new CException(Yii::t('sweelix', 'SwMailProvider, fromEmail can be defined only during configuration'));
 		}
 		$this->_from['email'] = $email;
 	}

 	/**
 	 * Define the from field
 	 *
 	 * @param string $name readable name
 	 *
 	 * @return void
 	 * @since  2.0.0
 	 */
 	public function setFromName($name) {
 		if($this->_initialized === true) {
 			throw new CException(Yii::t('sweelix', 'SwMailProvider, fromName can be defined only during configuration'));
 		}
 		$this->_from['name'] = $name;
 	}

 	/**
 	 * Retrieve current from settings array('email' => $email, 'name' => $name)
 	 *
 	 * @return array
 	 * @since  2.0.0
 	*/
 	public function getFrom() {
 		return $this->_from;
 	}

 	private $_mail;

 	/**
 	 * Produce a *new* configured Email
 	 *
 	 * @return SwMail
 	 * @since  2.0.0
 	 */
 	public function getMailer() {
 		if($this->_mail === null) {
 			$this->_mail = Yii::createComponent($this->getConnector());
 			$this->_mail->setFrom($this->_from['email'], $this->_from['name']);
 			$this->_mail->setReplyTo($this->_replyTo);
 		}
		return clone $this->_mail;
 	}

 	/**
 	 * Init module with parameters @see CApplicationComponent::init()
 	 *
 	 * @return void
 	 * @since  2.0.0
 	 */
 	public function init() {
 		$this->attachBehaviors($this->behaviors);
 		$this->_initialized = true;
 	}

 }
