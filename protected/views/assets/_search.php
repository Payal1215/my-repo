<?php
/* @var $this AssetsController */
/* @var $model Assets */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'asset_id'); ?>
		<?php echo $form->textField($model,'asset_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'folder_id'); ?>
		<?php echo $form->textField($model,'folder_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asset_current_path'); ?>
		<?php echo $form->textField($model,'asset_current_path',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asset_cloud_path'); ?>
		<?php echo $form->textField($model,'asset_cloud_path',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'asset_name'); ?>
		<?php echo $form->textField($model,'asset_name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'thumbnail_path'); ?>
		<?php echo $form->textField($model,'thumbnail_path',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'time_log'); ?>
		<?php echo $form->textField($model,'time_log'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->