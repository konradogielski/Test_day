<?php /* Template Name: Strona Główna */ ?>

<?php get_header(); ?>



<body >
	<div class="top-bg" style="background-image: url('<?php echo get_field('slider_bg') ?>');" ></div>

	<div class="container-fluid " style="padding: 0;"> 
		<div class="container section_2">
			<div class="row">
			<div class="col-md-8 col-sm-8 col-xs-12 section_2_left">
			<h2><?php echo get_field('title_section_2');?></h2>
			<p><?php echo get_field('content_section_2');?> </p>
			</div>	



			<div class="col-md-4 col-sm-4 col-xs-12 section_2_right">
				 <img src="<?php echo the_field('img_section_2'); ?>"></a>
				<h2><?php echo get_field('text_section_2_right');?></h2>
				<a class="button_first"><?php echo get_field('button_section_2');?></a>
			</div>	
			</div>
		</div>
	</div>
 

<div class="container-fluid section_shop" style="padding: 0;"> 
		<div class="container">

			<h2 class="tytul_sekcji"><?php echo get_field('title_shop');?></h2>

			 <?php   if( have_rows('shop_item') ):
			           while ( have_rows('shop_item') ) : the_row();  ?>
			           			
			                     <div  class="col-md-4 col-sm-6 col-xs-12 shop_item">
			                        <div class="male_img"><img src="<?php echo the_sub_field('img_item'); ?>"></img></div>
			                        <h2 class="tytul_produkt"><?php echo the_sub_field('title_item');?></h2>
			                        <h1 class="opis_produkt" ><?php echo the_sub_field('description_item');?></h1>
			                        <h1 class="opis_hover" ><?php echo the_sub_field('opis_hover');?></h1>
			                     </div>
			                

			 		
			          <?php  endwhile; endif; ?>
			 	</div>
		</div>
</body>




</html>




<?php get_footer(); ?>
