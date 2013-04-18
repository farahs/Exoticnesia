<?php
/* @var $this InfonesiaController */
/* @var $model Infonesia */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'infonesia-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_daerah'); ?>
		<?php echo $form->textField($model,'namadaerah',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'namadaerah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deskripsi'); ?>
		<?php echo $form->textArea($model,'deskripsi',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'deskripsi'); ?>
	</div>

	<div class="row">
		<div id="imageDaerah">
            <?php echo $form->labelEx(Urlpic::model(), 'image'); ?>
            <h6> File tidak boleh kosong </h6>
            <div>
            	<?php echo $form->fileField(Urlpic::model(), '[0]image');?>
            	<?php echo $form->error(Urlpic::model(),'[0]image'); ?>
            </div>
            <div>
            	<?php echo $form->fileField(Urlpic::model(), '[1]image');?>
				<?php echo $form->error(Urlpic::model(),'[1]image'); ?>
			</div>
			<div>
	            <?php echo $form->fileField(Urlpic::model(), '[2]image');?>
	            <?php echo $form->error(Urlpic::model(),'[2]image'); ?>
            </div>
            <div>
	            <?php echo $form->fileField(Urlpic::model(), '[3]image');?>
	            <?php echo $form->error(Urlpic::model(),'[3]image'); ?>
	        </div>
	        <div>
	            <?php echo $form->fileField(Urlpic::model(), '[4]image');?>
	            <?php echo $form->error(Urlpic::model(),'[4]image'); ?>
	        </div>
        </div>
	</div> 

	<div class="row">
		<?php echo $form->labelEx($model,'kendaraan'); ?>
		<?php echo $form->textArea($model,'kendaraan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'kendaraan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx(Penginapan::model(),'penginapan'); ?>
		<?php echo $form->textArea(Penginapan::model(),'penginapan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error(Penginapan::model(),'penginapan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx(Tempatmakan::model(),'tempatmakan'); ?>
		<?php echo $form->textArea(Tempatmakan::model(),'tempatmakan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error(Tempatmakan::model(),'tempatmakan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->