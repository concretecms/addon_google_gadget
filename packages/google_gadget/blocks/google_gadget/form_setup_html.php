<? defined('C5_EXECUTE') or die(_("Access Denied.")); ?>  

<div style="margin-bottom:8px"><?=t('Paste your %sGoogle Gadget%s code below:','<a href="http://www.google.com/webmasters/gadgets/" target="_blank">','</a>')?></div>

<div style="text-align: center" >
<textarea id="ccm-googleGadgetContent" name="content" style="width:98%; margin:auto; height:130px;"><?=$controllerObj->content ?></textarea>
</div>