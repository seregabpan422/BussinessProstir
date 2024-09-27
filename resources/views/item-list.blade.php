@extends('layout.item-list')


@section('item-show')

@if($items)

@forelse($items as $item)

<div class="result-element">
                        <div class="result-img"><img src="{{ asset("storage/img/items/$item->image") }}" alt="Опис зображення" width="100%" height="100%"></div>
                        <div class="result-text">
                        <div class="result-title">{{$item->name}}</div>
                        <div class="result-desc">{{$item->description}}</div>
                      
                         <div class="result-price">{{$item->price}}</div>
                     

                

                        <div class="result-btn"><a href="{{ route('item-edit', ['id' => $item->id])}}">Редагувати</a></div>
                        
                    </div>

@empty

@endforelse


@endif


@endsection

@section('navigation')
    <div class="nav">


{{ $items->links('vendor.custom') }}


<br><br><br>
 </div>
 @endsection