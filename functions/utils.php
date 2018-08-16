<?php 
    function path_join(string $path1, string $path2){
        return $path1 . "/" . $path2;
    }
    function sanitize($input){
        return htmlspecialchars(trim($input));
    }

    function secure_input($array, $whitelist = null){
        if(empty($whitelist)){
            return array_map("sanitize", $array);
        }
        $result = array();
        foreach ($array as $key => $value){
            if(in_array($key, $whitelist)){
                $result[$key] = $value;
            } else {
                $result[$key] = sanitize($value);
            }
        }
        return $result;
    }

    function is_email(string $input){
        return filter_var($input, FILTER_VALIDATE_EMAIL);
    }

    function is_phone(string $input){
        return filter_var($input, FILTER_VALIDATE_REGEXP, array(
            "options" => array(
                                "regexp"=>"/^\+[7]{1}-[0-9]{3}-[0-9]{3}-[0-9]{4}$/"
                            )
                        ));
    }

    function is_valid_extension(string $input){
        return filter_var($input, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/\.(pptx?|docx?|pdf|jpe?g|png)$/")));
    }

    // function _is_valid_extensions(string $input){
    //     return $input;
    // }
?>
