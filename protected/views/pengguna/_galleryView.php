<?php
        

        $dataProvider = new CActiveDataProvider('Foto',array(
            'pagination'=>array('pageSize'=>5),
            'criteria'=>array('condition'=> 'username=\''.$model->username.'\''),

));
?>

<?php $this->widget('zii.widgets.CListView', array(
       'dataProvider'=>$dataProvider,
       'itemView'=>'galleryView',
       'pager'=>array('header'=>'Pages'),
       
       
)); 
?>