<?php  

// 1 PASSSAGGIO (recupero il file json)
$string = file_get_contents('todo-list.json');

// 2 PASSAGGIO (decodifico il file json)
$todo_list = json_decode($string, true);

// 3 PASSAGGIO LOGICA (nella logica devo aggiungere un elemento nell'array e lo pusho dentro dato che è decodificato)
if(isset($_POST['todoItem'])){
    $todo_item = $_POST['todoItem'];
    
    $todo_array = [
        "text" => $todo_item,
        "done" => false,
    ];

    $todo_list[] = $todo_array;

    file_put_contents('todo-list.json', json_encode($todo_list));
}

// 4 PASSAGGIO (lo ricodifico percè ci ho aggiunto un elemento nell'array)
header('Content-Type: application/json');
echo json_encode($todo_list);

?>