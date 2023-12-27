<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <h1>Create a task</h1>
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
    <form method="post" action="{{route('tdl.newTask')}}">
        @csrf
        @method('post')
        <div class="name">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="name"/>
        </div>
        <div class="descr">
            <label for="descr">Name</label>
            <input type="text" name="descr" placeholder="Description"/>
        </div>
        <div class="btn">
            <input type="submit" value="Ok">
            <input type="button" value="Cancel">
        </div>
    </form>
</body>
</html>