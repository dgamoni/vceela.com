<article <?php post_class('post clearfix'); ?>>
<div class="container">
<div class="row">
	<?php if(has_post_thumbnail()) { ?>

        <div class="column threecol">
    
            <div class="post-image">
    
                <div class="image-wrap">
    
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('normal'); ?></a>
    
                </div>
    
            </div>
            <div class="element-title" >
        
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        
            </div>
    
        </div>
    
        

	<?php }?>
     </div>
   </div>
   </div>
   
</article>
