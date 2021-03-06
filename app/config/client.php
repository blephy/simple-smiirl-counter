<?php
// Your domaine name. Without protocol
// Do not change this variable unless you know what you are doing
$_ROOT_URL = $_SERVER['HTTP_HOST'];

// The path to the application in your remote server
// Exemple : '/simple-smiirl-counter' if you upload
// the app under https://your-domaine.fr/simple-smiirl-counter
// [STRING]
$_PROJECT_FOLDER = '/custom-smiirl-counter-api';

// Do not change this variable unless you know what you are doing
$_ROOT_FOLDER = $_SERVER['DOCUMENT_ROOT'].$_PROJECT_FOLDER;

// Do not change this variable unless you know what you are doing
$_APP_FOLDER = $_ROOT_FOLDER.'/app';

// The URL or relative path of the .json file
// First level is the $_APP_FOLDER variable bellow
// [STRING]
$_PATH_JSON_FILE = '/json/number.json';

// The URL or relative path of the actions log file
// First level is the $_APP_FOLDER variable bellow
// [STRING]
$_PATH_LOG_FILE = '/log/actions.log';

// The key name in front of the value number in your .json file
// [STRING]
$_KEY_NAME = 'number';

// Max number value of your counter.
// Type 5 if you have a 5 digit counter Smiirl
// Type 7 if you have a 7 digit counter Smiirl
$_MAX_DIGIT_COUNTER = 7;

// Active or not easter eggs after submitting new number value.
// [BOOLEAN]
$_ACTIVE_EASTER_EGGS = false;

// Default value for the input value
// [STRING]
$_DEFAULT_INPUT_VALUE = '';

// HTML Displayed on top of Counter's number
// [STRING]
$_HTML_COUNT = 'Valeur du compteur';

// HTML Title displayed on top of Log
// [STRING]
$_DEFAULT_TITLE_LOG = 'HISTORIQUE';

// Possible actions implemented
// [ARRAY]
// [STRING](action name) => [
//    ACTIVE => [BOOL](active or not this action),
//    HTML_RADIO => [STRING](HTML output of radios form),
//    HTML_INPUT => [STRING](HTML output of input form),
//    DISPLAY_INPUT => [BOOL](Display or not input form if action selected),
//    HTML_SUBMIT => [STRING](HTML output of submit button),
//    MATH => [FUNCTION](A mathematical operation with always 2 parameters
//                    First parameter is the current counter's value.
//                    Second parameter is the input form value submitted.
// First action in the array is the default checked html radio
$_ACTIONS = [
  'AJOUTER' => [
    ACTIVE => true,
    HTML_RADIO => 'Ajouter',
    HTML_INPUT => 'Ajouter à la valeur : ',
    DISPLAY_INPUT => true,
    HTML_SUBMIT => 'Ajouter',
    MATH => function ($old, $new) {
      return $old + $new;
    }
  ],
  'ENLEVER' => [
    ACTIVE => true,
    HTML_RADIO => 'Enlever',
    HTML_INPUT => 'Enlever à la valeur : ',
    DISPLAY_INPUT => true,
    HTML_SUBMIT => 'Enlever',
    MATH => function ($old, $new) {
      return $old - $new;
    }
  ],
  'ECRASER' => [
    ACTIVE => true,
    HTML_RADIO => 'Ecraser',
    HTML_INPUT => 'Changer la valeur : ',
    DISPLAY_INPUT => true,
    HTML_SUBMIT => 'Redéfinir',
    MATH => function ($old, $new) {
      return $new;
    }
  ],
  'AJOUTE_POURCENT' => [
    ACTIVE => true,
    HTML_RADIO => 'Augmenter d\'un %',
    HTML_INPUT => 'Pourcentage à ajouter : ',
    DISPLAY_INPUT => true,
    HTML_SUBMIT => 'Ajouter %',
    MATH => function ($old, $new) {
      return $old + ($old*$new/100);
    }
  ],
  'ENLEVE_POURCENT' => [
    ACTIVE => true,
    HTML_RADIO => 'Diminuer d\'un %',
    HTML_INPUT => 'Pourcentage à enlever : ',
    DISPLAY_INPUT => true,
    HTML_SUBMIT => 'Enlever %',
    MATH => function ($old, $new) {
      return $old - ($old*$new/100);
    }
  ],
  'RESET' => [
    ACTIVE => true,
    HTML_RADIO => 'Reset',
    HTML_INPUT => 'Votre compteur sera remis à zero : ',
    DISPLAY_INPUT => false,
    HTML_SUBMIT => 'Reset',
    MATH => function ($old, $new) {
      return 0;
    }
  ]
];

// User Account for Edit Action
$_USERS = [
  'Custom' => [
    PASSWORD => 'smiirl',
    ACCESS_TYPE => WRITE_ACCESS
  ],
  EVERYONE => [
    PASSWORD => null,
    ACCESS_TYPE => READ_ACCESS
  ]
];

?>
