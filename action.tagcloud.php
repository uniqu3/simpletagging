<?php
if (!is_object(cmsms())) exit;
/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

 Code for simpletagging "tagcloud" action

 -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

 Typically, this will display something from a template
 or do some other task.

 */

$min_fontsize = $this->GetPreference('minfontsize', 8);
$max_fontsize = $this->GetPreference('maxfontsize', 16);
$delimiter    = $this->GetPreference('delimiter', ', ');

$q      = "SELECT tag, count(*) AS count FROM " . cms_db_prefix() . "module_simpletagging GROUP BY tag ORDER BY count DESC";
$result = $db->Execute($q);

$max = $result->fields['count'];
$result->moveLast();
$min       = $result->fields['count'];
$diff      = $max - $min;
$diff      = max(1, $diff);
$font_diff = $max_fontsize - $min_fontsize;
$step      = round($font_diff / $diff);

$q      = "SELECT tag, tag_id, count(tag) AS count FROM " . cms_db_prefix() . "module_simpletagging GROUP BY tag ORDER BY tag ASC";
$result = $db->Execute($q);

$cloud = "";
while ($result && !$result->EOF) {
    if ($result->fields['tag'] != '') {
        $fontsize = $min_fontsize + ($result->fields['count'] - 1) * $font_diff;
        if ($this->GetPreference('resultpage') > 0) {
            $returnid = $this->GetPreference('resultpage');
        }
        $taglink = $this->CreateLink($id, 'searchtags', $returnid, '', array('tagid' => $result->fields['tag_id']), '', true, false, '', false, 'tags/' . $returnid . '/' . $result->fields['tag_id'] . '/' . munge_string_to_url($result->fields['tag']));
        $cloud .= "<a class='tagcloudlink' href='" . $taglink . "' style='font-size: " . $fontsize . "px;'>" . $result->fields['tag'] . "</a>" . $delimiter;
    }
    $result->moveNext();
}
echo substr($cloud, 0, strlen($cloud) - strlen($delimiter));
?>