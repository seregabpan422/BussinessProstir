<?php

namespace App\Http\Controllers;
use App\Models\Items;
use App\Models\orders_items;
use Illuminate\Http\Request;
use App\Models\orders;


class ItemsController extends Controller
{
  
    public function update(Request $request, $id) {
        $item = Items::findOrFail($id);
    
        // Validation
        $data = $request->validate([
            'name' => 'nullable|min:5|max:255',
            'description' => 'nullable|max:255',
            'size' => 'nullable|max:32',
            'materials' => 'nullable|max:255',
            'Features' => 'nullable|max:255',
            'delivery' => 'nullable|max:255',
            'price' => 'nullable|numeric',
            'count' => 'nullable|numeric|min:0',
            'category' => 'nullable',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'nullable|image|max:2048',
            'image3' => 'nullable|image|max:2048',
        ]);
    
        // Update item data
        $item->fill($data);
    
        // Handle image uploads
        if ($request->hasFile('image1')) {
            $image = $request->file('image1');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $storagePath = 'public/img/items';
            $image->storeAs($storagePath, $fileName);
            $item->image = $fileName;
        }
    
        // Handle other image uploads (image2, image3) if needed
    
        $item->save();
    
        return redirect()->route('item-list')->with('success', 'Елемент успішно оновлено.');
    }
    
    public function ItemEditPage($id){
        return view('item-edit', ['items'=> Items::find($id)]);
    }

    public function create(Request $request){
        $data = $request->validate([ // задаємо змінну $data, що буде містити в собі масив з даних та перевіряємо ці данні
            'name' => 'required|min:5|max:255', // ім'я обов,язкове тому вписуємо required. Мінімальна кількість знаків 5, а максимальна 255
            'description' => 'required|max:255', // запитуємо опис та задаємо лише максимальне значення, що надає нам можилвість написати опис для формальності
            'size' => 'required|max:32', // запитуємо опис та задаємо лише максимальне значення, що надає нам можилвість написати опис для формальності
            'materials' => 'required|max:255', // запитуємо опис та задаємо лише максимальне значення, що надає нам можилвість написати опис для формальності
            'Features' => 'nullable|max:255', // запитуємо опис та задаємо лише максимальне значення, що надає нам можилвість написати опис для формальності
            'delivery' => 'required|max:255', // запитуємо опис та задаємо лише максимальне значення, що надає нам можилвість написати опис для формальності
            'price' => 'nullable|numeric|', // тут ми задаємо значення для price необов'язковим, так як згідно вимог проекту - ціна буде не у всіх товарів
            'count' => 'required|numeric|min:0', // задаємо значення кількості нашого товару подаючи дані в цифрах
            'image1' => 'required|max:2048', // Також задаємо значення image як те, що вимагає введення та обмежуємо його у 2 МБ.
            'image2' => 'nullable|max:2048', // Також задаємо значення image як те, що вимагає введення та обмежуємо його у 2 МБ.
            'image3' => 'nullable|max:2048', // Також задаємо значення image як те, що вимагає введення та обмежуємо його у 2 МБ.
            'category' => 'required' // Категорія має випадаючий список, тому ніяких обмежень крім введення ми не накладаємо
        ]);
        $fileName = null;
        // Обробка завантаження зображення
        if ($request->hasFile('image1')) { // перевіряємо наявність зображення у формі
            $image = $request->file('image1'); // для змінної $image задаємо значення файлу
        
            $fileName = time() . '_' . $request->name; // задаємо змінну $fileName та вводимо які параметри необхідні для того аби генерувати назву зображення 
            $storagePath = 'public/img/items'; // створюємо шлях для збереження нашого зображення
            $image->storeAs($storagePath, $fileName); // зберігаємо наше зображення у відповідній папці з необхідним ім'ям.
     
        }
      
        $item = new Items();  // Вносимо новий запис елемента у таблицю
        $item->name = $data['name']; // задаємо для колонки name значення з форми з id name
        $item->description = $data['description']; // задаємо для колонки description значення з форми з id description
        $item->size = $data['size']; // задаємо для колонки description значення з форми з id description
        $item->materials = $data['materials']; // задаємо для колонки description значення з форми з id description
        $item->Features = $data['Features']; // задаємо для колонки description значення з форми з id description
        $item->deliver = $data['delivery']; // задаємо для колонки description значення з форми з id description
        $item->price = $data['price']; // задаємо для колонки price значення з форми з id price
        $item->count = $data['count']; // задаємо для колонки price значення з форми з id count
       $item->image = $fileName; // задаємо для колонки image значення $fileName по якому потім викликаються зображення
       $item->category = $data['category']; // задаємо для колонки category значення з форми з id category
        $item->save(); // зберігаємо зміни в бд
    
        // Повернення до перегляду елементу або іншої сторінки
        return redirect()->route('item-list', $item->id)
                         ->with('success', 'Елемент успішно створено.'); // виводимо текст у разі успіху
    }


    public function destroy($id)
    {
        $item = Items::findOrFail($id); // Знаходимо елемент за його ідентифікатором
        $item->delete(); // Видаляємо знайдений елемент з бази даних
    
        return redirect()->route('item-list')->with('success', 'Видалено успішно'); // Повертаємо користувача на сторінку каталогу з повідомленням про успішне видалення
    }

    public function showItem($id){
        return view('item-page', ['items' => Items::find($id)]);
    }

     public function filter(Request $request){
        $user = $request->user();
    $query = Items::query();

    // Apply search filter if provided

    // Define an array of filterable columns
    $filterable = ['project', 'arch', 'stuff'];

    // Loop through filterable columns and apply filters dynamically
    foreach ($filterable as $filter) {
        if ($request->filled($filter)) {
            $query->Orwhere('category', $filter);
        }
    }
/*     if ($request->filled('search')) {
        if($query->count() < 1) {
            $query->latest()->paginate(9);
        } elseif($query->count() > 0) {
        $query->where('name', $request->search);
        }
    } */

    // Fetch the filtered products with pagination
    $items = $query->latest()->paginate(6);

    return view('catalog', compact('items'));
    
/*     public function store($id){
        $item = Items::findOrFail($id);



        foreach ($item as $key => $value) {

            $key->name = $value->name;
            $key->description = $value->description;
            $key->price = $value->price;

        }


    }
 */
     }
}
