@extends('layouts.app')

<form action="">
    @csrf
    <p>Зарегистрироваться</p>
    <input type="password" name="password" minlength="5" required placeholder="<PASSWORD>">
    <input type="email" name="email" required placeholder="Введите email">
    <input type="email" name="email" required placeholder="Введите повторно email">
    <button>Регистрация</button>
</form>