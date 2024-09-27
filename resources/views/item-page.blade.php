@extends('layout.item')

@section('item-info')

@if($items)
@php
    
    $text = $items->materials;
    $delivertext = $items->deliver;

    $deliver = preg_split('/[;\.]/', $delivertext);
    $materials = preg_split('/[;\.]/', $text);
    



@endphp
<img src="{{ asset("storage/img/items/$items->image") }}" alt="Опис зображення" class="item-img">
@endif

<form action="{{route('create-order', ['id' => $items->id])}}" method="POST">
@csrf
<label for="count" class="count-items">
<a id="minus" class="count-btn">-</a>
    <input type="number" id="count" name="count" value="1" class="item-count" readonly> 

<a id="plus" class="count-btn">+</a>
</label>

<p id="price" style="display:none;"> {{$items->price}}</p>
<label for="summary" class="sum-count">
<input type="numeric" readonly id="summary" name="summary" value="{{$items->price}}" class="summary">
</label>
@error('summary')
{{$message}}
@enderror
<button type="submit" id="order">{{__('Замовити')}}</button>



</form>

@endsection
@section('item-desc')
<div class="item-desc">
<div class="item-price">
Ціна: {{$items->price}}</div>
<div class="item-name">{{$items->name}}</div>
<div class="item-des">{{$items->description}}</div>
<div class="item-materials">
    Матеріали:
    @foreach($materials as $material)
    <p> - {{ trim($material)}}</p>
    @endforeach
</div>
<div class="item-deliver">
Доставка
    @foreach($deliver as $delivers)
    <p> - {{ trim($delivers)}}</p>
    @endforeach
</div>
</div>
@endsection