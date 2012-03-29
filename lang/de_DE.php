<?php
$lang['friendlyname'] = 'Simple Tagging';
$lang['postinstall'] = 'Simple Tagging wurde erfolgreich installiert. Informationen zur Benutzung gibts in der Hilfe!';
$lang['postuninstall'] = 'Simple Tagging wurde deinstalliert und alle Tag-Daten entfernt.';
$lang['really_uninstall'] = 'Möchten Sie dieses tolle Modul wirklich deinstallieren?';
$lang['uninstalled'] = 'Modul wurde deinstalliert.';
$lang['installed'] = 'Modulversion %s installiert.';
$lang['upgraded'] = 'Modul auf Version %s aktualisiert.';
$lang['moddescription'] = 'Simple Tagging fügt die Möglichkeit, Tags zu Seiten zuzuweisen und nach verwandten Seiten zu suchen hinzu.';

$lang['error'] = 'Fehler!';
$land['admin_title'] = 'Simple Tagging Administrationsbereich';
$lang['admindescription'] = 'Ermöglicht Ihnen, semantische Tags zu Seiten hinzuzufügen, eine Tagcloud und eine Liste verwandter Seiten anzuzeigen.';
$lang['accessdenied'] = 'Zugriff verweigert. Bitte überprüfen Sie Ihre Berechtigungen.';
$lang['Tagsearchtemplate'] = 'Templates';
$lang['Tagcloudsettings'] = 'Einstellungen';
$lang['title_tagsearchtemplate'] = 'Templates';
$lang['title_tagcloudsettings'] = 'Einstellungen';

$lang['simpletagging_admin'] = 'Einstellungen für Simple Tagging ändern';
$lang['simpletagging_admin_header'] = 'Ändern Sie hier die Einstellungen für Simple Tagging und das Erscheinungsbild der Tags.';
$lang['simpletagging_admin_footer'] = '';
$lang['submit'] = 'Sichern';
$lang['searchtemplate'] = 'Suchtemplate für Tags';
$lang['tagstemplate'] = 'Anzeigetemplate für Tags';
$lang['relatedtemplate'] = 'Template für verwandte Seiten';
$lang['tagcloud'] = 'Einstellungen der Tagcloud';
$lang['tagcloud_minfontsize'] = 'Mindest-Schriftgröße (px)';
$lang['tagcloud_maxfontsize'] = 'Höchst-Schriftgröße (px)';
$lang['tagcloud_delimiter'] = 'Tag-Trenner';
$lang['relatedpages'] = 'Einstellungen für verwandte Seiten';
$lang['related_coverage'] = 'Tag-Überdeckung für verwandte Seiten (%)';
$lang['related_max'] = 'Höchstzahl verwandter Seiten';
$lang['reload_tags'] = 'Tags neu einlesen';
$lang['reload_tags_info'] = 'Verwenden Sie diese Funktion, um z.B. nach einem Update alle Seitentags neu einzulesen.';

$lang['templates_saved'] = 'Ihre Templates wurden gespeichert.';
$lang['settings_saved'] = 'Ihre Einstellungen wurden gespeichert.';
$lang['tags_reloaded'] = 'Alle Tags wurden aus den Seiten neu eingelesen.';

$lang['no_tags'] = 'keine';

$lang['defaultsearchtemplate'] = '
<h3>Seiten mit Informationen zu <i>{$searchtag}</i></h3>
<ul>
{foreach from=$results item=result}
  <li><a href="{$result.url}">{$result.title}</a><br />
    <b>Weitere Tags:</b> {foreach from=$result.othertags item=tag}
      {$tag} 
    {/foreach}
  </li>
{/foreach}
</ul>
';

$lang['defaulttagtemplate'] = '
<b>Weitere Informationen zu:</b>
  {foreach from=$tags item=tag}
  <a href="{$tag.url}">{$tag.title}</a>
    {if $tag.delimiter == true}, {/if}
  {/foreach}
';

$lang['defaultrelatedtemplate'] = '
<b>Verwandte Seiten:</b>
<ul>
  {foreach from=$related item=page}
  <li><a href="{$page.url}">{$page.title}</a> ({$page.percentage}%)</li>
  {/foreach}
</ul>
';

$lang['changelog'] = '<ul>
<li>Version 0.2 - 10 June 2008.
	<ul>
	<li><b>FIX:</b> No delimiter is shown as first item in the tag cloud</li>
	<li><b>NEW:</b> The "related pages" feature is introduced</li>
	<li><b>NEW:</b> The page tags list is now customizable by a template</li>
	<li><b>NEW:</b> You can automatically reload all tags after manually upgrading the module or when something breaks.</li>
	<li><b>FIX:</b> Compatibility with 1.3</li>
	<li><b>FIX:</b> Minor fixes and improvements</li>
	</ul>
