<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/style.css')
    </head>
    <body class="font-sans m-0 p-0 h-screen grid min-h-screen bg-gradient-to-t from-black to-customPurple">
        <div class="bg-customBlue my-48 mx-auto w-[500px] rounded-[10px]">
            <h1 class="font-sans text-center p-5 m-5 text-white capitalize text-3xl">ToDo List</h1>
            <div class="container">
                <form action="{{route('task.create')}}" method="post">
                    @csrf
                    <input type="text" placeholder="Enter Task"
                    name="task" id="task" autofocus>
                    <input type="text" placeholder="Enter Description"
                    name="description" id="description" autofocus>
                    <button id="add" class="addButton">
                        ADD
                        <nav></nav>
                        <nav></nav>
                    </button>
                </form>
            </div>
            <table class="TaskList">
                    @foreach ($tasks as $task)
                    <tr>
                        <td class="text-white">{{$task->task}}</td>
                        <td class="text-white"><h4>{{$task->description}}</h4></td>
                        <td>
                            <form action="{{route('task.update', $task->id)}}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="box">
                                    <input type="text" name="task">
                                    <button id="edit" class="editButton">
                                        &#10000
                                    </button>
                                </div>
                            </form>
                        </td>
                        <td>
                            <form action="{{route('task.toggleStatus',$task->id)}}" method="post">
                                @csrf
                                @method('PATCH')
                                <button class="checkButton">
                                    {{$task->status ? '&#10004' : '&#10008'}}
                                </button>
                            </form>
                        </td>
                        <td>
                            <form action="{{route('task.destroy', $task->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button id="delete" class="deleteButton">
                                    &#10006
                                </button>
                            </form>
                        </td>
                        <td>Status</td>
                    </tr>
                    @endforeach
                </table>
        </div>
    </body>
</html>