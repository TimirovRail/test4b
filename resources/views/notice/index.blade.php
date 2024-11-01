@extends('layouts.app')

@foreach ($notices as $notice)
    <div class="container">
        <div class="card">
            <p>Название: {{$notice->name}}</p>
            <p>Текст: {{$notice->text}}</p>
            <p>Телефон: {{$notice->contact}}</p>
        </div>
    </div>
@endforeach

<form action="" method="post">
    @csrf
    <p>Добавьте свое объявление</p>
    <input type="text" name="name" required placeholder="Введите название">
    <input type="telephone" name="telephone" required placeholder="Введите контактный телефон">
    <textarea name="" id="">Подробнее...</textarea>
    <button>Отправить</button>
</form>

<style>
    .card {
        width: 300px;
        height: 250px;
        margin: 10px;
        border: 1px solid black;
        padding: 5px;
    }
    input{
        width: 200px;
        height: 30px;
        margin: 5px;
        border: 1px solid black;
    }
</style>