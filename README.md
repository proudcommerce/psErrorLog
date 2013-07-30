psErrorLog
=========

Save and show php error messages.
Free Module for OXID eShop.

Features

	- save php errors to log file
	- show php errors in shop admin
	- delete php error log file


Installation

	1. copy content from copy_this folder into your shop root
	2. edit config.inc.php (see below)
	3. activate module psErrorLog in shop admin
	4. see php error log file in shop admin --> service


Add to config.inc.php

	// psErrorLog | start
	ini_set('error_reporting', E_ALL);
	ini_set('log_errors', true);
	ini_set('display_errors', false);
	ini_set('error_log','/YOURSHOPPATH/log/psErrorLog_PHP.log');
	// psErrorLog | end
	

Screenshot

![psErrorLog](https://raw.github.com/proudcommerce/psErrorLog/master/screenshot.jpg)


License

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
    

Copyright

	Proud Sourcing GmbH 2013
	www.proudcommerce.com



Credential‎

	Thanks to Joscha Krug for code base ;-)
