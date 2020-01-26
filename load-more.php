    <nav class="load_more">
        <?php next_posts_link('Load More', $the_query->max_num_pages ); ?>
    </nav>
    <script type="text/javascript">
        jQuery(function($){
            jQuery(document).ready(function(){
                jQuery('.load_more a').live('click', function(e){
                    e.preventDefault();
                    var link = jQuery(this).attr('href');
                    jQuery('.load_more').html('<span class="loader">Loading More Posts...</span>');
                    $.get(link, function(data) {
                            console.log(data);
                        var post = $("#posts .post ", data);
                        $('#posts').append(post);
                    });
                    jQuery('.load_more').load(link+' .load_more a');
                });
            });
        });
    </script>