<!--Template Name: React-->
<?php get_header(); ?>

<section id='content'></section>

<script type='text/babel'>
  var data = undefined;
  jQuery.ajax({
    url:'http://localhost/wp-json/wp/v2/comments',
    method:'GET',
  }).done(function(response){
    data = response;
  })
  var CommentBox = React.createClass({
      render: function() {
        return (
          <div className = "commentBox">
            <h1>Comments</h1>
            <CommentList data={this.props.data}/>
            <CommentForm />
          </div>
        );
      }
    });

    var CommentList = React.createClass({
      render: function() {
        return (
          <div className='commentList'>
            <Comment author = 'Dick Cheesey'>This is a comment</Comment>
            <Comment author = 'Dick Balognie'>This is the next comment</Comment>
          </div>
        );
      }
    });

    var CommentForm = React.createClass({
      render: function(){
        return (
          <div className='commentForm'>
            Comment Form
          </div>
        );
      }
    });

    var Comment = React.createClass({
      render: function(){
        return (
          <div className='comment'>
            <h2>
              {this.props.author}
            </h2>
            {this.props.children}
          </div>
        );
      }
    });

    ReactDOM.render(
      <CommentBox data={data} />,
      document.getElementById('content')
    );
  </script>
          
<?php get_footer(); ?>