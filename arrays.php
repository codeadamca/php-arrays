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
    $link['image'] = 'https://production.cdmycdn.com/webpack/44e01805165bfde4e6e4322c540abf81.svg';
    $link['description'] = 'Learn to code interactively, for free.';
    
    echo '<h1>'.$link['name'].'</h1>';

    ?>
        
</body>
</html>
