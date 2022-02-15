
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">


    <title>Slideshow</title>
</head>
<style>
    body {font-family:Arial, Helvetica, sans-serif; font-size:12px;}
     
    .fadein { 
    position:relative; height:100%; width:100%; margin:0 auto;
    
    
     }
    .fadein img{
    	position:absolute;
    
        object-fit: scale-down;
    }
</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>
    $(function(){
        $('.fadein img:gt(0)').hide();
        setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 3000);
});
</script>

<body>
        <div class="fadein">
    <?php 
    // display images from directory
    // directory path
    $dir = "slide/image/";
     
    $scan_dir = scandir($dir);
    foreach($scan_dir as $img):
        if(in_array($img,array('.','..')))
        continue;
    ?>
    <img src="<?php echo $dir.$img ?>" alt="<?php echo $img ?>">
    <?php endforeach; ?>
    </div>

</body>
</html>