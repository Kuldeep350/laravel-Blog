<template>
    <div class="post-preview">
                                      
            <a href="slug">

              <h2 class="post-title">

                {{title}}

              </h2>

              <h3 class="post-subtitle">

                {{subtitle}}

              </h3>
            </a>
          
                  <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
             {{ created_at }}
             <a href="#" style="text-decoration:none;" >
              <i class="fa fa-thumbs-up" aria-hidden="true"></i>
              <small>0</small>
            </a>
           </p>

          </div>
</template>

<script>
    export default {
       props:[
                'title'
       ]
    }
</script>
