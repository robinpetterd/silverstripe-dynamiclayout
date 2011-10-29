<?php
class Box extends DataObject
{
	static $db = array (
		'Width' => 'Int',
		'Height' => 'Int',
		'Text' => 'HTMLText'
	);
 
	static $has_one = array (
		'DynamicLayoutPage' => 'DynamicLayoutPage'
	);
 
	public function getCMSFields_forPopup()
	{ 	
			$fields = new FieldSet();
         
        $fields->push( new TextField( 'Width', 'Width' ) );
        $fields->push( new TextField( 'Height', 'Height' ) );
        $fields->push( new HTMLEditorField( 'Text', 'Text' ) );
		return $fields;
	
	}
	
	

}
?>