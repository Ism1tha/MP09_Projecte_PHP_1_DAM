<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $route['title'] ?></title>
</head>
<body>
    layout head
    <?= require $route['view'] ?>
    layout footer
</body>
</html>