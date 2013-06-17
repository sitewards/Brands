<?php
/**
 * Sitewards_Brands_IndexController
 *  - Create the actions for the frontname: sitewardsbrands
 *
 * @category    Sitewards
 * @contact     magento@sitewards.com
 * @copyright   Copyright (c) 2013 Sitewards GmbH (http://www.sitewards.com/)
 * @licence     OSL-3.0
 * @package     Sitewards_Brands
 */
class Sitewards_Brands_AdminController extends Mage_Adminhtml_Controller_Action {
	/**
	 * Create the action for the url: /sitewardsbrands/admin/index
	 */
	public function indexAction() {
		$this->loadLayout();
		$this->renderLayout();
	}
}