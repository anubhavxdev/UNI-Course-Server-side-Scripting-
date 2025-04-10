<?php

$inputs = array(
    "value1" => "123",
    "value2" => "150",
    "value3" => "250",
    "string1" => "HelloWorld",
    "string2" => "<script>alert('XSS');</script>"
);

$options = array(
    "value1" => array(
        "filter" => FILTER_VALIDATE_INT,
        "options" => array(
            "min_range" => 100,
            "max_range" => 200
        )
    ),
    "value2" => array(
        "filter" => FILTER_VALIDATE_INT,
        "options" => array(
            "min_range" => 100,
            "max_range" => 200
        )
    ),
    "value3" => array(
        "filter" => FILTER_VALIDATE_INT,
        "options" => array(
            "min_range" => 100,
            "max_range" => 200
        )
    ),
    "string1" => array(
        "filter" => FILTER_SANITIZE_STRING
    ),
    "string2" => array(
        "filter" => FILTER_SANITIZE_STRING
    )
);

$filteredInputs = filter_var_array($inputs, $options);

foreach ($filteredInputs as $key => $value) {
    if ($value === false) {
        echo "$key is not valid.<br>";
    } else {
        echo "$key is valid: $value<br>";
    }

    // Example usage of str_starts_with() and str_ends_with()
    if (is_string($value)) {
        if (str_starts_with($value, "Hello")) {
            echo "$key starts with 'Hello'.<br>";
        }
        if (str_ends_with($value, "World")) {
            echo "$key ends with 'World'.<br>";
        }
    }
}

?>