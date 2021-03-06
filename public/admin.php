<?php

#  Izartu
#
#  Copyright © 2011-2012 Javier Beaumont <contact@javierbeaumont.org>
#
#  This file is part of Izartu.
#
#  Izartu is free software: you can redistribute it and/or modify
#  it under the terms of the GNU Affero General Public License as
#  published by the Free Software Foundation, either version 3 of the
#  License, or (at your option) any later version.
#
#  Izartu is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
#  GNU Affero General Public License for more details.
#
#  You should have received a copy of the GNU Affero General Public License
#  along with Izartu. If not, see <http://www.gnu.org/licenses/>.

/**
 * @file admin.php
 * @brief Site administration default page.
 *
 * This page show the admin page.
**/

require_once __DIR__.'/config.php';

require_once PRI_DIR.'preload.php';

require_once PRI_DIR.'class/db/data.php';
require_once PRI_DIR.'class/db/tag.php';
require_once PRI_DIR.'class/show/data.php';
require_once PRI_DIR.'class/show/tag.php';

// 1 - User and password (TODO)
require_once PRI_DIR.'class/update.php';

require_once PRI_DIR.'postload.php';



$page = 'bookmark'; // (TODO)

$template = new Template;
$template->show($page);