<?php

namespace App\Livewire\ApplyForJopForm;

use Livewire\Component;
use Livewire\WithFileUploads;
class Create extends Component
{

    use WithFileUploads; // For handling file uploads

     // Form properties
    public $first_name;
    public $last_name;
    public $phone;
    public $email;
    public $notes;
    public $file;
     // Validation rules
    protected $rules = [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'phone' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'notes' => 'nullable|string',
        'file' => 'required|file|mimes:pdf,doc,docx|max:5120', // Adjust the file validation as needed
    ];

    // Real-time validation on property update
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName); // Validate only the updated property
    }


    public function store(){

        $this->validate(); // Validate all fields

         // Process the file upload (if file is present)
         $filePath = $this->file ? $this->file->store('cv_uploads', 'public') : null;

        // Example of creating a record in the database (assuming you have a User model)
        \App\Models\ApplyForJob::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'phone' => $this->phone,
            'email' => $this->email,
            'notes' => $this->notes,
            'file' => $filePath,
        ]);

        session()->flash('success', 'Your request has been sent successfully. You will be contacted via email..');

        // Reset form fields after successful submission
        $this->reset();
    }

    public function render()
    {
        return view('livewire.apply-for-jop-form.create');
    }

}
