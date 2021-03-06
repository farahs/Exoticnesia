<?php
/* @var $this PenggunaController */
/* @var $model Pengguna */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pengguna-form',
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); 
	$actionId = $this->action->id;

?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array(
														'size'=>20,
														'maxlength'=>20,
														'disabled'=>!$model->isNewRecord
														)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($pt,'password'); ?>
		<?php echo $form->passwordField($pt,'password',array(
														'size'=>20,
														'maxlength'=>20,
														'disabled'=>!$model->isNewRecord
														)); ?>
		<?php echo $form->error($pt,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($pt,'email'); ?>
		<?php echo $form->textField($pt,'email',array(
													'size'=>40,
													'maxlength'=>40,
													'disabled'=>!$model->isNewRecord
												)); ?>
		<?php echo $form->error($pt,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($profil,'nama'); ?>
		<?php echo $form->textField($profil,'nama',array(
													'size'=>20,
													'maxlength'=>20,
													'disabled'=>!$model->isNewRecord
													)); ?>
		<?php echo $form->error($profil,'nama'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($profil,'avatar'); ?>
		<?php echo $form->fileField($profil,'avatar',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($profil,'avatar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($profil,'contact'); ?>
		<?php echo $form->textField($profil,'contact',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($profil,'contact'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($profil,'sex'); ?>
		<div class="compactRadioGroup">
			<?php echo $form->radioButtonList($profil,'sex',array('Male'=>'Male', 'Female'=>'Female'),array('separator'=>' ')); ?>
		</div>
		<?php echo $form->error($profil,'sex'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Daftar' : 'Save'); ?>
		<?php echo CHtml::Button('Cancel',array('onClick'=> 'js:history.go(-1);returnFalse;')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->