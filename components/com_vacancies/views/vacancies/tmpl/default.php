<?php
defined('_JEXEC') or die('Restricted access');

JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidation');
?>


<div class="vacancies-form">
    <h1>Faça parte da nossa equipe</h1>
    <form id="vacancy-form" action="<?php echo JRoute::_('index.php?option=com_vacancies&view=vacancies&layout=insereform'); ?>" method="post" class="form-validate form-horizontal" enctype="multipart/form-data">
        <fieldset>
            <input type="text" id="nome" name="nome" placeholder="Nome Completo" required="true" />
            <input type="email" name="email" placeholder="E-mail" required="true" class="input" id="email"/>
            <input name="file-original" type="file" size="30" required="true" class="custom-file-input">
        </fieldset>
        <fieldset>
            <textarea rows="2" cols="50" name="voce" placeholder="Fale de você..."></textarea>
            <input type="submit" value="Enviar" class="btn submitform"/>
        </fieldset>
    </form>
</div>