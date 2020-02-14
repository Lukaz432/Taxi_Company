<?php

function validate_fields_match($filtered_input, &$form, $params)
{
    $match = true;

    foreach ($params as $field_id) {
        $ref_value = $ref_value ?? $filtered_input[$field_id];
        if ($ref_value != $filtered_input[$field_id]) {
            $match = false;
            break;
        }
    }

    if (!$match) {
        $form['fields'][$field_id]['error'] = 'Laukai nesutampa!';
        return false;
    }

    return true;
}

function validate_not_empty($field_value, &$field)
{
    if (strlen($field_value) == 0) {
        $field['error'] = 'Laukelis negali būti tuščias!';
    } else {
        return true;
    }
}

function validate_is_number($field_value, &$field)
{
    if (!is_numeric($field_value)) {
        $field['error'] = 'Privalo būti skaičius!';
    } else {
        return true;
    }
}

function validate_is_positive($field_value, &$field)
{
    if ($field_value < 0) {
        $field['error'] = 'Įveskite teigiama skaičių!';
    } else {
        return true;
    }
}

function validate_first_letter_is_capital($field_value, &$field)
{
    if (ucfirst($field_value) !== $field_value) {
        $field['error'] = 'Pirmoji raidė privalo būti didžioji!';
        return false;
    }
    return true;
}

function validate_contains_capital_letter($field_value, &$field)
{
    if (ucfirst($field_value) !== $field_value) {
        $field['error'] = 'Pirmoji raidė privalo būti didžioji raidė!';
        return false;
    }
    return true;
}

function validate_phone_number($field_value, &$field)
{
    if (!preg_match('/\[0-9]{9}/', $field_value)) {
        $field['error'] = "Telefono numeris turi būti '86xxxxxxx'";
    } else {
        return true;
    }
}

function validate_has_space($field_value, &$field)
{
    if (!preg_match('/[ ]/', trim($field_value))) {
        $field['error'] = 'Žodžiai privalo būti atskirti tarpu!';
        return false;
    }
    return true;
}

function validate_has_no_space($field_value, &$field)
{
    if (preg_match('/[\s]/', $field_value)) {
        $field['error'] = 'Negalima naudoti tarpų!';
        return false;
    }
    return true;
}

function validate_mail($field_value, &$field)
{
    if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $field_value)) {
        $field['error'] = 'El. Pašto adrese yra klaida!';
        return false;
    }
    return true;
}

function validate_name_char_limit($field_value, &$field)
{
    if (!preg_match('/[a-zA-Z]{1,40}$/', $field_value)) {
        $field['error'] = 'Varde negali būti skaičių, tarpų ir simbolių skaičius negali viršyti 40 simbolių!';
        return false;
    }
    return true;
}

function validate_surname_char_limit($field_value, &$field)
{
    if (!preg_match('/[a-zA-Z]{1,40}$/', $field_value)) {
        $field['error'] = 'Pavardėje negali būti skaičių, tarpų ir simbolių skaičius negali viršyti 40 simbolių!';
        return false;
    }
    return true;
}