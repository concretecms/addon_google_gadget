<?php 

defined('C5_EXECUTE') or die(_("Access Denied."));

class GoogleGadgetPackage extends Package {

	protected $pkgHandle = 'google_gadget';
	protected $appVersionRequired = '5.2.0';
	protected $pkgVersion = '1.0';
	
	public function getPackageDescription() {
		return t("For adding Google Gadgets to your webpage.");
	}
	
	public function getPackageName() {
		return t("Google Gadget");
	}
	
	public function install() {
		$pkg = parent::install();
		
		// install block		
		BlockType::installBlockTypeFromPackage('google_gadget', $pkg);
		
	}




}