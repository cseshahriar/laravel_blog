<template>
    <div class="post-preview">
        <a href="slug">  
            <h2 class="post-title">  
                {{ title }}
            </h2>
            <h3 class="post-subtitle">
                {{ subtitle }}   
            </h3>
        </a>
        <p class="post-meta">Posted by
              <a href="#">Start Bootstrap</a>
              on {{ created_at }}
              &nbsp;&nbsp;
              <a href="#">
                <small>0</small>
                <i class="fa fa-thumbs-o-up" aria-hidden="true"></i> &nbsp;&nbsp;
              </a>
              <a href="#">
                <small>0</small>
                <i class="fa fa-thumbs-o-down" aria-hidden="true"></i>
              </a>
        </p>      
    </div>
</template>

<script>
    export default {
       props:[
            'title',
       ]
    }
</script>
