<!DOCTYPE html>
<html>
<head>
    <title>facebook album manager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript">
        $(window).on('scroll',function(){
            if($(window).scrollTop()){
                $('nav').addClass('black');
            }
            else{
                $('nav').removeClass('black');
            }
        })
   
        $(document).ready(function(){
            $("#hide").click(function(){
                    $("video").hide();
            });
            $("#show").click(function(){
                $("video").show();
            }); 
        });
    </script>
    <script>
    .abc:hover
    {
        transform:rotate(360dg);
        transition:transform 4s;
    }
    </script>

</head>
<body>
    <div class="">
        <div>
        <nav>
            <div class="logo">Album Downloder</div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a class="active" href="#">Login</a></li>
            </ul>
        </nav>
        </div>
        <div class="backimg">
        </div>
        <div class="content">
            <p>The result of the query is true if the specified media type matches the type of device the document is being displayed on and all expressions in the media query are true. When a media query is true, the corresponding style sheet or style rules are applied, following the normal cascading rules.

Unless you use the not or only operators, the media type is optional and the all type will be implied.

You can also have different stylesheets for different media:</p>

                        <p>The result of the query is true if the specified media type matches the type of device the document is being displayed on and all expressions in the media query are true. When a media query is true, the corresponding style sheet or style rules are applied, following the normal cascading rules.

Unless you use the not or only operators, the media type is optional and the all type will be implied.

You can also have different stylesheets for different media:</p>
<p>The result of the query is true if the specified media type matches the type of device the document is being displayed on and all expressions in the media query are true. When a media query is true, the corresponding style sheet or style rules are applied, following the normal cascading rules.

Unless you use the not or only operators, the media type is optional and the all type will be implied.

You can also have different stylesheets for different media:</p>
        </div>
        <div>
            <center>   
            <Button class="abc" id="show" >Show Video</Button>
            <Button id="hide" >Hide Video</Button><br>    
            <video class="video_edit" controls>
                <source src="demo css.mp4" type="video/mp4">
                <source src="demo css.ogg" type="video/ogg">
            </video>
            </center><br><br>
        </div>
    </div>
</html>
</body>