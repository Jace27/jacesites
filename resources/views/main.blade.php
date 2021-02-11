@extends('layouts.page')

@section('title')
Главная страница@endsection

@section('content')
    <?php
    $events = \App\Models\js_title_events::all()->sortByDesc('id');
    $i = 0;
    foreach ($events as $event){
        if ($i < 20){
            echo "<p><b><a href=\"".$event->page()->get()[0]->link."\">".$event->page()->get()[0]->name."</a>: $event->title </b>$event->description</p>";
            $i++;
        }
    }
    ?>
@endsection
