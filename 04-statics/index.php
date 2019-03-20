<?php

require_once 'class.php';

Settings::setBackground('blue');
Settings::setNewsletter('message one');
Settings::setWorkplace('House');

echo Settings::$background.'<br />';
echo Settings::$newsletter.'<br />';
echo Settings::$workplace.'<br />';