<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<!--<title>Gallery Application</title>-->
		<meta name="description" content="Thumbnail Pile Effect with Automatic Grouping" />
		<meta name="keywords" content="jquery, pile, effect, images, grid, thumbnails, css3, grouping, albums" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
   
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/demo.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/stapel.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/custom.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/lightbox.css" />
	
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-1.10.2.min.js" ></script>
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/lightbox-2.6.min.js" ></script>
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/modernizr.custom.63321.js" ></script>	
	<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.stapel.js"></script>	

 

</head>
<body>
	
<div class="gallery">
	 <div class="topmenu">
	 	
				 	<?php 
				 	$cat=array();
				 	foreach($model as $value)
					{
						
										
						$cat1=array();
						$cat1['label']=$value->category_name;
						$cat1['url']=array('/users/gallery','id'=>$value->category_id);
						array_push($cat,$cat1);
					
					
						}				 	?>
                    
                    <?php $this->widget('zii.widgets.CMenu',array(
                        'id' => 'menu',
                        'items'=>$cat
                    )); ?>           
                
                   <?php $this->widget('zii.widgets.CMenu',array(
                                      'id' => 'menu',
                                      'items'=>array(
         
                                          array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest, 'linkOptions' => array( 'class' => 'menulink' ) ),
                                      ),
                                  )); ?>            
     </div> <!-- end topmenu -->

		
                                
</br></br>
			<header class="clearfix">
			
				
			<div class="support-note">
				<span class="note-ie">Sorry, only modern browsers.</span>
			</div>
			
			</header>
			
			<section class="main">
				
				<div class="wrapper">

					<div class="topbar">
						<span id="close" class="back">&larr;</span>
						
						<!--<h3 id="desc" ></h3>-->
					</div>
								
				
	<ul id="tp-grid" class="tp-grid og-grid">
	

			<?php foreach ($command as  $valuecom) {
				
				
			 ?>
			<h2 id="name"></h2> 
		<li data-pile="<?php echo $valuecom['folder_name']?>" >
				
			<a href="<?php echo $valuecom['asset_current_path']?>" data-lightbox="folder1" download="1.jpg" title="yayay">
			
			<span class="tp-info"><span><?php echo $valuecom['asset_name'];?></span></span> 
			<img src="<?php echo $valuecom['asset_current_path']?>" hspace="15" vspace="15" width="100" height="100" border="0"/>
			<a class="download" href="<?php echo $valuecom['asset_current_path']?>" download="1.jpg"  >DOWNLOAD<!--<img src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/image.png">--></a>	
				
			</a>
			<a>Description</a>
	<!--	<a href="<?php echo $valuecom['folder_description']?>" > 	</a>-->
<!--
			<p id="desc"> <?php echo $valuecom['folder_description'] ?> </p>
-->
		<?php } ?>
								

			</li>
				
					</ul>
					
	            
		
					
				</div>
			</section>

		</div><!-- /container -->
		</div>
   
  
  </div>
 
		
	
		<script type="text/javascript">	
			$(function() {

				var $grid = $( '#tp-grid' ),
					$name = $( '#name' ),
					$desc= $('#desc'),
					$close = $( '#close' ),
					$download = $('.download'),
					$loader = $( '<div class="loader"><i></i><i></i><i></i><i></i><i></i><i></i><span>Loading...</span></div>' ).insertBefore( $grid ),
					stapel = $grid.stapel( {
						randomAngle : true,
						delay : 50,
						gutter : 70,
						pileAngles : 0,
						
						onLoad : function() {
							$loader.remove();
							
						},
						
						onBeforeOpen : function( pileName ) {
							$desc.remove();
							$name.html( pileName );
							
						},
						onAfterOpen : function( pileName ) {
							$desc.show();
							$close.show();
							
						}
					} );

				$close.on( 'click', function() {
					$close.hide();
					$name.empty();
					stapel.closePile();
					
				} );

			} );
			
		</script>
	</body>
</html>

    </div>
  
 </div>
</div>
</body>
</html>
