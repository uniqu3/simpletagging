<?php
$lang['friendlyname'] = 'Simple Tagging ';
$lang['postinstall'] = 'Simple Tagging is ge&iuml;nstalleerd. Lees eerst de Help tekst voor nuttige opstart tips.';
$lang['postuninstall'] = 'Simple Tagging module is gede&iuml;nstalleerd en alle bijbehorende data is verwijderd.';
$lang['really_uninstall'] = 'Weet u zeker dat u deze module wilt verwijderen?';
$lang['uninstalled'] = 'Module gede&iuml;nstalleerd.';
$lang['installed'] = 'Module versie %s ge&iuml;nstalleerd.';
$lang['upgraded'] = 'Module bijgewerkt naar versie %s.';
$lang['moddescription'] = 'Simple Tagging voegt de mogelijk toe om linktags toe te voegen aan pagina&#039;s en te voorzien in links naar gerelateerde pagina&#039;s.';
$lang['error'] = 'Fout!';
$lang['admindescription'] = 'Staat u toe om tags toe te vagen aan pagina&#039;s, een tagcloud weer te geven en een lijst van gerelateerde pagina&#039;s.';
$lang['accessdenied'] = 'Toegang geweigerd. Controleer uw permissies.';
$lang['Tagsearchtemplate'] = 'Sjablonen';
$lang['Tagcloudsettings'] = 'Instellingen';
$lang['title_tagsearchtemplate'] = 'Sjablonen';
$lang['title_tagcloudsettings'] = 'Instellingen';
$lang['simpletagging_admin'] = 'Wijzig instellingen voor Simple Tagging';
$lang['simpletagging_admin_header'] = 'Hier kunt u uw instellingen wijzigen voor de Simple Tagging module en de weergave van tags.';
$lang['simpletagging_admin_footer'] = ' ';
$lang['submit'] = 'Opslaan';
$lang['searchtemplate'] = 'Sjabloon voor het tonen van de zoek tak';
$lang['tagstemplate'] = 'Sjabloon voor het tonen van de tag';
$lang['relatedtemplate'] = 'Template f&uuml;r verwandte Seiten';
$lang['tagcloud'] = 'Tagcloud instellingen';
$lang['tagcloud_minfontsize'] = 'Minimale font afmeting (px)';
$lang['tagcloud_maxfontsize'] = 'Maximale font afmeting (px)';
$lang['tagcloud_delimiter'] = 'Tag delimiter ';
$lang['relatedpages'] = 'Instellingen voor gerelateerde pagina&#039;s';
$lang['related_coverage'] = 'Tag dekking voor gerelateerde pagina&#039;s (%)';
$lang['related_max'] = 'Maximaal gerelateerde pagina&#039;s';
$lang['prompt_resultpage'] = 'Pagina om de gerelateerde inhoud te tonen';
$lang['reload_tags'] = 'Tags opnieuw laden';
$lang['reload_tags_info'] = 'Gebruik deze functie om alle paginatags opnieuw te laden, bijvoorbeeld na een update';
$lang['templates_saved'] = 'Uw sjablonen zijn opgeslagen.';
$lang['settings_saved'] = 'Uw instellingen zijn opgeslagen.';
$lang['tags_reloaded'] = 'Alle tags zijn opnieuw geladen uit de pagina&#039;s.';
$lang['no_tags'] = 'geen';
$lang['defaultsearchtemplate'] = '<h3>Pages containing information about <i>{$searchtag}</i></h3>
<ul>
{foreach from=$results item=result}
  <li><a href="{$result.url}">{$result.title}</a><br />
    <b>Other tags:</b> {foreach from=$result.othertags item=tag}
      {$tag} 
    {/foreach}
  </li>
{/foreach}
</ul>
';
$lang['defaulttagtemplate'] = '<b>More information on:</b>
  {foreach from=$tags item=tag}
  <a href="{$tag.url}">{$tag.title}</a>
    {if $tag.delimiter == true}, {/if}
  {/foreach}
';
$lang['defaultrelatedtemplate'] = '<b>Related pages:</b>
<ul>
  {foreach from=$related item=page}
  <li><a href="{$page.url}">{$page.title}</a> ({$page.percentage}%)</li>
  {/foreach}
</ul>
';
$lang['changelog'] = '<ul>
<li>Version 0.3.1 - 31 December 2010.
	<ul>
	<li><b>FIX:</b> Bug #3859 Inactive page with tags</li>
	<li><b>NEW:</b> Fully internationalized, now uses aliasing feature of CMSMS</li>
	<li><b>NEW:</b> Added to Translation Center</li>
	</ul>
