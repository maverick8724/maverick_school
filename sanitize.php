<?php
function sanitize($sanitizedText){
    if(!empty($sanitizedText)){
        $sanitizedText = trim($sanitizedText);
        $sanitizedText = stripcslashes($sanitizedText);
        $sanitizedText = htmlspecialchars($sanitizedText);

        return $sanitizedText;
    }
        else {
            return '';
        }

    }

?>