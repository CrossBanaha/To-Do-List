<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/style.css')
    </head>
    <body class="index">
        <div class="main-container">
            <h1>ToDo List</h1>
            <div class="container">
                <form action="{{url('/')}}" method="post">
                    @csrf
                    <input type="text" placeholder="Ingresar Tarea" name="task" id="task" autofocus>
                    <button id="add" class="addButton">
                        Agregar
                        <nav></nav>
                        <nav></nav>
                    </button>
                </form>
                <table class="TaskList">
                    @foreach ($task as $task)
                    <tr>
                        <td>{{$task->task}}</td>
                        <td>
                            <form action="{{route('task.destroy', $task->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button id="delete" class="deleteButton">
                                    X
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </body>
</html>