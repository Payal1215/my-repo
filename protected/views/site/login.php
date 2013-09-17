<div class="login" >
<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/login.css" />

<center>
	
<!--
<h1>Login</h1>

<p>Please fill out the following form with your login credentials:</p>-->


<div class="form" >  
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<h2>Sign In</h2>

<br>
	<div class="row">
		<?php echo $form->labelEx($model,''); ?>
		<?php echo $form->textField($model,'username',array('size'=>45,'maxlength'=>50,'placeholder'=>'Username')); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>
<br> 
	<div class="row">
		<?php echo $form->labelEx($model,''); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>45,'maxlength'=>50,'placeholder'=>'Password')); ?>
		<?php echo $form->error($model,'password'); ?>
		
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'&nbsp &nbsp rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>
<br><br>
	<div >
		 <?php echo CHtml::submitButton('',array('class'=>'button1')); ?>

	</div>
	
	
<?php $this->endWidget(); ?>
<div class="button">
		<?php echo CHtml::submitButton('New User?Sign up', array(
     'submit'=>Yii::app()->controller->createUrl('/users/create'),
    
));
?>
	</div>
	

</div><!-- form -->
</center>
</div>