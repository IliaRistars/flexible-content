jQuery(function ($) {
    $('#loadmore').on('click', function (e) {
        e.preventDefault();
        $(this).text('Loading');
        var data = {
            'action': 'loadmore',
            'query': posts_vars,
            'post_type': post_type,
            'page': current_page,
            'offset': 3,
        };
        $.ajax({
            url: ajaxurl,
            data: data,
            type: 'POST',
            success: function (data) {
                $('.more-container-js').append(data);
                current_page++;
                if (data) {
                    $('#loadmore span').text('Load more');
                    if (current_page == max_pages) $("#loadmore").remove();
                } else {
                    $('#loadmore span').remove();
                }
            }
        });
    });
    $(document).on('click', '.filter-js', function (e) {
        e.preventDefault();
        var filter = $(this).parents('form');
        var currentValue = $(this).attr('href');
        console.log(currentValue);
        var ajaxurl = $('.ajax-link').val();
        $('input[name="categoryId"]').val(currentValue);
        $.ajax({
            url: ajaxurl,
            data: filter.serialize(),
            type: 'POST',
            success: function (data) {
                $('.filter-product').empty().html(data);
            }
        });
        return false;
    });
});