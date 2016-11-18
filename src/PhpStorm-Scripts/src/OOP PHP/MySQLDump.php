<?
/**
 * MySQLDump class<br />
 * Backs up a database, creating a file for each for the week,
 * using the mysqldump utility.<br />
 * Can compress backup with gzip or bzip2<br />
 * Intended for command line execution in conjunction with
 * cron<br />
 * Requires the user executing the script has permission to execute
 * mysqldump.
 * <code>
 * $mysqlDump =  new MySQLDump('harryf', 'secret', 'sitepoint',
 *                             '/backups');
 *
 * $mysqlDump->backup();
 * </code>
 * @access public
 * @package SPLIB
 */
class MySQLDump {
    /**
     * The backup command to execute
     * @private
     * @var string
     */
    var $cmd;

    /**
     * MySQLDump constructor
     * @param string dbUser (MySQL User Name)
     * @param string dbPass (MySQL User Password)
     * @param string dbName (Database to select)
     * @param string dest (Full dest. directory for back up file)
     * @param string zip (Zip type; gz - gzip [default], bz2 - bzip)
     * @access public
     */
    function MySQLDump($dbUser, $dbPass, $dbName, $dest,
                       $zip = 'gz')
    {
        $zip_util =  array('gz'=>'gzip', 'bz2'=>'bzip2');
        if (array_key_exists($zip, $zip_util)) {
            $fname = $dbName . '.' . date("w") . '.sql.' . $zip;
            $this->cmd = 'mysqldump -u' . $dbUser . ' -p' . $dbPass .
                         ' ' . $dbName . '| ' . $zip_util[$zip] . ' >' .
                         $dest . '/' . $fname;
        } else {
            $fname = $dbName . '.' . date("w") . '.sql';
            $this->cmd = 'mysqldump -u' . $dbUser . ' -p' . $dbPass .
                         ' ' . $dbName . ' >' $dest . '/' . $fname;
        }
    }

    /**
     * Runs the constructed command
     * @access public
     * @return void
     */
    function backup()
    {
        system($this->cmd, $error);
        if (error) {
            trigger_error('Backup Failed: ' . $error);
        }
    }
}

