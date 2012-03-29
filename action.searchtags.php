<?php
if (!is_object(cmsms())) exit;
/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

 Code for simpletagging "searchtags" action

 -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

 Typically, this will display something from a template
 or do some other task.

 */

$q         = "SELECT tag FROM " . cms_db_prefix() . "module_simpletagging WHERE tag_id = " . $params['tagid'];
$searchtag = $db->GetOne($q);
$this->smarty->assign('searchtag', $searchtag);

$q = "SELECT page_id FROM " . cms_db_prefix() . "module_simpletagging WHERE tag = '" . $searchtag . "'";
$result = $db->Execute($q);

$results = array();
$hm      = &$gCms->GetHierarchyManager();

if ($this->GetPreference('resultpage') > 0) {
    $returnid = $this->GetPreference('resultpage');
}

while ($result && !$result->EOF) {
    $res              = array();
    $curnode          = $hm->getNodeById($result->fields['page_id']);
    $curcontent       = $curnode->GetContent();
    $res['url']       = $curcontent->GetURL();
    $res['title']     = $curcontent->Name();
    $res['othertags'] = array();
    $result1 = $db->Execute("SELECT tag, tag_id FROM " . cms_db_prefix() . "module_simpletagging WHERE page_id = " . $result->fields['page_id'] . " ORDER BY tag ASC");
    while ($result1 && !$result1->EOF) {
        if ($result1->fields['tag_id'] != $params['tagid']) {
            $taglink = $this->CreateLink($id, 'searchtags', $returnid, '', array('tagid' => $result1->fields['tag_id']), '', true, false, '', false, 'tags/' . $returnid . '/' . $result1->fields['tag_id'] . '/' . munge_string_to_url($result1->fields['tag']));
            array_push($res['othertags'], "<a href='" . $taglink . "' class='taglink'>" . $result1->fields['tag'] . "</a>");
        }
        $result1->moveNext();
    }

    array_push($results, $res);
    $result->moveNext();
}

$this->smarty->assign('results', $results);

echo $this->ProcessTemplateFromData($this->GetPreference('searchtemplate', $this->getDefaultSearchTemplate()));
?>