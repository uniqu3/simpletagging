<?php
$lang['friendlyname'] = 'Теги';
$lang['postinstall'] = 'Модуль Теги был успешно уставновлен. Ознакомьтесь с документацией по использованию модуля.';
$lang['postuninstall'] = 'Модуль Теги был удален вместе со всеми тегами.';
$lang['really_uninstall'] = 'Вы уверены, что хотите удалить этот модуль?';
$lang['uninstalled'] = 'Модуль удален.';
$lang['installed'] = 'Версия модуля %s была установлена.';
$lang['upgraded'] = 'Модуль обновлен до версии %s.';
$lang['moddescription'] = 'Модуль Теги позволяет перелинковывать страницы посредством облака тегов или выдавать список схожих страниц с одинаковыми тегами.';
$lang['error'] = 'Ошибка!';
$lang['admindescription'] = 'Позволяет Вам добавлять семантические теги к страницами и создавать из них облако тегов или списки схожих страниц.';
$lang['accessdenied'] = 'Отказано в доступе. Пожалуйста, проверьте разрешения.';
$lang['Tagsearchtemplate'] = 'Шаблоны';
$lang['Tagcloudsettings'] = 'Настройки';
$lang['title_tagsearchtemplate'] = 'Шаблоны';
$lang['title_tagcloudsettings'] = 'Настройки';
$lang['simpletagging_admin'] = 'Изменить настройки для модуля Теги.';
$lang['simpletagging_admin_header'] = 'Здесь Вы можете изменить настройки модуля Теги, включая его оформление.';
$lang['simpletagging_admin_footer'] = ' ';
$lang['submit'] = 'Сохранить';
$lang['searchtemplate'] = 'Шаблон для найденных страниц';
$lang['tagstemplate'] = 'Шаблон для показа тегов страницы';
$lang['relatedtemplate'] = 'Шаблон для схожих страниц';
$lang['tagcloud'] = 'Настройки облака тегов';
$lang['tagcloud_minfontsize'] = 'Минимальный размер шрифта (px)';
$lang['tagcloud_maxfontsize'] = 'Максимальный размер шрифта (px)';
$lang['tagcloud_delimiter'] = 'Разделитель тегов';
$lang['relatedpages'] = 'Настройки для схожих страниц';
$lang['related_coverage'] = 'Охват тега в схожих страницах (%)';
$lang['related_max'] = 'Максимальное кол-во схожих страниц';
$lang['prompt_resultpage'] = 'Страница для показа найденных схожих страниц';
$lang['reload_tags'] = 'Перезагрузка всех тегов.';
$lang['reload_tags_info'] = 'Используйте эту функцию для перезагрузки тегов, например, после обновления.';
$lang['templates_saved'] = 'Шаблон был сохранен.';
$lang['settings_saved'] = 'Настройки были сохранены.';
$lang['tags_reloaded'] = 'Все теги перезагружены.';
$lang['no_tags'] = 'нет';
$lang['defaultsearchtemplate'] = '<h3>Страницы, содержащие информацию о <i>{$searchtag}</i></h3>
<ul>
{foreach from=$results item=result}
  <li><a href="{$result.url}">{$result.title}</a><br />
    <b>Другие теги:</b> {foreach from=$result.othertags item=tag}
      {$tag} 
    {/foreach}
  </li>
{/foreach}
</ul>
';
$lang['defaulttagtemplate'] = '<b>Дополнительная информация:</b>
  {foreach from=$tags item=tag}
  <a href="{$tag.url}">{$tag.title}</a>
    {if $tag.delimiter == true}, {/if}
  {/foreach}
';
$lang['defaultrelatedtemplate'] = '<b>Схожие страницы:</b>
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
	<li><b>NEW:</b> The "related pages" feature is introduced</li>
	<li><b>NEW:</b> The page tags list is now customizable by a template</li>
	<li><b>NEW:</b> You can automatically reload all tags after manually upgrading the module or when something breaks.</li>
	<li><b>FIX:</b> Compatibility with 1.3</li>
	<li><b>FIX:</b> Minor fixes and improvements</li>
	</ul>
</li>
<li>Version 0.1 - 3 June 2008. Initial Release.</li>
</ul>';
$lang['help'] = '<h3>Назначение</h3>
<p>Позволяет перелинковывать страницы посредством добавления к ним тегов и выводы в виде облака тегов или списка схожих страниц.</p>
<h3>Как использовать</h3>
<p>Перед тем, как использовать теги в страницах, Вам необходимо поместить дополнительный блок контента в шаблон. Откройте шаблон или шаблоны, которые используются для страниц с родственным конетентом и вставьте тег, представленный ниже после основного блока контента:<br /><br />
<i><!-- {content block=&quot;Tags&quot; wysiwyg=&quot;false&quot; oneline=&quot;true&quot;} --></i><br /><br />
Комментарии в HTML спрячут блок от показа на странице, но будут показывать дополнительный блок на странице редактирования контента. Модуль Теги автоматически индексирует страницы в соответствии с заданными в них тегами. Эти теги помогут Вам создать разумную внутреннюю перелинковку (SEO).</p>
<p>Для добавления тегов к странице, откройте страницу для редактирования как обычно и введите список тегов для страницы в поле с названием Tags.</p>
<h3>Как показывать список тегов, присвоенных странице, список схожих страниц или облако тегов?</h3>
<p>Списки рекомендуется выводить непосредственно в шаблоне страниц. Добавьте нижеследующий тег для вывода всех тегов, присвоенных данной странице: 
<br /><br />
<i>{cms_module module="simpletagging"}</i></p>
<p>Для показа схожих страниц (которые используют те же теги), добавьте на место показа в шаблоне тег:
<br /><br />
<i>{cms_module module="simpletagging" action="related"}</i></p>
<p>Для показа облака тегов всех страниц, добавьте следующий тег:<br /><br />
<i>{cms_module module="simpletagging" action="tagcloud"}</i></p>
<h3>Как изменить оформление выдачи?</h3>
<p>Используй стили CSS, создайте CSS класс для <i>a.taglink</i> (который используется, как в списке тегов, так и в списке схожих страниц) и класс <i>a.tagcloudlink</i> (используется для вывода облака тегов).</p>
<p>Для форматирования выдачи на странице с найденными страницами, измените "Шаблон для найденных страниц". Для изменения минимального и максимального размера шрифта в облаке тегов, перейдите на вкладку "Настройки облака тегов".</p>
<p>Для настройки показа схожих страниц, редактируйте настройки в административной панели. "Охват тега" показывает насколько содержимое страницы соответствует тегу. По умолчанию - это 50%, что означает, что в страницах совпадают минимум половина тегов. "Максимальное кол-во схожих страниц" ограничивает вывод схожих страниц для предотвращения выдачи огромных списков.
<h3>Support</h3>
<p>As per the GPL, this software is provided as-is. Please read the text of the license for the full disclaimer.</p>
<h3>Copyright and License</h3>
<p>Copyright © 2008, Henning Schaefer <a href="mailto:henning.schaefer@gmail.com"><henning.schaefer@gmail.com></a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. You must agree to this license before using the module.</p>';
$lang['qca'] = 'P0-1938388883-1277855813144';
$lang['utma'] = '156861353.429593658.1277855813.1293987487.1293989560.157';
$lang['utmz'] = '156861353.1293937905.152.73.utmcsr=wiki.cmsmadesimple.org|utmccn=(referral)|utmcmd=referral|utmcct=/index.php/User_Handbook/Admin_Panel/Tags/content_dump';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>