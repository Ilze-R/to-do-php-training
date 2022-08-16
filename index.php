<?php
$todos = [];

if(file_exists('todo.json')){
    $json = file_get_contents('todo.json');
   $todos = json_decode($json, true);
}



var_dump($_POST);

    ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
  </head>
  <body>

    <div class="container">
      <div class="top-wrapper">
        <div class="top-add">
          <h1>To Do List</h1>
          <button type="submit" class="add-btn">Add New</button>
        </div>
        <form onsubmit="thisClicked.bind(this)(event)" type="submit"  method="post" class="form-one" action="api.php">
          <div class="input hide">
            <input  name="todo_name" class="inp" type="text" placeholder="Add To Do .. " />
          </div>
        </form>
        <div class="result">
          <!--added with JS-->
          <!--
            <div class="todo-list-wrapper">
            <ul class="todo-list">
            <li class="item" tada-key="">
                <input type="checkbox" class="checkbox" null>
                <p contenteditable="true" name="todoInput"></p>
                <button class="delete">x</button>
            </li>
            </ul>
          </div>
        </div>
        -->
<?php foreach($todos as $todoName => $todo): ?>
  <form onsubmit="thisClicked.bind(this)(event)" action="" method="post">
  <input name="checked_value"  type="checkbox" class="checkbox" <?php echo $todo['completed'] ? 'checked' : '' ?>>
  <p name="todo_input" contentEditable="true"><?php echo $todoName ?></p>
  
  <button name="delete_status" class="delete">x</button>
  </form>

<?php endforeach; ?>

          </div>
        </div>
      </div>
    </div>
   <script>
   $todos = "<?php echo $_POST['main_input']; ?>"
   </script>
    <script src="script.js"></script>
  </body>
</html>
