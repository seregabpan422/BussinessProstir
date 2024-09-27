@extends('layout.admin-page')

@section('style')

<style>
    .admin-info{
        width:80%;
        margin-left:10%;
        text-align: center;
        margin-top:10%;
    }
    .admin-text{
        font-size: 35px;
        font-weight: bold;
        color: rgb(0, 0, 0, 0.4);
        
    }
</style>

@endsection

@section('hello-admin')
<div class="admin-info">
<p class="admin-text">Вітаємо у вашому кабінеті, {{auth()->user()->name}}</pз>
<p class="admin-text">У цьому кабінеті ви можете оновлювати асортимент, зв'язуватися з клієнтами, а також писати пости про ведення проектів</p>
</div>
@endsection


