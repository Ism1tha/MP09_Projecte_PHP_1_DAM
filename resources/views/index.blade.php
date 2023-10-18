<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo greeting(); ?>

    <table>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Completed</th>
        </tr>
        <?php foreach ($tasks as $task): ?>
        <tr>
            <td><?=$task->id;?></td>
            <td><?=$task->title;?></td>
            <td><?=$task->description;?></td>
            <th><?=$task->completed;?></th>
        </tr>
        <?php endforeach; ?>
    </table>
    
</body>
</html>