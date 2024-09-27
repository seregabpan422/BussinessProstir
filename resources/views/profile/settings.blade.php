@extends('profile.partials.settings')



@section('edit')
<div class="settings-list">
<form action="{{route('profile-edit', ['id' => Auth()->user()->id])}}" method="post" class="settings-form">
    @csrf
    @method('put')

    <label for="name">
        <input type="text" name="name" value="{{Auth()->user()->name}}" class="input-set">
    </label>
    <label for="email">
        <input type="email" name="email" value="{{Auth()->user()->email}}" class="input-set">
    </label>
    <label for="phone">
        <input type="text" name="phone" value="{{Auth()->user()->phone}}" class="input-set">
    </label>
    <label for="oldpassword">
        <input type="password" name="oldpassword" placeholder="Введіть старий пароль" class="input-set">
    </label>
    <label for="newpassword">
        <input type="password" name="newpassword" placeholder="Введіть новий пароль" class="input-set">
    </label>
    <br>
    <button type="submit" class="order-btn">Зберегти</button>
</form>

</div>
@endsection