@extends('layout.order')
@section('orders')

@if($orders)
    @forelse($orders->orders_items as $orderItem)
        <div class="order-item">
        <p class="order-text">{{$orders->order_number}}</p>
            <p class="order-text">{{$orderItem->items->name}}</p>
            <p class="order-text">{{$orderItem->count}}</p>
            <p class="order-text">{{$orderItem->items->category}}</p>
            <p class="order-text" id="price">{{$orderItem->price}}</p>

            @if($orders->status == 'waiting')
            <form action="{{route('order-delete', ['id' => $orderItem->id])}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="order-x">{{__('×')}}</button>
            </form>
            
            @else
            @endif
        </div>
    @empty
        <p>No items found</p>
    @endforelse
@endif

@if($orders->status == "waiting")
<div class="order-btns">
<form action="{{ route('confirm-order', ['id' => $orders->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <button type="submit" class="order-btn">{{__('Підтвердити')}}</button>
    <input type="numeric" readonly id="totalSum" value="" name="totalSum" class="input-sum">
    @error('totalSum')
    {{$message}}
    @enderror
</form>
<form action="{{route('orders-delete', ['id' => $orders->id])}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="order-btn">{{__('Відмовитись')}}</button>
            </form>
            </div>
@else
<div class="order-btns">
<input type="numeric" readonly id="totalSum" value="" name="totalSum" class="input-sum">
<a href="{{route('cab-page')}}" class="order-btn">Назад</a>
</div>
@endif
<script>
    function Total() {
        // Select all elements with the class 'price'
        const priceElements = document.querySelectorAll('#price');
        let TotalSum = 0;

        // Iterate over each price element and calculate the total
        priceElements.forEach(element => {
            const price = parseFloat(element.textContent.trim());
            if (!isNaN(price)) {
                TotalSum += price;
            }
        });

        // Update the totalSum element with the calculated total
        document.getElementById('totalSum').value = TotalSum.toFixed(2);
        console.log('Total Sum:', TotalSum);
    }

    // Call the function to calculate and display the total sum when the page loads
    Total();

    
</script>

@endsection