<?php
namespace Tools\InsideAutoTables\Inputs;

class Select_checkbox {


    public function input_form($input_array)
    {
        $selection_empty = '';
        $selection = '';
        $selection_off = '';
        if ($input_array['value'] == 1) $selection = " SELECTED";
        if ($input_array['value'] === '') $selection_empty = " SELECTED";
        if ($input_array['value'] === 0) $selection_off = " SELECTED";

        return "<select name=\"".$input_array['name']."\" id=\"".$input_array['name']."\" class=\"input form-control selectpicker \" value=\"1\"".$selection.">
  		<option value=\"\"".$selection_empty.">-</option>
  		<option value=\"0\"".$selection_off.">Off</option>
  		<option value=\"1\"".$selection.">On</option>
  		</select>";

    }
    public function crud_view($input_array)
    {
        if ($input_array['value'] == 1) return "<font color='darkgreen'>On</font>";
        else return "<font color='darkred'>Off</font>";
    }


}
