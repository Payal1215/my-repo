<?php
/* @var $this AssetsController */
/* @var $model Assets */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'assets-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<!--
	<div class="row">
			<?php echo $form->labelEx($model,'folder_id'); ?>
			<?php echo $form->textField($model,'folder_id'); ?>
			<?php echo $form->error($model,'folder_id'); ?>
		</div>-->
	

	<div class="row">
		<?php echo $form->labelEx($model,'asset_current_path'); ?>
		<?php echo $form->textField($model,'asset_current_path',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'asset_current_path'); ?>
	</div>
	
	
         
	<div class="row">
		<?php echo $form->labelEx($model,'asset_cloud_path'); ?>
		<?php echo $form->textField($model,'asset_cloud_path',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'asset_cloud_path'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'asset_name'); ?>
		<?php echo $form->textField($model,'asset_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'asset_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thumbnail_path'); ?>
		<?php echo $form->textField($model,'thumbnail_path',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'thumbnail_path'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time_log'); ?>
		<?php echo $form->textField($model,'time_log'); ?>
		<?php echo $form->error($model,'time_log'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->