@extends('user/app')

@section('bg-img', asset('user/img/home-bg.jpg'))
@section('title', 'Laravel')
@section('sub-heading', 'Learn Together and Grow together')

@section('main-content')

	 <!-- Main Content -->
    <div class="container">

      <div class="row" id="app">

        <div class="col-lg-8 col-md-10 mx-auto" >

          @foreach($posts as $post)

           <div class="post-preview">
                                      
            <a href="{{route('post',$post->slug)}}">

              <h2 class="post-title">

                {{$post->title}}

              </h2>

              <h3 class="post-subtitle">

                {{$post->subtitle}}

              </h3>
            </a>
          
                  <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
             {{ $post->created_at->diffForHumans() }}
             <a href="#" style="text-decoration:none;" >
              <i class="fa fa-thumbs-up" aria-hidden="true"></i>
              <small>0</small>
            </a>
           </p>

          </div>
          @endforeach
            <hr>

          <!-- Pager -->
          
            <ul class="pager">
              <li class="next" style="list-style:none;">
                {{$posts->links()}}

                  
              </li>
            </ul>

            
          </div>
       </div>

     </div>

   

    <hr>

@endsection

@section('footer')
<script  src="{{asset('js/app.js')}}"></script>

@endsection