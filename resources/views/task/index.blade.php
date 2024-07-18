<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/style.css')
    </head>
    <body class="font-sans m-0 p-0 h-screen grid min-h-screen bg-gradient-to-t from-customCyan to-customPurple">
        <div class="bg-customBlue my-48 mx-auto w-[500px] rounded-[10px]">
            <h1 class="font-sans text-center p-5 m-5 text-white capitalize text-3xl">ToDo List</h1>
            <div class="container">
                <form action="{{url('/')}}" method="post">
                    @csrf
                    <input type="text" placeholder="Enter Task"
                    name="task" id="task" autofocus>
                    <button id="add" class="addButton">
                        ADD
                        <nav></nav>
                        <nav></nav>
                    </button>
                </form>
            </div>
            <table class="TaskList">
                    @foreach ($task as $task)
                    <tr>
                        <td class="text-white">{{$task->task}}</td>
                        <td>
                            <button class="checkButton">
                                &#10004
                            </button>
                        </td>
                        <td>
                            <form action="{{route('task.update', $task->id)}}" method="post">
                                @csrf
                                @method('PUT')
                                <button id="edit" class="editButton">
                                    &#10000
                                    <input type="text" name="task" value="{{$task->task}}">
                                </button>
                            </form>
                        </td>
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
    </body>
</html>