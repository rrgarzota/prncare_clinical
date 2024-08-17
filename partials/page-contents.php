<?php

if ($currentModule) {

    switch ($currentModule) {
        case 'forms-primary':
            $links = array(
                'submit-add' => array(
                    'id' => 'submit-add',
                    'icon' => 'fa-plus-circle',
                    'label' => 'Add',
                    'content' => 'forms-submit-add.php',
                    'page' => 'sap'
                ),
                'edit' => array(
                    'id' => 'edit',
                    'icon' => 'fa-pencil-alt',
                    'label' => 'Edit',
                    'content' => 'forms-edit.php',
                    'page' => 'edp'
                )
            );
        break;
    }
}

?>