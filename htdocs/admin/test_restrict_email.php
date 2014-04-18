<?php

require('../../include/mellivora.inc.php');

enforce_authentication(CONFIG_UC_MODERATOR);

head('Site management');
menu_management();

section_subhead('Test signup rules');

message_inline_info('Enter an email addess to test.');

form_start('test_restrict_email');
form_input_text('Email');
form_hidden('action', 'test');
form_button_submit('Test');
form_end();

foot();