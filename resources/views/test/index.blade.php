<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>to do list</title>
</head>
<body>
    <h1>TO DO LIST</h1>
    <?php
        if(session('success')) {
            ?>
        <div>
            <p>{{session('success')}}</p>
        </div>
        <?php
        }
    ?>
    <div>
        <a href="{{route('tdl.create')}}">Create a new task</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Status</th>
                <th>Create at</th>
                <th>Edit</th>
                <th>Finished</th>
                <th>Delete</th>
            </tr>
            <?php
                foreach($tdl as $to) {
                    ?>
                <tr>
                    <td>{{$to->id}}</td>
                    <td>{{$to->name}}</td>
                    <td>{{$to->descr}}</td>
                    <td>
                        <?php
                        if($to['status'] === 0) {
                            echo 'not finished';
                        } else {
                            echo 'finished';
                        }
                    ?>
                    </td>
                    <td>{{$to->updated_at}}</td>
                    <td>
                        <?php
                        if($to['status'] === 0) {
                            ?>
                        <a href="{{route('tdl.edit',['todo' => $to])}}">Edit</a>
                        <?php
                        } else {
                            ?>
                        <p>Cannot be edit</p>
                        <?php
                        }
                    ?>
                    </td>
                    <td>
                        <?php
                        if($to['status'] === 0) {
                            ?>
                        <a href="{{route('tdl.finish', ['todo' => $to])}}">finished</a>
                        <?php
                        } else {
                            ?>
                        <p>finished</p>
                        <?php
                        }
                    ?>
                    </td>
                    <td>
                        <form method="post" action="{{route('tdl.destroy', ['todo'=>$to])}}">
                            @csrf
                            @method('delete')
                            <div>
                                <input type="submit" value="Delete">
                            </div>
                        </form>
                    </td>
                </tr>
                    <?php
                }
    ?>
        </table>
    </div>
</body>
</html>