<?php get_header(); ?>
    
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php the_title(); ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php the_category(); ?></h6>
            <p class="card-text"><?php the_content(); ?></p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
        </div>
        <?php endwhile ?>
        
    <?php else: ?>
        <h1> pas d'article </h1> 
    <?php endif; ?> 
    
<?php get_footer(); ?> 