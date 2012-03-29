<?php
if (!is_object(cmsms()))
    exit ;
/* ---------------------------------------------------------
 Install()
 When your module is installed, you may need to do some
 setup. Typical things that happen here are the creation
 and prepopulation of database tables, database sequences,
 permissions, preferences, etc.

 For information on the creation of database tables,
 check out the ADODB Data Dictionary page at
 http://phplens.com/lens/adodb/docs-datadict.htm

 This function can return a string in case of any error,
 and CMS will not consider the module installed.
 Successful installs should return FALSE or nothing at all.
 --------------------------------------------------------- */

// Typical Database Initialization
$db = cmsms()->GetDb();

// mysql-specific, but ignored by other database
$taboptarray = array('mysql' => 'TYPE=MyISAM');
$dict        = NewDataDictionary($db);

// table schema description
$flds = "
        tag_id I KEY,
		page_id I,
		tag C(64)
		";

// create it. This should do error checking, but I'm a lazy sod.
$sqlarray = $dict->CreateTableSQL(cms_db_prefix() . "module_simpletagging", $flds, $taboptarray);
$dict->ExecuteSQLArray($sqlarray);

$sqlarray = $dict->CreateIndexSQL('tag', cms_db_prefix() . "module_simpletagging", 'tag');
$dict->ExecuteSQLArray($sqlarray);

// create a sequence
$db->CreateSequence(cms_db_prefix() . "module_simpletagging_seq");

// permissions
$this->CreatePermission('Use Simple Tagging', 'Use Simple Tagging');

$this->RegisterEvents();

// put mention into the admin log
$this->Audit(0, $this->Lang('friendlyname'), $this->Lang('installed', $this->GetVersion()));
?>