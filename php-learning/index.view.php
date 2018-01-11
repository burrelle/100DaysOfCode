<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Document</title>
</head>
<body>
  <h1>Task for the day</h1>
  <ul>
      <li>
        <strong>Name: </strong><?= $task['title'] ?>
      </li>
      <li>
        <strong>Due Date: </strong><?= $task['due'] ?>
      </li>
      <li>
        <strong>Person Responsible: </strong><?= $task['assign_to'] ?>
      </li>
      <li>
        <strong>Status: </strong>
        <?php if($task['completed']) : ?>
            <span>&#9989;</span>
        <?php else: ?>
            <span>Incomplete</span>          
        <?php endif; ?>
      </li>
  </ul>
</body>
</html>
