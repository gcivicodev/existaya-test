<?php /* Template Name: Existaya */ ?>
 
<?php get_header(); ?>

<?php 

	$args = array(
		'post_type' => 'item',
		'order' => 'asc',
		'tag' => $pagename,
	);

	$query = new WP_Query( $args );

	$item_data = array();

	if(count($query->posts > 0)) {
		foreach ($query->posts as $post) {
			$post_id = $post->ID;
			$obj = new stdClass;
			$obj->post_id = $post_id;
			$obj->image = get_post_meta($post_id,'wpcf-image',true);
			$obj->line1 = get_post_meta($post_id,'wpcf-line-1',true);
			$obj->line2 = get_post_meta($post_id,'wpcf-line-2',true);
			$obj->application = get_post_meta($post_id,'wpcf-application',true);
			$obj->from = get_post_meta($post_id,'wpcf-from',true);
			$date1 = new DateTime();
			$date1->setTimestamp($obj->from);
			$obj->from = $date1->format('F d \d\e Y | h:i:s A');
			$obj->to = get_post_meta($post_id,'wpcf-to',true);
			$date1 = new DateTime();
			$date1->setTimestamp($obj->to);
			$obj->to = $date1->format('F d \d\e Y | h:i:s A');
			$obj->guid = urldecode($post->guid);
			$obj->guid = str_replace('&#038;', '&', $obj->guid);

			$item_data[] = $obj;
		}
	}

?>


<?php if(count($item_data) > 0): ?>

	<?php $counter = 0; ?>
	
	<?php foreach($item_data as $item): ?>

		<?php if($counter % 2 == 1): ?>

			<section class="row align-items-center pl-3 pr-3 ln-section">
				<div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-12">
					<p class="mb-0 ln-p1"><b><?php echo $item->line1; ?></b></p>
					<h1 class="ln-h1"><?php echo $item->line2; ?></h1>
					<p class="mb-1 ln-p2"><img src="/existaya-test/wp-content/uploads/2018/08/tag.png" > &nbsp; <?php echo $item->application; ?></p>
					<p class="mb-xl-5 mb-lg-5 mb-md-2 mb-1 ln-p2"><img src="/existaya-test/wp-content/uploads/2018/08/cal.png" > &nbsp; <?php echo $item->from; ?> - <?php echo $item->to; ?></p>
					<a href="<?php echo $item->guid; ?>" class="btn btn-lg btn-light">Ler más información</a>
				</div>
				<div class="col-xl-7 col-lg-7 col-md-6 col-sm-6 col-12">
					<img class="img-fluid" src="<?php echo $item->image; ?>" >
				</div>
			</section>

		<?php else: ?>

			<section class="row align-items-center pl-3 pr-3 ln-section">
				<div class="col-xl-7 col-lg-7 col-md-6 col-sm-6 col-12">
					<img class="img-fluid" src="<?php echo $item->image; ?>" >
				</div>
				<div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-12">
					<p class="mb-0 ln-p1"><b><?php echo $item->line1; ?></b></p>
					<h1 class="ln-h1"><?php echo $item->line2; ?></h1>
					<p class="mb-1 ln-p2"><img src="/existaya-test/wp-content/uploads/2018/08/tag.png" > &nbsp; <?php echo $item->application; ?></p>
					<p class="mb-xl-5 mb-lg-5 mb-md-2 mb-1 ln-p2"><img src="/existaya-test/wp-content/uploads/2018/08/cal.png" > &nbsp; <?php echo $item->from; ?> - <?php echo $item->to; ?></p>
					<a href="<?php echo $item->guid; ?>" class="btn btn-lg btn-light">Ler más información</a>
				</div>
			</section>

		<?php endif; ?>

		<?php $counter++; ?>

	<?php endforeach; ?>

<?php endif; ?>

<?php get_footer(); ?>