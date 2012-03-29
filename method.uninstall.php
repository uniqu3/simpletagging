<?php
if (!is_object(cmsms()))exit ;
/*---------------------------------------------------------
 Uninstall()
 Sometimes, an exceptionally unenlightened or ignorant
 admin will wish to uninstall your module. While it
 would be best to lay into these idiots with a cluestick,
 we will do the magnanimous thing and remove the module
 and clean up the database, permissions, and preferences
 that are specific to it.
 This is the method where we do this.
 ---------------------------------------------------------*/

// Typical Database Removal
$db = cmsms()->GetDb();

// remove the database table
$dict = NewDataDictionary($db);
$sqlarray = $dict->DropTableSQL(cms_db_prefix() . "module_simpletagging");
$dict->ExecuteSQLArray($sqlarray);

$this->RemovePreference('searchtemplate');
$this->RemovePreference('relatedtemplate');
$this->RemovePreference('tagtemplate');
$this->RemovePreference('minfontsize');
$this->RemovePreference('maxfontsize');
$this->RemovePreference('delimiter');
$this->RemovePreference('relmax');
$this->RemovePreference('relcoverage');
$this->RemovePreference('resultpage');

// remove the sequence
$db->DropSequence(cms_db_prefix() . "module_simpletagging_seq");

// remove the permissions
$this->RemovePermission('Use Simple Tagging');

// put mention into the admin log
$this->Audit(0, $this->Lang('friendlyname'), $this->Lang('uninstalled'));
?>