<?php
$lang['friendlyname'] = 'Simple Tagging';
$lang['postinstall'] = 'Simple Tagging foi instalado com sucesso. Por favor, consulte a documenta&ccedil;&atilde;o para dicas de uso!';
$lang['postuninstall'] = 'Simple Tagging foi desinstalado e todas as tags foram apagadas.';
$lang['really_uninstall'] = 'S&eacute;rio? Voc&ecirc; tem certeza
que deseja desinstalar este belo m&oacute;dulo?';
$lang['uninstalled'] = 'Modulo Desinstalado.';
$lang['installed'] = 'Modulo vers&atilde;o %s instalado.';
$lang['upgraded'] = 'Module atualizado para vers&atilde;o %s.';
$lang['moddescription'] = 'Simple Tagging fornece a habilidade de conectar tags &agrave;s p&aacute;ginas fornecer links para p&aacute;ginas relacionadas';

$lang['error'] = 'Erro!';
$land['admin_title'] = 'Painel de administra&ccedil;&atilde;o do Simple Tagging';
$lang['admindescription'] = 'Permite a você adicionar tags sem&acirc;nticas em p&aacute;ginas e apresentar uma nuvem de tags e uma lista de p&aacute;ginas relacionadas.';
$lang['accessdenied'] = 'Acesso negado. Por favor, verifique suas permiss&otilde;es.';
$lang['Tagsearchtemplate'] = 'Modelos visuais';
$lang['Tagcloudsettings'] = 'Configura&ccedil;&otilde;es';
$lang['title_tagsearchtemplate'] = 'Modelos visuais';
$lang['title_tagcloudsettings'] = 'Configura&ccedil;&otilde;es';

$lang['simpletagging_admin'] = 'Alterar configura&ccedil;&otilde;es do Simple Tagging';
$lang['simpletagging_admin_header'] = 'Aqui você pode alterar as configura&ccedil;&otilde;es do seu m&oacute;dulo Simple Tagging e a apar&ecirc;ncia das tags.';
$lang['simpletagging_admin_footer'] = '';
$lang['submit'] = 'Salvar';
$lang['searchtemplate'] = 'Modelo visual para a busca de tags';
$lang['tagstemplate'] = 'Modelo visual para a apresenta&ccedil;&atilde;o das tags';
$lang['relatedtemplate'] = 'Modelo visual das p&aacute;ginas relacionadas';
$lang['tagcloud'] = 'Configuração da nuvem de tags';
$lang['tagcloud_minfontsize'] = 'Tamanho m&iacute;nimo da fonte (px)';
$lang['tagcloud_maxfontsize'] = 'Tamanho m&aacute;ximo da fonte (px)';
$lang['tagcloud_delimiter'] = 'Delimitador das tags';
$lang['relatedpages'] = 'Configurações para as páginas relacionadas';
$lang['related_coverage'] = 'Cobertura de tags para p&aacute;ginas relacionadas (%)';
$lang['related_max'] = 'Número m&aacute;ximo de tags relacionadas';
$lang['reload_tags'] = 'Recarregar tags';
$lang['reload_tags_info'] = 'Utilize esta fun&ccedil;&atilde;o para recarregar todas as p&aacute;ginas de tags ap&oacute;s uma atualiza&ccedil;&atilde;o.';

$lang['templates_saved'] = 'Seu modelo visual foi salvo.';
$lang['settings_saved'] = 'Suas configura&ccedil;&otilde;es foram salvas.';
$lang['tags_reloaded'] = 'Todas as tags das p&aacute;ginas foram recarregadas.';

$lang['no_tags'] = 'nenhuma';

$lang['defaultsearchtemplate'] = '
<h3>P&aacute;ginas contendo informa&ccedil;&otilde;es sobre <i>{$searchtag}</i></h3>
<ul>
{foreach from=$results item=result}
  <li><a href="{$result.url}">{$result.title}</a><br />
    <b>Outras tags:</b> {foreach from=$result.othertags item=tag}
      {$tag} 
    {/foreach}
  </li>
{/foreach}
</ul>
';

$lang['defaulttagtemplate'] = '
<b>Mais informa&ccedil;&otilde;es em:</b>
  {foreach from=$tags item=tag}
  <a href="{$tag.url}">{$tag.title}</a>
    {if $tag.delimiter == true}, {/if}
  {/foreach}
';

$lang['defaultrelatedtemplate'] = '
<b>P&aacute;ginas relacionadas:</b>
<ul>
  {foreach from=$related item=page}
  <li><a href="{$page.url}">{$page.title}</a> ({$page.percentage}%)</li>
  {/foreach}
</ul>
';

$lang['changelog'] = '<ul>
<li>Vers&atilde;o 0.2 - 10 Junho 2008.
	<ul>
	<li><b>FIX:</b> Nenhum delimitador &eacute; apresentado como primeiro item na nuvem de tags</li>
	<li><b>NEW:</b> O recurso de "p&aacute;ginas relacionadas" foi acrescentado</li>
	<li><b>NEW:</b> Agora a p&aacute;gina de tags pode ser personalizada atrav&eacute;s de modelos visuais</li>
	<li><b>NEW:</b> Você pode recarregar automaticamente todas as tags depois de fazer atualiza&ccedil;&otilde;es do m&oacute;dulo ou quando algo der errado.</li>
	<li><b>FIX:</b> Compat&iacute;vel com 1.3</li>
	<li><b>FIX:</b> Outras corre&ccedil;&otilde;es e melhorias</li>
	</ul>
