<?php
class Box extends DataObject
{
	static $db = array (
		'Width' => 'Text',
		'Text' => 'HTMLText',
	);
 
	static $has_one = array (
		'DynamicLayoutPage' => 'DynamicLayoutPage',
                'Image' => 'Image'

	);
 
        static $defaults = array(
            "Widht" => '30%'
          );

	public function getCMSFields_forPopup()
	{       
                $fields = new FieldSet();
                        
                $fields->push( new TextField( 'Width', 'Width' ));
                $fields->push (new ImageField('Image'));

                $fields->push( new SimpleHTMLEditorField( 'Text', 'Text' ));
		return $fields;
	
	}
	
	

}
?>