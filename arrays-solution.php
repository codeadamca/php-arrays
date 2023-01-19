<!doctype html>
<html>
<head>
    <title>Links and Arrays</title>
</head>
<body>
    
    <h1>Links and Arrays</h1>
    
    <p>Use PHP echo and arrays to output the following link information:</p>
        
    <hr>
    
    <?php
    
    $link['name'] = 'Codecademy';
    $link['url'] = 'https://www.codecademy.com/';
    $link['image'] = 'https://static-assets.codecademy.com/Courses/Learn-Redux/matching-game/codecademy_logo.png';
    $link['description'] = 'Learn to code interactively, for free.';
    
    echo '<h1>'.$link['name'].'</h1>';
    echo '<a href="'.$link['url'].'">'.$link['url'].'</a>';
    echo '<img src="'.$link['image'].'">';
    echo '<p>'.$link['description'].'</p>';

    ?>
        
</body>
</html>
