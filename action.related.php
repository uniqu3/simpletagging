<?php
if (!is_object(cmsms())) exit;
/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

 Code for simpletagging "default" action

 -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

 Typically, this will display something from a template
 or do some other task.

 */

$q = "SELECT tag FROM " . cms_db_prefix() . "module_simpletagging WHERE page_id = " .   cmsms()->variables['content_id'];
$result = $db->Execute($q);

$related  = array();
$limit    = $this->GetPreference('relmax', 5);
$coverage = $this->GetPreference('relcoverage', 50);
$tagcount = 0;

$q = "SELECT COUNT(*) AS count, page_id FROM " . cms_db_prefix() . "module_simpletagging WHERE (";

while ($result && !$result->EOF) {
    $q .= "tag = '" . $result->fields['tag'] . "' ";
    $q .= "OR ";
    $tagcount++;
    $result->moveNext();
}

$mintags = ceil($tagcount * ($coverage / 100));

$q = substr($q, 0, strlen($q) - 3);
$q .= ") AND page_id <> " . $gCms->variables['content_id'] . " GROUP BY page_id ORDER BY count DESC LIMIT 0, " . $limit;
$result = $db->Execute($q);

$hm = &$gCms->GetHierarchyManager();

while ($result && !$result->EOF) {
    if ($result->fields['count'] < $mintags) {
        break;
    }
    $tmp = array();
    $curnode = $hm->getNodeById($result->fields['page_id']);
    $curcontent = $curnode->getContent();
    if (isset($curcontent) && $curcontent->Active() && $curcontent->ShowInMenu()) {

        $tmp['url'] = $curcontent->GetURL();
        $tmp['title'] = $curcontent->Name();
        $percentage = round(($result->fields['count'] / $tagcount) * 100);
        $tmp['percentage'] = $percentage;
        array_push($related, $tmp);
    }
    $result->moveNext();
}

if (count($related) > 0) {
    $smarty->assign('related', $related);
    echo $this->ProcessTemplateFromData($this->GetPreference('relatedtemplate', $this->getDefaultRelatedTemplate()));
}
?>