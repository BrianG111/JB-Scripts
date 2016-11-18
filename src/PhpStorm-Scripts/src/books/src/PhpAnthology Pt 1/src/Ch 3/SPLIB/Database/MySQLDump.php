<?php
/**
 * Copyright (c) Brian Gerrits - (WebSteen Stagiair) 2016.
 */

/**
 * Created by PhpStorm.
 * User: stagiair1
 * Date: 18-11-2016
 * Time: 12:00
 */

/**
 * MySQLDump Class
 * Backs up a database, creating a file for each day of the week,
 * using the mysqldump utility.<br />
 * Can compress backup file with gzip of bzip2<br />
 * Intended for command line execution in conjunction with
 * cron<br />
 * Requires the user executing the script has permission to execute
 * mysqldump.
 * <code>
 * $mysqlDump = new MySQLDump['harryf', 'secret', 'sitepoint',
 *                            '/backups');
 */