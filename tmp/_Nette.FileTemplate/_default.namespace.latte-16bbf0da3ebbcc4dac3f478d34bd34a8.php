<?php //netteCache[01]000382a:2:{s:4:"time";s:21:"0.27093300 1401650747";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:62:"C:\cygwin64\home\docs\apigen\templates\default\namespace.latte";i:2;i:1397165335;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:28:"$WCREV$ released on $WCDATE$";}}}?><?php

// source file: C:\cygwin64\home\docs\apigen\templates\default\namespace.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '25gjxnqcr5')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lbb94b896d37_title')) { function _lbb94b896d37_title($_l, $_args) { extract($_args)
;if ($namespace != 'None'): ?>Namespace <?php echo Nette\Templating\Helpers::escapeHtml($namespace, ENT_NOQUOTES) ;else: ?>
No namespace<?php endif ;
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbb9dd0d6e70_content')) { function _lbb9dd0d6e70_content($_l, $_args) { extract($_args)
?><div id="content" class="namespace">
	<h1><?php if ($namespace != 'None'): ?>Namespace <?php echo $template->namespaceLinks($namespace, false) ;else: ?>
No namespace<?php endif ?></h1>

<?php if ($subnamespaces): ?>
	<h2>Namespaces summary</h2>
	<table class="summary table table-bordered table-striped" id="namespaces">
<?php $iterations = 0; foreach ($subnamespaces as $namespace): ?>	<tr>
		<td class="name"><a href="<?php echo htmlSpecialChars($template->namespaceUrl($namespace)) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($namespace, ENT_NOQUOTES) ?></a></td>
	</tr>
<?php $iterations++; endforeach ?>
	</table>
<?php endif ?>

<?php Nette\Latte\Macros\CoreMacros::includeTemplate('@elementlist.latte', $template->getParameters(), $_l->templates['25gjxnqcr5'])->render() ?>
</div>
<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = '@layout.latte'; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
 $active = 'namespace' ?>

<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars())  ?>


<?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 