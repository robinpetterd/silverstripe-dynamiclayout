<?Php
	
	class DynamicLayoutPage extends Page
	{
		static $db = array();
		
		static $has_many = array (
		 'Boxes' => 'Box'
	);
 
	public function getCMSFields()
		{
			$f = parent::getCMSFields();
			$tablefield = new HasManyComplexTableField(
				$this,
				'Boxes',
				'Box',
				array('Width' => 'Width','Height'=>'Height','Text' => 'Text'),
				'getCMSFields_forPopup'
			);
			
			 $tablefield->setParentClass('DynamicLayoutPage');
			
			$f->addFieldToTab( 'Root.Content.Boxes', $tablefield );
			
			return $f;
		}
		
		
	

	}
	
	
	class DynamicLayoutPage_Controller extends Page_Controller
	{
		public function init()
		{
			parent::init();
			Requirements::set_write_js_to_body(false);

			Requirements::javascript('DynamicLayout/thirdparty/jquery-1.6.4.min.js');

			Requirements::css('DynamicLayout/css/Style.css');
			Requirements::javascript('DynamicLayout/thirdparty/jquery.masonry.min.js');
			
		}
	}
	
?>