<?php
/* @var $this AssetsController */
/* @var $model Assets */
// $this->widget('application.extensions.gallery.EGallery',
        // array('path' => Yii::app()->request->baseUrl.'/images/gallery')
    // );
$this->breadcrumbs=array(
	'Assets'=>array('index'),
	$model->asset_id,
);

$this->menu=array(
	array('label'=>'List Assets', 'url'=>array('index')),
	array('label'=>'Create Assets', 'url'=>array('create')),
	array('label'=>'Update Assets', 'url'=>array('update', 'id'=>$model->asset_id)),
	array('label'=>'Delete Assets', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->asset_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Assets', 'url'=>array('admin')),
);
?>

<h1>View Assets #<?php echo $model->asset_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'asset_id',
		'folder_id',
		'asset_current_path',
		'asset_cloud_path',
		'asset_name',
		'thumbnail_path',
		'time_log',
	),
)); ?>
