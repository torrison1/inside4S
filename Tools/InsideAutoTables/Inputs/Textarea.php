<?php
namespace Tools\InsideAutoTables\Inputs;

class Textarea {

	public function input_form($input_array)
	{
    	if (!isset ($input_array['height'])) {$input_array['width'] = 500; $input_array['height'] = 200;}
    	return "<br /><textarea name=\"".$input_array['name']."\" id=\"".$input_array['name']."\" class=\"input form-control\" style=\"height:".$input_array['height']."px;\">".$input_array['value']."</textarea>";
	}


}
