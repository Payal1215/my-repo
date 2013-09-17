<?php
/* @var $this AssetsController */
/* @var $model Assets */

$this->breadcrumbs=array(
	'Assets'=>array('index'),
	$model->asset_id=>array('view','id'=>$model->asset_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Assets', 'url'=>array('index')),
	array('label'=>'Create Assets', 'url'=>array('create')),
	array('label'=>'View Assets', 'url'=>array('view', 'id'=>$model->asset_id)),
	array('label'=>'Manage Assets', 'url'=>array('admin')),
);
?>

<h1>Update Assets <?php echo $model->asset_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>