@extends('main')

@section('title', '| Home')

@section('content')
      <div class="row">
          <div class="col-md-12">
            <div class="jumbotron">
              <h1 style="text-align:center;">Freedom Blog</h1>
              <p class="lead"  style="text-align:center;">Post anonymously whatever you want, whenever you want!</p>
              <p><a class="btn btn-success btn-lg btn-block" href="{{ route('posts.create') }}" role="button">Create New Post!</a></p>
            </div>
          </div>
      </div> <!-- end of .row -->
      
      <!--<div class="row">
          <div class="col-md-8" >
                <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus voluptates sit laborum quasi vero saepe molestias laboriosam illo corrupti, eos ut neque aliquid ducimus hic dolorum recusandae iste temporibus velit....</p>
                <a href="#" class="btn btn-primary">Read More</a>
                </div>

                <hr>

                <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem quod ea delectus quis, quia molestiae magnam laudantium, dicta earum ipsam, accusamus laboriosam id quaerat totam architecto facere eaque, molestias nobis....</p>
                <a href="#" class="btn btn-primary">Read More</a>
                </div>

                <hr>

                <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat ipsa nam, ullam, quibusdam aliquid maxime esse distinctio temporibus fuga dicta, beatae aperiam officiis, voluptas! Nisi consequuntur praesentium dolorem odit tempore?...</p>
                <a href="#" class="btn btn-primary">Read More</a>
                </div>

                <hr>

                <div class="post">
                <h3>Post Title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus est laborum dolore, neque adipisci impedit sequi nihil, libero, laboriosam voluptatem necessitatibus similique tempore quasi minima repudiandae eligendi dignissimos soluta quaerat?...</p>
                <a href="#" class="btn btn-primary">Read More</a>
                </div>
          </div>

          <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
          </div>
      </div -->
@endsection