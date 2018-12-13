$(function () {
  $('.like_button').on('click',function (e) {
      e.preventDefault();
      var like_id = $(this).attr('data-like');
      var timestamp = new Date().getUTCMilliseconds();
      var post_url = $('#likeITEM').attr('data-url');
      var post_id = $('#likeITEM').attr('data-postID');
      // alert(post_id);
      $.ajax({
          url:post_url,
          type:"GET",
          data:{
              like:like_id,
              uniquie_id:timestamp,
              post_id:post_id,
          },
          success:function (data) {
              var json = jQuery.parseJSON(data);

              $('#one_likes').text(json.one);
              $('#two_likes').text(json.two);
              $('#three_likes').text(json.three);
              console.log(data);
          }

      });
  });
});
