<?php
include ('class.php');
?>
<HTML>
<HEAD>
    <TITLE>Factory Example</TITLE>
    <meta charset="UTF-8">
    <link href="css/style.css" rel="stylesheet">
</HEAD>
<BODY>
    <?php echo makeForm::createObj('header')->getInp(); ?>
    <?php echo makeForm::createObj('search')->getInp(); ?>
    <?php echo makeForm::createObj('article')->getInp(); ?>
    <?php echo makeForm::createObj('article')->getInp(); ?>
    <?php echo makeForm::createObj('footer')->getInp(); ?>
</BODY>
</HTML>