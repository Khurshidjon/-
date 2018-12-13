$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr('content')
        },
    });

    $('.load_more').on('click', function (e) {
        e.preventDefault();
        var container =$(this).prev().find('.load_more_items');
        var skip = container.attr('data-skip');
        var url = $(this).attr('data-url');
        $(this).css('display', 'none');
        $('.container-preloader').css('display', 'block');
            $.ajax({
                url: url,
                type:'GET',
                data: {
                    skip:skip,
                },
                success:function (data) {
                    var json = jQuery.parseJSON(data);
                    container.attr('data-skip', json.skip);
                    $(json.result).appendTo(container);
                    if (json.result == ''){
                        $('.load_more').css('display', 'none');
                        $('.container-preloader').css('display', 'none');
                    }else{
                        $('.load_more').css('display', 'block');
                        $('.container-preloader').css('display', 'none');
                    }
                }
            });
    });


})