</li>
<li>Version 0.1 - 3 June 2008. Lan&ccedil;amento inicial.</li>
</ul>';
$lang['help'] = '<h3>O Que Isso Faz?</h3>
<p>Adiciona a habilidade de conectar tags com p&aacute;ginas e fornecer liks para p&aacute;ginas relacionadas</p>
<h3>Como Eu Utilizo?</h3>
<p>Antes de voc&ecirc; poder adicionar tags nas suas p&aacute;ginas de conteudo, voc&ecirc; precisa adicionar um bloco de conte&uacute;do para as tags em todos os templates para p&aacute;ginas que utilizam tags. Edite seu template e acrescente a seguinte linha no c&oacute;digo do mesmo, de prefer&ecirc;ncia ap&oacute;s o &uacute;ltimo bloco de conte&uacute;do utilizado no template:<br /><br />
<i>&lt;!-- {content block="Tags" wysiwyg="false" oneline="true"} --&gt;</i><br /><br />
Isto ir&aacute; adicionar outro bloco de conte&uacute;do (escondido) na p&aacute;gina que voc&ecirc; poder&aacute; editar a partir do seu da se&ccedil;&atilde;o &quot;Conte&uacute;do&quot; do seu administrador. Simple Tagging automaticamente indexar&aacute; suas p&aacute;ginas de acordo com as tags que foram adicionadas neste campo. Dessa forma, essas tags tamb&eacute;m ser&atilde;o indexados pelo mecanismo de pesquisa padr&atilde;o.</p>
<p>Para adicionar tags &agrave; sua p&aacute;gina, edite a p&aacute;gina como de costume e insira uma lista de tags separadas por v&iacute;rgulas no campo chamado &quot;Tags&quot;.</p>
<h3>Como fa&ccedil;o para inserir a lista de tags, uma lista de p&aacute;ginas relacionadas ou uma nuvem de tags em uma p&aacute;gina?</h3>
<p>&Eacute; recomend&aacute;vel acrescentar a chamada para a lista de tags e as p&aacute;ginas relacionadas diretamente no seu template (modelo visual). Inserir o seguinte c&oacute;digo para exibir uma lista de tags atribu&iacute;das &agrave; p&aacute;gina atual:
<br /><br />
<i>{cms_module module="simpletagging"}</i></p>
<p>Para exibir uma lista de p&aacute;ginas relacionadas (baseadas nas tags), insira o seguinte c&oacute;digo em sua p&aacute;gina ou template (modelo visual):
<br /><br />
<i>{cms_module module="simpletagging" action="related"}</i></p>
<p>Para inserir uma nuvem de tags em algum lugar da sua p&aacute;gina, acrescente o seguinte c&oacute;digo em sua p&aacute;gina ou template (modelo visual):<br /><br />
<i>{cms_module module="simpletagging" action="tagcloud"}</i></p>
<h3>Como eu posso mudar a apar&ecirc;ncia do m&oacute;dulo Simple Tagging?</h3>
<p>Para alterar o estilo do link das tags, criar uma classe css para <i>a.taglink</i> (usado na lista de tags e nos resultados de pesquisa) e <i>a.tagcloudlink</i> (utilizado na nuvem de tags).</p>
<p>Para alterar a apar&ecirc;ncia dos resultados de pesquisa de tags, alterar o &quot;modelo visual para a busca de tags&quot; no painel da administra&ccedil;&atilde;o. Para alterar o tamanho m&iacute;nimo e m&aacute;ximo de fonte utilizada na nuvem de tags, alterar os valores da &quot;configura&ccedil;&atilde;o da nuvem de tags&quot; no painel de administra&ccedil;&atilde;o.</p>
<p>Para ajustar as defini&ccedil;&otilde;es de p&aacute;ginas relacionadas, modificar as defini&ccedil;&otilde;es no painel de administra&ccedil;&atilde;o e alterar os valores de p&aacute;ginas relacionadas. A &quot;cobertura de tags&quot; &eacute; um percentual para determinar se uma p&aacute;gina realmente tem rela&ccedil;&atilde;o com outra - o padr&atilde;o &eacute; de 50 o que significa que uma p&aacute;gina relacionada deve conter pelo menos a metade das tags utilizadas na p&aacute;gina que deve estar relacionacida. A op&ccedil;&atilde;o &quot;M&aacute;ximo de p&aacute;ginas relacionadas&quot; determina quantas p&aacute;ginas relacionadas (que correspondem &agrave; cobertura de tags) dever&atilde;o ser exibidas.
<h3>Suporte</h3>
<p>Como GPL, este software &eacute; fornecida como est&aacute;. Por favor leia o texto da licen&ccedil;a para a total isen&ccedil;&atilde;o de responsabilidade.</p>
<h3>Copyright e Licença</h3>
<p>Copyright &copy; 2008, Henning Schaefer <a href="mailto:henning.schaefer@gmail.com">&lt;henning.schaefer@gmail.com&gt;</a>. Todos os direitos reservados.</p>
<p>Este m&oacute;dulo foi liberado sob a <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. Voc&ecirc; deve concordar com esta licen&ccedil;a antes de utilizar o m&oacute;dulo.</p>';
?>
