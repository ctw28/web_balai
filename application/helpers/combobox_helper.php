<?php

function cmb_get_from_db($attribute_name, $table_name, $field_id, $field_name, $selected=null){
    $data = get_instance()->db->get($table_name)->result();
    $combo =  "<Select name ='$attribute_name'>";
        foreach ($data as $row){
            $combo .= "<option value = '".$row->$field_id."' ";
            $combo .= $selected == $row->$field_id ? "selected":"";
            $combo .= ">".$row->$field_name;
            $combo .= "</option>";
        }
    $combo .= "</select>";
    return $combo;
    
}