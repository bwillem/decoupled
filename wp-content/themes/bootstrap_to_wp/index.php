<?php get_header(); ?>

<section id='content'></section>

<script type='text/javascript'>

  jQuery(document).ready(function($){
    $.ajax({
      url : 'http://localhost/wp-json/wp/v2/pages',
      method : 'GET'
    }).done(function(response){
      if(response.length){
        var nav = [];
        $.each(response, function(i, r){
          var title = '<li><a class="pagelink" href= "'+ r.link +'" data-id="'+ r.id +'"> '+ r.title.rendered +'</a></li>'
          nav.push(title);
        });
        $('#col-pages').append(list);
        $('.pagelink').on('click',function(e){
          e.preventDefault();
          var pageId = $(this).data('id');
          $.ajax({
            url : 'http://localhost/wp-json/wp/v2/pages/' + pageId,
            method : 'GET',
            beforeSend : function(){
              $('#content').css({'transform' : 'translateY(-100%)', 'opacity' : '0'});
            }
          }).done(function(r){
            $('#content').empty();
            $('#content').append('<div class="pageContent">' + r.content.rendered) + '</div>';
            $('#content').css({'transform' : 'translateY(20%)', 'opacity' : '1'});
          });
        });

      }
    });
  });

</script>
          
<?php get_footer(); ?>