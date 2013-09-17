<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	'enableAjaxValidation'=>false,
)); ?>
<h2>Sign Up</h2>
	

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,''); ?>
		<?php echo $form->textField($model,'lmw_id',array('size'=>45,'maxlength'=>50,'placeholder'=>'LMW ID')); ?>
		<?php echo $form->error($model,'lmw_id'); ?>
	</div>
<br>
	<div class="row">
		<?php echo $form->labelEx($model,''); ?>
		<?php echo $form->textField($model,'user_name',array('size'=>45,'maxlength'=>50,'placeholder'=>'User Name')); ?>
		<?php echo $form->error($model,'user_name'); ?>
	</div>
<br>
	<div class="row">
		<?php echo $form->labelEx($model,''); ?>
		<?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>50,'placeholder'=>'Email')); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>
<br>
	<div class="row">
		<?php echo $form->labelEx($model,''); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>45,'maxlength'=>50,'placeholder'=>'Password')); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
<br>
<!--
	<div class="row">
		<?php echo $form->labelEx($model,'create_at'); ?>
		<?php echo $form->textField($model,'create_at'); ?>
		<?php echo $form->error($model,'create_at'); ?>
	</div>-->


	<!--
	<div class="row">
			<?php echo $form->labelEx($model,'lastvisit_at'); ?>
			<?php echo $form->textField($model,'lastvisit_at'); ?>
			<?php echo $form->error($model,'lastvisit_at'); ?>
		</div>-->
	

	<div >
		 <?php echo CHtml::submitButton('',array('class'=>'button1')); ?>

	</div>
<?php $this->endWidget(); ?>

</div><!-- form -->