<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">

    <title>Todo List</title>
    <style>
        
        </style>
</head>
<body>
<header>
<div class ="containerlogo">
    <a href="landing" class="logo">
        <img src="images/logo-no-background.png" alt="">
    </a>
</header>
</div>
<div class = "container">
    <div class = "containerbody">
        <h1><em>To-do</em> List</h1>
    
        <hr>
        <form action = "{{ route('store')}}" method="POST" autocomplete="off">
            @csrf
            <input type="text" name="content" class="form-control" placeholder="Add your new todo">
            <button type="submit" class="btn"><i class="fa fa-plus"></i></button>
        </form>
        
        @if (count($todolists))
        <ul>
            @foreach ($todolists as $todolist)
                <li>
                    <form action = "{{ route('destroy', $todolist->id) }}" method="POST">
                        {{ $todolist->content }}
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn"><i class="fa fa-trash"></i></button>
                    </form>
                </li>
            @endforeach   
        </ul>
        @else
        <p>No Tasks!</p>
        @endif
        <hr>
        @if (count($todolists))
            <p>You have {{ count ($todolists)}} pending tasks</p>
    
        @else
    
        @endif   
    </div>
</div>
<footer>
<div>
    <p><a href="#">TASKME</a> Activity. All rights reserved. </p> 
</div>
</footer>
</body>
</html>