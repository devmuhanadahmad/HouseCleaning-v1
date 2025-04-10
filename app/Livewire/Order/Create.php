<?php
namespace App\Livewire\Order;

use App\Models\Category;
use App\Models\Order;
use App\Models\OrderImage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
// لتفعيل رفع الملفات باستخدام Livewire

class Create extends Component
{

    use WithFileUploads; // لتفعيل رفع الملفات باستخدام Livewire
    public $message=true;
    public $categories;
    public $name;
    public $email;
    public $address;
    public $phone;
    public $deadline;
    public $number_of_working_hours;
    public $number_of_workers_working;
    public $notes;
    public $status;
    public $category_id;
    public $images = []; // لرفع الصور
    protected $messages = [
        'images.max' => 'You can only upload a maximum of 3 images.',
        'images.*.image' => 'Each file must be an image.',
        'images.*.max' => 'Each image must be less than 20MB.',
    ];

  // Validation rules
  protected $rules = [
    'name'                      => 'required|string',
    'email'                     => 'required|email',
    'address'                   => 'required|string',
    'phone'                     => 'required|string',
    'deadline'                  => 'required|date',
    'category_id'               => 'required',
    'notes'                     => 'nullable|string',
    'number_of_working_hours'   => 'nullable',
    'number_of_workers_working' => 'nullable',
    'images.*'                  => 'image|max:20240', // تحديد حد حجم الصورة 10 ميجابايت
];

public function mount(){
    $this->categories = Category::get();
  }

// Real-time validation on property update
public function updated($propertyName)
{
    $this->validateOnly($propertyName); // Validate only the updated property
}



public function store()
{
    $this->validate(); // Validate all fields

    // Start a DB transaction
    DB::beginTransaction();

    try {
        // Find the category
        $category = Category::findOrFail($this->category_id);

        // Create the order
        if ($category->name == 'business') {
            $order = Order::create([
                'name'        => $this->name,
                'email'       => $this->email,
                'address'     => $this->address,
                'phone'       => $this->phone,
                'deadline'    => $this->deadline,
                'notes'       => $this->notes,
                'status'      => 'pending',
                'category_id' => $this->category_id,
            ]);
        } else {
            $order = Order::create([
                'name'                      => $this->name,
                'email'                     => $this->email,
                'address'                   => $this->address,
                'phone'                     => $this->phone,
                'deadline'                  => $this->deadline,
                'number_of_working_hours'   => $this->number_of_working_hours,
                'number_of_workers_working' => $this->number_of_workers_working,
                'notes'                     => $this->notes,
                'status'                    => 'pending',
                'category_id'               => $this->category_id,
            ]);
        }

        // If images are uploaded, store them
        if ($this->images) {
            // Ensure no more than 3 images
            if (count($this->images) > 3) {
                session()->flash('error', 'You can only upload a maximum of 3 images.');
                return; // Stop further execution if more than 3 images
            }

            // Store images in the database
            foreach ($this->images as $image) {
                $imagePath = $image->store('orderImages', 'public');
                OrderImage::create([
                    'order_id' => $order->id, // Link image to the order
                    'path' => $imagePath,
                ]);
            }
        }

        // Commit the transaction after all operations are successful
        DB::commit();

        // Flash success message and reset the form
        session()->flash('success', 'Order successfully created.');
        $this->resetForm();

    } catch (\Exception $e) {
        // Rollback the transaction if any exception occurs
        DB::rollBack();

        // Log the error or return an error message
        session()->flash('error', 'An error occurred while processing your request. Please try again.');

    }
}

protected function resetForm()
{
    // Reset form fields after successful submission
    $this->name = "";
    $this->email = "";
    $this->phone = "";
    $this->address = "";
    $this->deadline = "";
    $this->number_of_working_hours = "";
    $this->number_of_workers_working = "";
    $this->notes = "";
    $this->category_id = "";
    $this->reset('images'); // Reset the images property
}

    public function render()
    {
        return view('livewire.order.create', [
            'categories' => Category::get(),
        ]);
    }

}
