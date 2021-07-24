<?php
/*
Title: My Dashboard Widget
Capability: manage_options
*/

/*$pld_list = array(
	array(
		'title' => 'Simple Page',
		'link'  => 'http://localhost/wordpress/plugin_dev/wp-admin/post.php?post=2&action=edit'
	),

	array(
		'title' => 'Privacy policy Page',
		'link'  => 'http://localhost/wordpress/plugin_dev/wp-admin/post.php?post=3&action=edit'
	),

);*/


$args  = array(
	'meta_key'   => 'is_quck_edit',
	'meta_value' => 1
);
$query = new WP_Query( $args );

while ( $query->have_posts() ) {
	$query->the_post();
	$post_id = get_the_ID();
	?>
    <ul>
        <li>
            <a href="http://localhost/wordpress/plugin_dev/wp-admin/post.php?post=<?php echo $post_id; ?>&action=edit"><?php the_title(); ?></a>
        </li>
    </ul>

    <?php
}
?>

<!--<ul>
	<?php /*foreach ( $pld_list as $item ) {
		printf( "<li><a href='%s'>%s</a></li>", $item['link'], $item['title'] );
	} */ ?>
</ul>-->


