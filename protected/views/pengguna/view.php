<?php
/* @var $this PenggunaController */
/* @var $model Pengguna */

$this->breadcrumbs=array(
	'Profil',
	$model->username,
);

if(Yii::app()->user->id == $model->username) {
	$this->menu=array(
		// array('label'=>'List Pengguna', 'url'=>array('index')),
		// array('label'=>'Create Pengguna', 'url'=>array('create')),
		array('label'=>'Edit Profil', 'url'=>array('update', 'id'=>$model->username)),
		array('label'=>'Create Wishlist', 'url'=>array('viewwishlist', 'id'=>$model->username)),
		// array('label'=>'Delete Pengguna', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->username),'confirm'=>'Are you sure you want to delete this item?')),
		// array('label'=>'Manage Pengguna', 'url'=>array('admin')),
	);
}
?>

<h1><?php echo $model->profils->nama; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
			'label'=>'Avatar',
			'type'=> 'raw',
			'value'=>html_entity_decode(CHtml::image(Yii::app()->baseUrl.'/images/avatar/'.$model->profils->avatar,'alt',array('width'=>150,'height'=>150))) ,
		),
		'username',
		'profils.nama',	
		'username0.email',
		'profils.contact',
		'profils.sex',
		// 'kodeDaftar',
		// 'isAktif',
	),
)); 
?>
<br/>
<h3> Wishlist </h3>
<div>
<?php $this->renderPartial('_wishlistView',array(
            'data'=>$wishlist,
            'model'=>$model
        ));
    ?>
    <div style="clear:both;"></div>
</div>
<h3> Gallery </h3>
<div>	
<?php $this->renderPartial('_galleryView',array(
            'data'=>$foto,
            'model'=>$model
        ));
    ?>
    <div style="clear:both;"></div>
</div>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'foto-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

<?php if(Yii::app()->user->id == $model->username) {?>
<br/>
<div class="row">
		<div id="foto" align = "center">
            <?php echo $form->labelEx(Foto::model(), 'Foto'); ?>
            <?php echo $form->fileField(Foto::model(), 'foto');?>
            <?php echo $form->error(Foto::model(),'foto'); ?>
        </div>
        <div class="row buttons" align = "center">
			<?php echo CHtml::submitButton('Upload',array('id'=>'/pengguna/view')); ?>
		</div>
</div> 
<?php } ?>
<?php $this->endWidget(); ?>

