<?php

	$this->widget('CTabView',array(
    'activeTab'=>'tab2',
    'tabs'=>array(
        'tab1'=>array(
        	
            'title'=>'Static tab',
            'content'=>'Content for tab 1'
        ),
        // 'tab2'=>array(
            // 'title'=>'Render tab',
            // 'view'=>'pages/_content1'
        // ),
        'tab3'=>array(
            'title'=>'Url tab',
            'url'=>Yii::app()->createUrl("site/index"),
        )
    ),
    'htmlOptions'=>array(
        'style'=>'width:500px;'
    )
));
	?>