<!DOCTYPE html>
<html>
    <head>
        <title>Choose a room</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/tribute.css" />
        <script src="js/imageMapResizer.min.js"></script> 
        <link href="images/home.svg" rel="icon" />
    </head>
    <body>

        <h1 class="centertext"><a href="<?php echo dirname($_SERVER['PHP_SELF']); ?>">Tribute</a></h1>
        
        <h2 class="centertext">Pick a room, choose carefully</h2>

        <img class="center" src="images/map.png" usemap="#image-map" />
        
        <map name="image-map">
            <area alt="Foyer" title="Foyer" href="?room=foyer" coords="178,35,251,77" shape="rect">
            <area alt="Bedroom" title="Bedroom" href="?room=bedroom" coords="304,58,553,230" shape="rect">
            <area alt="Guest Room" title="Guest Room" href="?room=guestroom" coords="41,25,154,144" shape="rect">
            <area alt="Closet" title="Closet" href="?room=closet" coords="36,168,165,203" shape="rect">
            <area alt="Toy Room" title="Toy Room" href="?room=toyroom" coords="32,234,139,369" shape="rect">
            <area alt="Theater" title="Theater" href="?room=theater" coords="566,505,302,297" shape="rect">
            <area alt="Toilet" title="Toilet" href="?room=toilet" coords="20,404,114,430" shape="rect">
            <area alt="Bathroom" title="Bathroom" href="?room=bathroom" coords="38,453,148,593" shape="rect">
            <area alt="Dungeon" title="Dungeon" href="?room=dungeon" coords="287,543,385,611" shape="rect">
            <area alt="Pantry" title="Pantry" href="?room=pantry" coords="416,540,576,574" shape="rect">
            <area alt="Basement" title="Basement" href="?room=basement" coords="39,623,154,665" shape="rect">
            <area alt="Kitchen" title="Kitchen" href="?room=kitchen" coords="414,598,572,655" shape="rect">
            <area alt="Back Yard" title="Back Yard" href="?room=backyard" coords="48,716,376,823" shape="rect">
            <area alt="Shed" title="Shed" href="?room=shed" coords="452,714,570,809" shape="rect">
        </map>
        
        <script language="javasript" type="text/javascript">
            <!--
                // https://github.com/davidjbradshaw/image-map-resizer
                imageMapResize();
            // -->
        </script>
        
        <?php include 'footer.php' ?>;
        
    </body>
</html>
