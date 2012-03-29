<?php
if (!is_object(cmsms())) exit;
/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

 Code for simpletagging "default" action

 -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

 Typically, this will display something from a template
 or do some other task.

 */

$q      = "SELECT tag, tag_id FROM " . cms_db_prefix() . "module_simpletagging WHERE page_id = " . cmsms()->variables['content_id'];
$result = $db->Execute($q);

$taglist = "";
$tags    = array();
if ($this->GetPreference('resultpage') > 0) {
    $returnid = $this->GetPreference('resultpage');
}

while ($result && !$result->EOF) {
    $tmp              = array();
    $tmp['url']       = $this->CreateLink($id, 'searchtags', $returnid, '', array('tagid' => $result->fields['tag_id']), '', true, false, '', false, 'tags/' . $returnid . '/' . $result->fields['tag_id'] . '/' . munge_string_to_url($result->fields['tag']));
    $tmp['title']     = $result->fields['tag'];
    $tmp['delimiter'] = true;
    array_push($tags, $tmp);
    $result->moveNext();
}

if (count($tags) > 0) {
    $tags[count($tags) - 1]['delimiter'] = false;
    $smarty->assign('tags', $tags);
    echo $this->ProcessTemplateFromData($this->GetPreference('tagtemplate', $this->getDefaultTagTemplate()));
}
?>