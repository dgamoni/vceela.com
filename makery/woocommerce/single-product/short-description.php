<?php
/*
@version 3.0.0
*/

if(!defined('ABSPATH')) {
    exit;
}

global $post;
?>
<div style="margin-top:5%">
	<div class="panel-group" id="accordion">
		<div class="panel panel-default">
			<div class="panel-heading">
			  <h4 class="panel-title">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
				  <span class="glyphicon glyphicon-minus"></span>
				  Description
				</a>
			  </h4>
			</div>
			<div id="collapseOne" class="panel-collapse collapse in">
				<div class="panel-body">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<!--<div id="vertical-menu">
    <ul>

        <li>
            <h3><span class="plus">+</span>Product Description</h3>
            <ul style="margin-left:10%">
                <li><?php // the_content(); ?></li>
            </ul>
        </li>
    </ul>
</div>-->