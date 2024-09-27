@extends('profile.partials.profile')

@section('story')
<div class="story-element">
            <div class="story-id">Номер</div>
            <div class="story-title">Замовник</div>
            <div class="story-title">Ціна</div>
            <div class="story-desc">Опис</div>
            <div class="story-date">Дата</div>
        </div>
@forelse($order as $orders)

@if(Auth::check() && Auth::user()->id == $orders->user->id)

        <div class="story-element">
            <div class="story-id">{{ $orders->order_number }}</div>
            <div class="story-title">{{ $orders->user->name }}</div>
            <div class="story-title">
                @if($orders->totalSum == 0)
               <p style="margin-top:0px; margin-left:-24px"> Формується</p>
                @else
                {{$orders->totalSum}}
                @endif
            </div>
            <div class="story-desc"><a href="{{route('order-detail', ['id' => $orders->id])}}">{{ __('Деталі') }}</a></div>
            <div class="story-date">{{ $orders->created_at }}</div>
        </div>
        @endif
@empty

@endforelse


@endsection

@section('admin-panel')
<div class="admin-panel">
@if($admin && $admin->user_id == auth()->user()->id)
    <a href="{{ route('admin-page') }}">Адмін Панель</a>
@elseif($admin && $admin->user_id != auth()->user()->id)
   
@endif
</div>

@endsection