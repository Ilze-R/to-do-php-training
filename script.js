const btn = document.querySelector(".add-btn");
const input = document.querySelector(".input");
const inp = document.querySelector(".inp");
const form = document.querySelectorAll("form");
const tododisplay = document.querySelector(".tododisplay");
 
//let allTodos = [];
//const todos = [];

btn.addEventListener("click", (e) => {
  e.preventDefault();
  input.classList.remove("hide");
});



function thisClicked(e){
  e.preventDefault();
  const data = new FormData(this);

  if(this.method == "post"){
fetch(this.action, {
    method: "post",
    body: data
  }). then ((response) => {

    console.log(response);


  });
}else{
  fetch(this.action, {
    method: "get",
    body: data,
  }).then((response) => {
    console.log(response)


  });
}
} 
  //addTodo(inp.value);
 



/*function addTodo(item) {
  if (item !== " ") {
    const todo = {
      id: Date.now(),
      name: item,
      completed: false,
    };

    todos.push(todo);
    //array
    console.log(todos);
    //object
    console.log(todo);
    renderTodos(todos, todo);
    input.classList.add("hide");
    inp.value = "";
  }
}

function renderTodos(todos, todo) {
  const result = document.querySelector(".result");
  const div = document.createElement("div");

  div.setAttribute("class", "todo-list-wrapper");
  result.append(div);
  const ul = document.createElement("ul");
  ul.setAttribute("class", "todo-list");
  ul.innerHTML = "";
  div.append(ul);

  //todos.forEach(function (item) {});
  const checked = todo.completed ? "checked" : null;
  const li = document.createElement("li");
  li.setAttribute("class", "item");
  li.setAttribute("data-key", todo.id);
  if (todo.completed === true) {
    li.classList.add("checked");
  }

  var innerhtml = "";

  for (var i = 0; i < todos.length; i++) {
    //innerhtml = todos[i].name;
    //li.innerHTML = innerhtml;
    li.innerHTML = `
    <form action="api.php" method="post">
      <input name="checked_value"  type="checkbox" class="checkbox" ${checked}>
      <p  name="todo_input" contentEditable="true"><?php echo $todoName ?></p>
      
      <button name="delete_status" class="delete">x</button>
      </form>
    `;
    ul.append(li);
  }
}*/


const todoList = document.querySelector(".todo-list");





