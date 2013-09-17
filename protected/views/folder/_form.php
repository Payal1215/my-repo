<?php
/* @var $this FolderController */
/* @var $model Folder */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'folder-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	
	
	
		<div class="row">
					<?php echo $form->labelEx($model,'user_id'); ?>
					
					
					<?php echo "Hi". "&nbsp" .Yii::app()->user->name;
							?>
					
	
					<?php echo $form->error($model,'user_id'); ?>
				</div>
	
	
	
	<div class="row">
		<?php echo $form->labelEx($model,'category_id'); ?>
		<?php echo $form->dropDownList($model,'category_id', CHtml::listData(Category::model()->findAll(array('order' => 'category_name ASC')),"category_id", "category_name"), array('empty'=> 'select category')); ?>
		<?php echo $form->error($model,'category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'folder_name'); ?>
		<?php echo $form->textField($model,'folder_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'folder_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'folder_description'); ?>
		<?php echo $form->textArea($model,'folder_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'folder_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reference_link'); ?>
		<?php echo $form->textField($model,'reference_link',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'reference_link'); ?>
	</div>

	<!--
	<div class="row">
			<?php echo $form->labelEx($model,'time_log'); ?>
			<?php echo $form->textField($model,'time_log'); ?>
			<?php echo $form->error($model,'time_log'); ?>
		</div>
	-->
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->