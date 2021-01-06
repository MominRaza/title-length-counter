<?php

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
    header('Location: ../../');
    exit;
}

qa_register_plugin_layer('title-length-counter-layer.php','Title Length Counter');
qa_register_plugin_module('module', 'title-length-counter-admin.php', 'title_length_counter_admin', 'Title Length Counter Admin');

// Omit PHP closing tag to help avoid accidental output