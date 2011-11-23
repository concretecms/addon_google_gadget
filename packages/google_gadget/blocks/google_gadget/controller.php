<?
defined('C5_EXECUTE') or die(_("Access Denied."));

Loader::block('library_file');

class GoogleGadgetBlockController extends BlockController {
	
	var $pobj;

	protected $btTable = 'btContentLocal';
	protected $btInterfaceWidth = "400";
	protected $btInterfaceHeight = "170";
	
	public $content = "";	
	
	public function getBlockTypeDescription() {
		return t("For adding Google Gadgets to your webpage.");
	}
	
	public function getBlockTypeName() {
		return t("Google Gadget");
	}	 
	
	public function __construct($obj = null) {		
		parent::__construct($obj); 
	}
	
	public function view(){ 
		$this->set('content', $this->content); 
	} 
	
	public function save($data) { 
		$args['content'] = isset($data['content']) ? $data['content'] : '';
		parent::save($args);
	}
}

?>