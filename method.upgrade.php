<?php
if (!is_object(cmsms()))exit ;
/* ---------------------------------------------------------
 Upgrade()
 If your module version number does not match the version
 number of the installed module, the CMS Admin will give
 you a chance to upgrade the module. This is the function
 that actually handles the upgrade.
 Ideally, this function should handle upgrades incrementally,
 so you could upgrade from version 0.0.1 to 10.5.7 with
 a single call. For a great example of this, see the News
 module in the standard CMS install.
 --------------------------------------------------------- */
$dict = NewDataDictionary($db);
$db = cmsms()->GetDb();
$current_version = $oldversion;
switch ($current_version) {
    case "0.1" :
        break;
    case "0.2.1" :
        break;
    case "0.3" :
        $sqlarray = $dict->AddColumnSQL(cms_db_prefix() . "module_simpletagging", "tag_id I KEY");
        $dict->ExecuteSQLArray($sqlarray);
        $query = "DELETE from " . cms_db_prefix() . "module_simpletagging WHERE tag = '' OR tag IS NULL";
        $db->Execute($query);
        $query = "SELECT * from " . cms_db_prefix() . "module_simpletagging";
        $dbresult = $db->Execute($query);
        $i = 1;
        while ($row = $dbresult->FetchRow()) {
            $query = "UPDATE " . cms_db_prefix() . "module_simpletagging SET tag_id =? WHERE page_id = ? AND tag = ?";
            $db->Execute($query, array($i, $row['page_id'], $row['tag']));
            $i++;
        }

        $db->CreateSequence(cms_db_prefix() . "module_simpletagging_seq");
        $query = "UPDATE " . cms_db_prefix() . "module_simpletagging_seq SET id = ?";
        $db->Execute($query, array($i));

        break;
}

// put mention into the admin log
$this->Audit(0, $this->Lang('friendlyname'), $this->Lang('upgraded', $this->GetVersion()));
?>