</li>
<li>Version 0.1 - 3 June 2008. Initial Release.</li>
</ul>';
$lang['help'] = '<h3>Wozu ist Simple Tagging gut?</h3>
<p>Simple Tagging fügt die Unterstützung für Tags hinzu und ermöglicht die Suche nach verwandten Seiten.</p>
<h3>Wie wird Simple Tagging verwendet?</h3>
<p>Bevor Sie beginnen können, Tags zu Ihren Seiten hinzuzufügen, müssen Sie einen Inhaltsblock für die Speicherung der Tags in alle Templates, von denen aus Sie Tags benutzen möchten, einfügen. Bearbeiten Sie Ihr Template und fügen Sie die folgende Zeile in den Template-Code ein, idealerweise nach dem letzten Inhaltsblock in diesem Template:<br /><br />
<i>&lt;!-- {content block="Tags" wysiwyg="false" oneline="true"} --&gt;</i><br /><br />

Dadurch fügen Sie einen neuen (versteckten) Inhaltsblock in die Seite ein, die Sie wie gewohnt über "Inhalte" in Ihrem Administrationsmodul bearbeiten können. Simple Tagging indiziert Ihre Seiten automatisch entsprechend den Tags, die Sie hier eingeben. Als Seiteneffekt werden alle Tags auch vom Standard-Suchmodul indiziert.
</p>
<p>Um Tags zu Ihrer Seite hinzuzufügen, bearbeiten Sie die Seite wie gewohnt und geben Sie in das Eingabefeld "Tags" unterhalb der Inhaltsblöcke Ihre Tags mit Kommata getrennt ein.</p>
<h3>Wie wird eine Tagliste oder Tagcloud in die Seite eingefügt?</h3>
<p>Wir empfehlen, den Aufruf der Tagliste direkt im Template zu platzieren. Fügen Sie den folgenden Tag in Ihr Template oder einen Inhaltsblock ein, um eine Liste der Tags anzuzeigen, denen die aktuelle Seite zugeordnet ist:
<br /><br />
<i>{cms_module module="simpletagging"}</i></p>
<p>Um eine Liste verwandter Seiten (basierend auf der Tag-Überdeckung) einzublenden, fügen Sie das folgende Tag in Ihre Seite oder das Template ein:
<br /><br />
<i>{cms_module module="simpletagging" action="related"}</i></p>
<p>Wenn Sie eine Tagcloud auf Ihrer Seite einbinden möchten, fügen Sie den folgenden Tag auf Ihrer Seite oder in Ihrem Template ein:
<br /><br />
<i>{cms_module module="simpletagging" action="tagcloud"}</i></p>
<h3>Wie wird das Erscheinungsbild des Moduls beeinflußt?</h3>
<p>Um das Erscheinungsbild der Tag-Links zu verändern, erstellen Sie eine CSS-Klasse für <i>a.taglink</i> (wird zum Darstellen der Tagliste und der Suchergebnisse verwandt) und für <i>a.tagcloudlink</i> (wird in der Tagcloud verwendet).
</p>
<p>
Um das Erscheinungsbild der Tag-Suchergebnisse zu verändern, bearbeiten Sie das "Suchtemplate für Tags" im Administrationspanel. Hier können Sie auch das Erscheinungsbild der Tag-Liste sowie der verwandten Seiten verändern. Um die Mindest- und Höchstgrößen der Schriftarten in der Tagcloud zu verändern, bearbeiten Sie die Werte bei "Tagcloud-Einstellungen" im Administrationspanel.</p>
<p>Die Einstellungen für verwandte Seiten bearbeiten Sie ebenfalls im Administrationspanel. Die Option "Tag-Überdeckung" gibt einen Prozentsatz an, über den bestimmt wird, ob eine Seite verwandt ist oder nicht. Der Defaultwert ist 50 was bedeutet, daß eine Seite, um als "verwandt" angesehen zu werden, mindestens die Hälfte der Tags der ursprünglichen Seite besitzen muß. Die Option "Höchstzahl verwandter Seiten" gibt an, wie viele Seiten in der Liste verwandter Seiten höchstens angezeigt werden sollen.
<h3>Support</h3>
<p>As per the GPL, this software is provided as-is. Please read the text of the license for the full disclaimer.</p>
<h3>Copyright and License</h3>
<p>Copyright &copy; 2008, Henning Schaefer <a href="mailto:henning.schaefer@gmail.com">&lt;henning.schaefer@gmail.com&gt;</a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. You must agree to this license before using the module.</p>';
?>
