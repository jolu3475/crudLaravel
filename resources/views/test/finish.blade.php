<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finished</title>
</head>
<body>
    <h1>Finished the Task</h1>
    <div>
    <?php
        if($errors->any()) {
            ?>
        <ul>
            <?php
                foreach($errors->all() as $error) {
                    ?>
                <li>{{$error}}</li>
            <?php
                }
            ?> 
        </ul>
        <?php
        }
    ?>
    </div>
    <form method="post" action="{{route('tdl.finished', ['todo'=>$todo])}}">
        @csrf
        @method('put')
        <div class="name">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="name" value="{{$todo->name}}" readonly/>
        </div>
        <div class="descr">
            <label for="descr">Name</label>
            <input type="text" name="descr" placeholder="Description" value="{{$todo->descr}}" readonly/>
        </div>
        <div class="btn">
            <input type="submit" value="Ok">
            <button><a href="{{route('tdl.index')}}">Cancel</a></button>
        </div>
    </form>
</body>
</html>