<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
   <head>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <title>Gallery Application</title>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <link type="text/css" rel="stylesheet" media="all" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />
        <link type="text/css" rel="stylesheet" media="all" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" />
   </head>
<body>
<div id="container">


<div id="page">
       <div id="header">
               <div class="site_title">
                     <?php if(isset($this->breadcrumbs)):?>
		
                       <div class="description"></div>
               </div> <!-- end site_title -->
 <div class="mainwrap">
        	<!--
			<?php $this->widget('zii.widgets.CBreadcrumbs', array(
						'links'=>$this->breadcrumbs,
					)); ?><!-- breadcrumbs -->
				<!--<?php endif?>-->
			
              
              <!--
               <div class="topmenu" style=""> 
                                                <?php $this->widget('zii.widgets.CMenu',array(
                                                    'id' => 'menu',
                                                    'items'=>array(
                                                       // array('label'=>'Home', 'url'=>array('/site/index'), 'linkOptions' => array( 'class' => 'menulink' ) ),
                                                       // array('label'=>'Folders', 'url'=>array('/folder/index'), 'linkOptions' => array( 'class' => 'menulink' )),
                                                       // array('label'=>'Sign-Up', 'url'=>array('/users/create'), 'linkOptions' => array( 'class' => 'menulink' ) ),
                                                       // array('label'=>'Login',  'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest, 'linkOptions' => array( 'class' => 'menulink' ) ),
                                                        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest, 'linkOptions' => array( 'class' => 'menulink' ) ),
                                                    ),
                                                )); ?>                  
                                           </div> -->
              <!-- end topmenu -->
              
       </div> <!-- end header -->


       
            <div class="content" z-index: "5">
                
                <?php echo $content; ?>
            </div>

       </div><!-- end columns_wrapper -->

<center>
       <div id="footer" >

               <div class="footer-left">
                    <p>
                       
                        Created at <a href="http://www.likemyworld.com">LikeMyWorld
                    </p>
               </div>

               

       </div> <!-- end footer -->
</center>

</div> <!-- end page -->

</div>

</body>
</html>
