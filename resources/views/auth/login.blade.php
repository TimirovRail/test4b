@extends('layouts.app')

<form action="">
    @csrf
    <p>Авторизоваться</p>
    <input type="password" name="password" minlength="5" placeholder="<PASSWORD>">
    <input type="email" name="email" placeholder="Введите email">
    <button>Авторизация</button>
</form>