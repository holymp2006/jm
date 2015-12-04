<?php return array (
  'plugins.importexport.users.displayName' => 'Users XML Plugin',
  'plugins.importexport.users.description' => 'Import and export users',
  'plugins.importexport.users.cliUsage' => 'Usage: {$scriptName} {$pluginName} [command] ...
Commands:
	import [xmlFileName] [journal_path] [optional flags]
	export [xmlFileName] [journal_path]
	export [xmlFileName] [journal_path] [role_path1] [role_path2] ...

Optional flags:
	continue_on_error: If specified, do not stop importing users if an error occurs

	send_notify: If specified, send notification emails containing usernames
		and passwords to imported users

Examples:
	Import users into myJournal from myImportFile.xml, continuing on error:
	{$scriptName} {$pluginName} import myImportFile.xml myJournal continue_on_error

	Export all users from myJournal:
	{$scriptName} {$pluginName} export myExportFile.xml myJournal

	Export all users registered as reviewers, along with their reviewer roles only:
	{$scriptName} {$pluginName} export myExportFile.xml myJournal reviewer',
  'plugins.importexport.users.import.importUsers' => 'Import Users',
  'plugins.importexport.users.import.instructions' => 'Select an XML data file containing user information to import into this journal. See the journal help for details on the format of this file.<br /><br />Note that if the imported file contains any usernames or email addresses that already exist in the system, the user data for those users will not be imported and any new roles to be created will be assigned to the existing users.',
  'plugins.importexport.users.import.failedToImportUser' => 'Failed to import user',
  'plugins.importexport.users.import.failedToImportRole' => 'Failed to assign user to role',
  'plugins.importexport.users.import.dataFile' => 'User data file',
  'plugins.importexport.users.import.sendNotify' => 'Send a notification email to each imported user containing the user\'s username and password.',
  'plugins.importexport.users.import.continueOnError' => 'Continue to import other users if a failure occurs.',
  'plugins.importexport.users.import.noFileError' => 'No file was uploaded!',
  'plugins.importexport.users.import.usersWereImported' => 'The following users were successfully imported into the system',
  'plugins.importexport.users.import.errorsOccurred' => 'Errors occurred during the import',
  'plugins.importexport.users.import.confirmUsers' => 'Confirm that these are the users you would like to import into the system',
  'plugins.importexport.users.import.warning' => 'Warning',
  'plugins.importexport.users.import.encryptionMismatch' => 'Cannot use passwords hashed with {$importHash}; OJS is configured to use {$ojsHash}. If you continue, you will need to reset the imported users\' passwords.',
  'plugins.importexport.users.unknownJournal' => 'An unknown journal path "{$journalPath}" was specified.',
  'plugins.importexport.users.export.exportUsers' => 'Export Users',
  'plugins.importexport.users.export.exportByRole' => 'Export By Role',
  'plugins.importexport.users.export.exportAllUsers' => 'Export All',
  'plugins.importexport.users.export.errorsOccurred' => 'Errors occurred during the export',
  'plugins.importexport.users.export.couldNotWriteFile' => 'Could not write to the file "{$fileName}".',
); ?>