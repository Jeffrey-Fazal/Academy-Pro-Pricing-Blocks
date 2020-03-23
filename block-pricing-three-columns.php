<h3><?php block_field( 'heading' ); ?></h3>
<div class="pricing-table">
 
<?php
if ( block_value( 'package-one-featured' ) ) {
 echo '<div class="one-third first featured">';
} else {
 echo '<div class="one-third first">';
}
?>
 
<h4><?php block_field( 'package' ); ?></h4>
<span class="description"><?php block_field( 'description' ); ?></span>
<span class="price"><?php block_field( 'price' ); ?></span>
 
<ul>
<?php block_field( 'features' ); ?>
</ul>
 
<a href="<?php block_field( 'buttonlink' ); ?>" class="button secondary small"><?php block_field( 'buttontext' ); ?></a>
 
</div>
 
<?php
if ( block_value( 'package-two-featured' ) ) {
 echo '<div class="one-third featured">';
} else {
 echo '<div class="one-third">';
}
?>
 
<h4><?php block_field( 'package-1' ); ?></h4>
<span class="description"><?php block_field( 'description-1' ); ?></span>
<span class="price"><?php block_field( 'price-1' ); ?></span>
 
<ul>
<?php block_field( 'features-1' ); ?>
</ul>
 
<a href="<?php block_field( 'buttonlink-1' ); ?>" class="button secondary small"><?php block_field( 'buttontext-1' ); ?></a>
 
</div>
 
<?php
if ( block_value( 'package-three-featured' ) ) {
 echo '<div class="one-third featured">';
} else {
 echo '<div class="one-third">';
}
?>
 
<h4><?php block_field( 'package-2' ); ?></h4>
<span class="description"><?php block_field( 'description-2' ); ?></span>
<span class="price"><?php block_field( 'price-2' ); ?></span>
 
<ul>
<?php block_field( 'features-2' ); ?>
</ul>
 
<a href="<?php block_field( 'buttonlink-2' ); ?>" class="button secondary small"><?php block_field( 'buttontext-2' ); ?></a>
 
</div>
 
</div>
