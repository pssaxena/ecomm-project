<html>
    <head>
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
       <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(document).ready(function(){    
    $("span").click(function(){    
        $("div.slider").toggle(1500);    
    });    
});    
</script>
  
  
  

        
        <style>
        .slider
            {
                height: 337px;
                width: 600px;
                position: relative;
            }
            
            img
            {
                max-width: 100%;
                max-height: 600px;
                position: absolute;
                opacity: 0;
                transition: 1s;
            }
            
            span{
                position:absolute;
                z-index:1;
                top:50%;
                transform: translate(-50%);
                background: rgba(0,0,0,0.8);
                padding: 10px;
                color: #fff;
            }
            
            .active
            {
                opacity: 1;
            }
            
            span.next
            {
                right:0;
            }
        
        </style>
        
         <script>
    $(document).ready(function(){  
     $('.slider span.next').click(function(){
      $current= $(this).siblings('img.active');
     $next= $current.next('img');
     if($next.length!=0){
         $current.removeClass('active');
         $next.addClass('active');
            
     });                          
     });
    </script>
    <script>
    $(document).ready(function(){  
     $('.slider span.prev').click(function(){
      $current= $(this).siblings('img.active');
     $prev= $current.prev('img');
     if($prev.length!=0){
         $current.removeClass('active');
         $prev.addClass('active');
            
     });                          
     });
    </script>
    
    
    </head>
<body>
    <div class="slider">
    <img src= 'proimg/130.jpg' class="active">
    <img src='proimg/131.jpg'>
    <img src='proimg/132.jpg'>
    <img src='proimg/133.jpg'>
    <img src='proimg/134.jpg'>
    <img src='proimg/135.jpg'>   
    <span class="fa fa-chevron-left prev"></span>
    <span class="fa fa-chevron-right next"></span>
    
    </div>
   
    
    
    
    
    </body>






</html>