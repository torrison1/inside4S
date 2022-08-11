<?php
namespace Tools\InsideAutoTables\Inputs;

class Unix_time {


	public function input_form($input_array)
	{
    	return "<input type=\"text\" name=\"".$input_array['name']."\" id=\"".$input_array['name']."\" class=\"input form-control\" value=\"".@gmdate("Y-m-d H:i:s", $input_array['value'])."\" >";
	}
	public function db_save($input_array)
	{
		return strtotime($input_array['value']);
	}
	public function crud_view($input_array)
	{
		return gmdate("Y-m-d H:i:s", $input_array['value']);
	}

}
