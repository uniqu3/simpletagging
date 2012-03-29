<?php
if (!is_object(cmsms())) exit;
if (!$this->CheckAccess()) {
    return $this->DisplayErrorPage($id, $params, $returnid, $this->Lang('accessdenied'));
}

/* -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

 Code for simpletagging "defaultadmin" admin action

 -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

 Typically, this will display something from a template
 or do some other task.

 */

if (isset($params['submit_template'])) {
    $this->SetPreference('searchtemplate', $params['searchtemplate']);
    $this->SetPreference('tagtemplate', $params['tagtemplate']);
    $this->SetPreference('relatedtemplate', $params['relatedtemplate']);
    $params = array('tab_message' => 'templates_saved', 'active_tab' => 'tagsearchtemplate');
} elseif (isset($params['submit_tagcloud'])) {
    $this->SetPreference('minfontsize', $params['minfontsize']);
    $this->SetPreference('maxfontsize', $params['maxfontsize']);
    $this->SetPreference('delimiter', $params['delimiter']);
    $this->SetPreference('relcoverage', $params['relcoverage']);
    $this->SetPreference('relmax', $params['relmax']);
    $this->SetPreference('resultpage', (int)$params['resultpage']);
    $params = array('tab_message' => 'settings_saved', 'active_tab' => 'tagcloudsettings');
} elseif (isset($params['submit_reload'])) {
    $params = $this->reloadTags();
}

$tabheaders = $this->StartTabHeaders();

if (FALSE == empty($params['active_tab'])) {
    $tab = $params['active_tab'];
} else {
    $tab = '';
}

$tabheaders .= $this->SetTabHeader('tagsearchtemplate', $this->Lang('title_tagsearchtemplate'), ('tagsearchtemplate' == $tab)) . $this->SetTabHeader('tagcloudsettings', $this->Lang('title_tagcloudsettings'), ('tagcloudsettings' == $tab)) . $this->EndTabHeaders() . $this->StartTabContent();
$this->smarty->assign('tab_headers', $tabheaders);
$this->smarty->assign('end_tab', $this->EndTab());
$this->smarty->assign('tab_footers', $this->EndTabContent());
$this->smarty->assign('start_tagsearchtemplate_tab', $this->StartTab('tagsearchtemplate', $params));
$this->smarty->assign('start_tagcloudsettings_tab', $this->StartTab('tagcloudsettings', $params));

// Contents of the "Templates" tab:
$content = $this->CreateFormStart($id, 'defaultadmin');
$content .= $this->CreateInputSubmit($id, 'submit_template', $this->Lang('submit'));
$content .= '<hr />';
$content .= '<p>' . $this->Lang('searchtemplate') . ':<br />' . $this->CreateTextArea(false, $id, $this->GetPreference('searchtemplate', $this->getDefaultSearchTemplate()), 'searchtemplate', '', '', '', '', '50', '6') . '</p>';
$content .= '<p>' . $this->Lang('tagstemplate') . ':<br />' . $this->CreateTextArea(false, $id, $this->GetPreference('tagtemplate', $this->getDefaultTagTemplate()), 'tagtemplate', '', '', '', '', '50', '6') . '</p>';
$content .= '<p>' . $this->Lang('relatedtemplate') . ':<br />' . $this->CreateTextArea(false, $id, $this->GetPreference('relatedtemplate', $this->getDefaultRelatedTemplate()), 'relatedtemplate', '', '', '', '', '50', '6') . '</p>';
$content .= $this->CreateInputSubmit($id, 'submit_template', $this->Lang('submit'));
$content .= $this->CreateFormEnd();
$this->smarty->assign('content_tagsearchtemplate_tab', $content);

// Contents of the "Tag cloud settings" tab:
$content = $this->CreateFormStart($id, 'defaultadmin');
$content .= $this->CreateInputSubmit($id, 'submit_tagcloud', $this->Lang('submit'));
$content .= '<hr />';
$content .= $this->CreateFieldsetStart($id, 'tc', $this->Lang('tagcloud'));
$content .= '<table width="500"><tr>';
$content .= '<td valign="top" width="300">' . $this->Lang('tagcloud_minfontsize') . ':</td><td valign="top">' . $this->CreateInputText($id, 'minfontsize', $this->GetPreference('minfontsize', '8')) . '</td></tr>';
$content .= '<tr><td valign="top">' . $this->Lang('tagcloud_maxfontsize') . ':</td><td valign="top">' . $this->CreateInputText($id, 'maxfontsize', $this->GetPreference('maxfontsize', '20')) . '</td></tr>';
$content .= '<tr><td valign="top">' . $this->Lang('tagcloud_delimiter') . ':</td><td valign="top">' . $this->CreateInputText($id, 'delimiter', $this->GetPreference('delimiter', ', ')) . '</td></tr>';
$content .= "</table>";
$content .= $this->CreateFieldsetEnd();
$content .= $this->CreateFieldsetStart($id, 'tc', $this->Lang('relatedpages'));
$content .= '<table width="500"><tr>';
$content .= '<td valign="top"  width="300">' . $this->Lang('related_coverage') . ':</td><td valign="top">' . $this->CreateInputText($id, 'relcoverage', $this->GetPreference('relcoverage', '50')) . '</td></tr>';
$content .= '<td valign="top">' . $this->Lang('related_max') . ':</td><td valign="top">' . $this->CreateInputText($id, 'relmax', $this->GetPreference('relmax', '5')) . '</td></tr>';
$contentops = &$gCms->GetContentOperations();
$content .= '<td valign="top">' . $this->Lang('prompt_resultpage') . ':</td><td valign="top">' . $contentops->CreateHierarchyDropdown('', $this->GetPreference('resultpage', -1), $id . 'resultpage', 1) . '</td></tr>';
$content .= "</table>";
$content .= $this->CreateFieldsetEnd();
$content .= $this->CreateFieldsetStart($id, 'tc', $this->Lang('reload_tags'));
$content .= $this->Lang('reload_tags_info') . '<br /><br />';
$content .= $this->CreateInputSubmit($id, 'submit_reload', $this->Lang('reload_tags'));
$content .= $this->CreateFieldsetEnd();
$content .= "<br /><br />";

$content .= $this->CreateInputSubmit($id, 'submit_tagcloud', $this->Lang('submit'));
$content .= $this->CreateFormEnd();
$this->smarty->assign('content_tagcloudsettings_tab', $content);

$this->smarty->assign('title_section', $this->Lang('simpletagging_admin'));
$this->smarty->assign('admin_header_text', $this->Lang('simpletagging_admin_header'));
$this->smarty->assign('admin_footer_text', $this->Lang('simpletagging_admin_footer'));

echo $this->ProcessTemplate('adminpanel.tpl');
?>