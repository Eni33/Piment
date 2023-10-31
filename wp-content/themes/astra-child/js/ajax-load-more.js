// ajax-load-more.js
jQuery(document).ready(function($) {
    var page = 1;
    var canLoad = true;
    var $loadMoreButton = $('#load-more-button');
    var totalPosts = ajax_object.total_posts;

    $('#load-more-button').on('click', function(e) {
        e.preventDefault();
        if (canLoad) {
            page++;
            loadArticles(page);
        }
    });

    function loadArticles(page) {
        $.ajax({
            url: ajax_object.ajaxurl,
            type: 'post',
            data: {
                action: 'load_more_posts',
                page: page
            },
            success: function(response) {
                if (response) {
                    $('#posts-container').append(response);
                    if (page * 3 >= totalPosts) {
                        canLoad = false;
                        $loadMoreButton.remove();
                    }
                } else {
                    canLoad = false;
                    $loadMoreButton.remove();
                }
            }
        });
    }
});
