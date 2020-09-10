<?php
// Your array here!
$arr = array(
  "Text_Field" => null,
  "Would_You_Like_Us_To_Treat_Your_Partner_for_20" => "Yes",
  "Is_your_partner_present_at_this_time_to_answer_few_questions" => "Yes",
  "Partners_Full_name" => "fgh",
  "Partners_Date_of_Birth" => "08/30/1999",
  "Partners_Email" => "divyakanak@gmail.com",
  "Partners_Phone_number" => "1234567890",
  "Partners_Medical_History" => "kuh",
  "Do_you_have_any_allergies_to_medications" => "Yes",
  "List_of_allergies_to_medications" => "dfg",
  "Are_you_on_any_medications" => "No",
  "Do_you_have_any_symptoms" => "No",
  "Do_you_have_any_medical_history_we_should_be_aware_of" => "No",
  "Do_you_want_to_pick_up_your_medication_as_a_different_pharmacy" => "No",
  "Partners_Picture_ID" => "Partners_Picture_ID1599739859.png",
);
echo json_encode($arr);

$key_name = "Would_You_Like_Us_To_Treat_Your_Partner_for_20";
$new_key_name = "Would_You_Like_Us_To_Treat_Your_Partner";

// Get the field value
$field = $arr[$key_name];

// Get the key position in the array (numeric)
$key_position = array_search($key_name, array_keys($arr));

// Remove the original value
unset($arr[$key_name]);

// Add the new value back in, with the new key, at the old position
$arr1 = array_merge(
    array_slice( $arr, 0, $key_position, true ),
    array( $new_key_name => $field ), 
    array_slice( $arr, $key_position, null, true )
);

echo "\n";

echo json_encode($arr1);
?>

