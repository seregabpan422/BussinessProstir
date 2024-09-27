@php
use Illuminate\Support\Facades\Auth;
@endphp
<head>
<!-- <script src="https://cdn.tailwindcss.com"></script> -->
</head>
<style>
 .pagination{
    display:flex;
    justify-content: space-between;
    width:30%;
    margin-left:40%;
    font-weight: bold;
 }   
 .page-link {
    width:50px;
    height:20px;
    padding-top:15px;
    padding-bottom: 15px;
    box-shadow: 0px 0px 2px black;
    border-radius: 50%;
    text-align: center;
 }
 .page-item-active{
    width:50px;
    height:50px;
    border-radius: 50%;
    box-shadow: 2px 0px 3px black;
 }
 .page-item-disabled {
    display:none;
 }
</style>
@extends('layout.catalog')

@section('result-element')

@forelse($items as $item)

<div class="result-element">
                        <div class="result-img"><img src="{{ asset("storage/img/items/$item->image") }}" alt="Опис зображення" width="100%" height="100%"></div>
                        <div class="result-title">{{$item->name}}</div>
                        <div class="result-desc">{{$item->description}}</div>
                        <div class="result-price">{{$item->price}}</div>

                        <div class="result-btn"><a href="{{ route('item-page', ['id' => $item->id])}}">Замовити</a></div>
                    </div>
@empty 

@endforelse

@endsection
   
@section('navigation')
    <div class="nav">


{{ $items->links('vendor.custom') }}


<br><br><br>
 </div>
 @endsection

@section('filters')

<div class="filters-content">
                        <form action="{{route('catalog.page')}}" method="GET">
                        <div class="filters-search"><input type="text" class="search" placeholder="Введіть назву" id="search" name="search"></div>
                        <div class="filters-btns">
                            <div class="input-el"><input type="checkbox" class="check" name="project" id="project" value="project"><label for="comercial"><p class="input-text"></p>Комерційні рішення</p></label></div>
                            <div class="input-el"><input type="checkbox" class="check" name="arch" id="arch" value="arch"><label for="arch"><p class="input-text"></p>Архітектурні рішення</p></label></div>
                            <div class="input-el"><input type="checkbox" class="check" name="stuff" id="stuff" value="stuff"><label for="stuff"><p class="input-text"></p>Торгове обладнання</p></label></div>
                           <!--  <div class="filter-title">Площа</div>
                            <div class="input-el"><input type="checkbox" class="check" id="myCheckbox5"><label for="myCheckbox5"><p class="input-text"></p>менше 100кв </p></label> </div>
                            <div class="input-el"><input type="checkbox" class="check" id="myCheckbox6"><label for="myCheckbox6"><p class="input-text"></p>більше 100кв</p></label></div>
                            <div class="input-el"><input type="checkbox" class="check" id="myCheckbox7"><label for="myCheckbox7"><p class="input-text"></p>більше 120кв</p></label></div> -->
                            <br><br><br><br><br><br><br>
                        </div>
                        <button type="submit" class="filter-button">Застосувати</button>
                        <button  class="filter-button"> <a href="{{route('catalog.page')}}">Очистити</a></button>
                    </div>
                  
                        </form>



@endsection

@section('create')
@if(Auth::check() && Auth::user()->status == 'admin')
    <div class="button-create">
        <div class="header-create">
            <p class="header-create-text">
                <a href="{{ route('create-page') }}">+</a>
            </p>
        </div>
    </div>
@elseif(Auth::check())
    <!-- Handle authenticated users who are not admins -->
@else



@endif

@endsection