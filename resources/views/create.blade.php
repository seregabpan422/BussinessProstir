

<form method="POST" action="{{route('create-items')}}" enctype="multipart/form-data">
    @csrf

    <label for="name">
        <div><p>Назва товару</p><input type="text" name="name" id="name" value="{{ old('name') }}"></div>
    </label>
    @error('name')
        <p class="error-message">{{ $message }}</p>
        @enderror
    <label for="description">
        <div><p>Опис</p><input type="text" name="description" id="description" {{ old('description') }}></div>
        
    </label>
    @error('description')
        <p class="error-message">{{ $message }}</p>
        @enderror
        <label for="size">
        <div><p>Габарити</p><input type="text" name="size" id="size" value="{{ old('size') }}"></div>
    </label>
    @error('size')
        <p class="error-message">{{ $message }}</p>
        @enderror
        <label for="materials">
        <div><p>Матеріали</p><input type="text" name="materials" id="materials" value="{{ old('materials') }}"></div>
    </label>
    @error('materials')
        <p class="error-message">{{ $message }}</p>
        @enderror
        <label for="Features">
        <div><p>Особливості</p><input type="text" name="Features" id="Features" value="{{ old('Features') }}"></div>
    </label>
    @error('Features')
        <p class="error-message">{{ $message }}</p>
        @enderror
        <label for="delivery">
        <div><p>Доставка</p><input type="text" name="delivery" id="delivery" value="{{ old('delivery') }}"></div>
    </label>
    @error('Features')
        <p class="error-message">{{ $message }}</p>
        @enderror
    <label for="price">
        <div><p>Ціна</p><input type="number" name="price" id="price" {{ old('price') }}></div>
    </label>
    @error('price')
        <p class="error-message">{{ $message }}</p>
        @enderror
        
    <label for="image1">
        <div><p>Зображення</p><input type="file" name="image1" id="image1" {{ old('image1') }}></div>
        @error('image1')
        <p class="error-message">{{ $message }}</p>
        @enderror
    </label>
    <label for="image2">
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
    </label>
    <label for="count">
        <div><p>Кількість</p><input type="number" name="count" id="count" {{ old('count') }}></div>
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
        <button type="submit">Створити</button>
    </div>
</form>