</li>   
<li>Version 0.3 - 28 December 2010.
	<ul>
	<li><b>FIX:</b> Bug #3881 Menu item is shown to unauthorized user</li>
        <li><b>FIX:</b> Bug #2507 Tags are not removed after the page is deleted</li>
        <li><b>FIX:</b> Bug #3214 Empty tags generate related pages</li>
	<li><b>NEW:</b> Pretty urls for the list of pages related to the tag</li>
	<li><b>NEW:</b> Result page where the list of tags is displayed</li>
	</ul>
</li>
<li>Version 0.2 - 10 June 2008.
	<ul>
	<li><b>FIX:</b> No delimiter is shown as first item in the tag cloud</li>
	<li><b>NEW:</b> The &quot;related pages&quot; feature is introduced</li>
	<li><b>NEW:</b> The page tags list is now customizable by a template</li>
	<li><b>NEW:</b> You can automatically reload all tags after manually upgrading the module or when something breaks.</li>
	<li><b>FIX:</b> Compatibility with 1.3</li>
	<li><b>FIX:</b> Minor fixes and improvements</li>
	</ul>
</li>
<li>Version 0.1 - 3 June 2008. Initial Release.</li>
</ul>';
$lang['help'] = '<h3>What Does This Do?</h3>
<p>Adds the ability to link tags to pages and provide links to related pages</p>
<h3>How Do I Use It</h3>
<p>Before you can start adding tags to your content pages, you need to include a content block for the tags into all templates for pages that use tags. Edit your template and insert the following line into the template code, preferably after the last content block used in this template:<br /><br />
<i>&amp;lt;!-- {content block=&quot;Tags&quot; wysiwyg=&quot;false&quot; oneline=&quot;true&quot;} --&amp;gt;</i><br /><br />
This will add another (hidden) content block to the page which you can edit from your &quot;Content&quot; admin module. Simple Tagging will automatically index your pages according to the tags you enter there. As a side effect, those tags will also be indexed by the default search engine.</p>
<p>To add tags to your page, edit the page as you are used to and enter a list of tags separated by commas into the input field labelled &quot;Tags&quot;.</p>
<h3>How do I embed the tag list, a list of related pages or a tag cloud into a page?</h3>
<p>It is recommended to add the call to the tag list and the related pages list directly into the template. Insert the following tag to display a list of tags assigned to the current page:
<br /><br />
<i>{cms_module module=&quot;simpletagging&quot;}</i></p>
<p>To display a list of related pages (based on tag coverage), insert the following tag into your page or template:
<br /><br />
<i>{cms_module module=&quot;simpletagging&quot; action=&quot;related&quot;}</i></p>
<p>To embed a tag cloud somewhere in your page, enter the following tag into your page or template:<br /><br />
<i>{cms_module module=&quot;simpletagging&quot; action=&quot;tagcloud&quot;}</i></p>
<h3>How can I change the apperance of the Simple Tagging module?</h3>
<p>To style the tag links, create a css class for <i>a.taglink</i> (used in the tag list and the tag search results) and <i>a.tagcloudlink</i> (used in the tag cloud).</p>
<p>To change the appearance of the tag search results, change the &quot;Tag search template&quot; in the administration panel. To change the minimum and maximum font sizes used in the tag cloud, change the values in the &quot;Tag cloud settings&quot; administration panel.</p>
<p>To adjust the settings for your related pages, edit the settings in the administration panel and change the values for related pages to your likings. The &quot;tag coverage&quot; is a percentage to determine if a page is really related - the default is 50 which means that a related page must contain at least half of the tags that have been used in the original page. The &quot;Maximum related pages&quot; option determines how many related pages (that match the tag coverage) shoud be displayed.
<h3>Support</h3>
<p>As per the GPL, this software is provided as-is. Please read the text of the license for the full disclaimer.</p>
<h3>Copyright and License</h3>
<p>Copyright &amp;copy; 2008, Henning Schaefer <a href="mailto:henning.schaefer@gmail.com">&amp;lt;henning.schaefer@gmail.com&amp;gt;</a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. You must agree to this license before using the module.</p>';
$lang['utma'] = '156861353.1395388706.1310377768.1310377768.1310377768.1';
$lang['utmz'] = '156861353.1310377768.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
$lang['qca'] = 'P0-1408926661-1309528475256';
$lang['utmb'] = '156861353';
$lang['utmc'] = '156861353';
?>