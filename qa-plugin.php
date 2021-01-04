<?php

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
    header('Location: ../../');
    exit;
}

qa_register_plugin_layer('title-length-counter-layer.php','Title Length Counter');

// Omit PHP closing tag to help avoid accidental output