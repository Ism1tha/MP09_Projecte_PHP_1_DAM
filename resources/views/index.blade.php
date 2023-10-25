<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Nav menu -->
    <ul>
        <li><a href="index.php">Tasques</a></li>
        <li><a href="users.html">Users</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="about.html">About</a></li>
    </ul>
    <!-- End Nav menu -->
    <!-- Page content -->
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
    <!-- End Page content -->
</body>
</html>