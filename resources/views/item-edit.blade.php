<form action="{{route('items-edited', ['id' => $items->id])}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label for="name">
        <div><p>Назва товару</p><input type="text" name="name" id="name" value="{{$items->name}}"></div>
    </label>
    @error('name')
        <p class="error-message">{{ $message }}</p>
        @enderror
    <label for="description">
        <div><p>Опис</p><input type="text" name="description" id="description" value="{{$items->description}}"></div>
        
    </label>
    @error('description')
        <p class="error-message">{{ $message }}</p>
        @enderror
        <label for="size">
        <div><p>Габарити</p><input type="text" name="size" id="size" value="{{$items->size}}"></div>
    </label>
    @error('size')
        <p class="error-message">{{ $message }}</p>
        @enderror
        <label for="materials">
        <div><p>Матеріали</p><input type="text" name="materials" id="materials" value="{{$items->materials}}"></div>
    </label>
    @error('materials')
        <p class="error-message">{{ $message }}</p>
        @enderror
        <label for="Features">
        <div><p>Особливості</p><input type="text" name="Features" id="Features" value="{{$items->Features}}"></div>
    </label>
    @error('Features')
        <p class="error-message">{{ $message }}</p>
        @enderror
        <label for="delivery">
        <div><p>Доставка</p><input type="text" name="delivery" id="delivery" value="{{$items->deliver}}"></div>
    </label>
    @error('Features')
        <p class="error-message">{{ $message }}</p>
        @enderror
    <label for="price">
        <div><p>Ціна</p><input type="number" name="price" id="price"  value="{{$items->price}}"></div>
    </label>
    @error('price')
        <p class="error-message">{{ $message }}</p>
        @enderror
        
    <label for="image1">
        <div><p>Зображення</p><input type="file" name="image1" id="image1" value="{{$items->image}}" accept="image/*"></div>
        <img src="{{asset("storage/img/items/$items->image")}}" alt="" width="300px" height="600px">
        @error('image1')
        <p class="error-message">{{ $message }}</p>
        @enderror
    </label>
   <!--  <label for="image2">
        <div><p>Зображення</p><input type="file" name="image2" id="image2" {{ old('image2') }}></div>
        @error('image2')
        <p class="error-message">{{ $message }}</p>
        @enderror
    </label>
    <label for="image3">
        <div><p>Зображення</p><input type="file" name="image3" id="image3" {{ old('image3') }}></div>
        @error('image3')
        <p class="error-message">{{ $message }}</p>
        @enderror
    </label> -->
    <label for="count">
        <div><p>Кількість</p><input type="number" name="count" id="count" value="{{$items->count}}"></div>
    </label>
    @error('count')
        <p class="error-message">{{ $message }}</p>
        @enderror
        <label for="category">
        <p>Категорія</p>
            <select name="category" id="category">
                <option value="project">Проект</option>
                <option value="stuff">Обладнення</option>

                <option value="comercial">Комерційні рішення</option>
            </select>
        </label>
        <br>
    <div>
        <button type="submit">Змінити</button>
    </div>
</form>

<form action="{{route('item-destroy', ['id' => $items->id])}}" method="post">

@csrf
@method('delete')



<button type="submit" class="item-edit" id="item-delete">{{__('Видалити')}}</button>

</form>