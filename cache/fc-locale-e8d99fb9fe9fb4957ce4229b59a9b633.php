<?php return array (
  'plugins.generic.backup.name' => 'Backup Plugin',
  'plugins.generic.backup.description' => 'This plugin generates a backup of the installation.',
  'plugins.generic.backup.link' => 'Download Backup',
  'plugins.generic.backup.longdescription' => '<p>The following links allow the Site Administrator to download a full backup of the various components of an installation. A complete backup contains <strong>all</strong> of the following components. Please refer to technical documention for more information on how these components interrelate.</p>',
  'plugins.generic.backup.db' => 'Database',
  'plugins.generic.backup.files' => 'Files',
  'plugins.generic.backup.code' => 'Code',
  'plugins.generic.backup.db.config' => '{$footNoteNum}. <strong>WARNING:</strong> The database dump tool has not been configured in the config.inc.php configuration file. The configuration will depend on your server configuration and the type of database you use. It should be specified in a section called [cli], in a configuration option called "dump". For MySQL, use the mysqldump tool, i.e.:<br/>
<pre>[cli]
dump = "/usr/bin/mysqldump -h %s -u %s -p%s %s"
</pre>
The "%s" tokens will be replaced with, in order:<ol>
	<li>Database hostname</li>
	<li>Database username</li>
	<li>Database password</li>
	<li>Database name</li>
</ol>
Note that this involves specifying the database password in the command line, which may be a security concern.<br/><br/>',
  'plugins.generic.backup.tar.config' => '{$footNoteNum}. <strong>WARNING:</strong> The "tar" tool has not been configured in the config.inc.php configuration file. The configuration will depend on your server configuration. It should be specified in a section called [cli], in a configuration option called "tar", specifying the path to the "tar" utility, i.e.:<br/>
<pre>[cli]
tar = "/bin/tar"
</pre><br/>',
  'plugins.generic.backup.failure' => '<strong>WARNING: </strong>An error may have occurred during the backup process. The most common cause is file permissions.',
); ?>