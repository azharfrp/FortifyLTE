<?php

namespace App\Http\Livewire\Example;

// First let's load Livewire trait
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

// Let's load an alert
use Jantinnerezo\LivewireAlert\LivewireAlert;

// Now we need a Laravel Facades
use Illuminate\Support\Facades\Storage;

// I usualy place 'Model' here
use App\Models\CRUDExampleTryModel;
use App\Models\CRUDExampleBaseModel;

class CRUDLivewire extends Component{
    // Load addon trait
    use WithPagination, WithFileUploads, LivewireAlert;

    // Bootsrap pagination
    protected $paginationTheme = 'bootstrap';

    // Public variable
    public $isOpen = 0;
    public $paginatedPerPages = 1;
    public $post_id, $searchTerm, $crud_example_base_id, $crud_example_try_photo, $crud_example_try_string, $crud_example_try_textarea, $crud_example_try_number;

    // View
    public function render(){
        $searchData = $this->searchTerm;
        return view('livewire.example.crud-livewire', [
            
            // Lists
            'lists' => CRUDExampleTryModel::whereHas('tryBelongsTo', function ($searchQuery) use ($searchData){
                $searchQuery->where([
                    ['crud_example_try_string', 'like', '%' . $searchData . '%']
                ])->orWhere([
                    ['crud_example_try_textarea', 'like', '%' . $searchData . '%'],
                ])->orWhere([
                    ['crud_example_base_name', 'like', '%' . $searchData . '%'],
                ]);
            })->paginate($this->paginatedPerPages),

            // Base
            'bases' => CRUDExampleBaseModel::get(),

        ])->extends('layouts.app');
    }

    // Reset input fields
    private function resetInputFields(){
        $this->reset([
            'post_id', 'crud_example_base_id', 'crud_example_try_photo', 'crud_example_try_string', 'crud_example_try_textarea', 'crud_example_try_number',
        ]);
    }

    // Open input form
    public function openModal(){
        $this->isOpen = true;
    }

    // Close input form
    public function closeModal(){
        $this->isOpen = false;
    }

    // Open input form and then reset input fields
    public function create(){
        $this->openModal();
        $this->resetInputFields();
    }

    // Save data
    public function store(){
        // Send a custom message if something is error
        $messages = [
            '*.required'                => 'This column is required',
            '*.numeric'                 => 'This column is required to be filled in with number',
            '*.string'                  => 'This column is required to be filled in with letters',
        ];

        // Validate input with custom message
        $this->validate([
            'crud_example_base_id'      => ['required'],
            'crud_example_try_photo'    => ['required'],
            'crud_example_try_string'   => ['required', 'string'],
            'crud_example_try_textarea' => ['required'],
            'crud_example_try_number'   => ['required', 'numeric'],
        ], $messages); // Delete this '$messages' variable if you don't want to use the custom message validator

        // Photo Name with Regex - Replace anything weird with underscore
        $photo_name = time().'_'.strtolower(preg_replace('/\s+/', '_', $this->crud_example_try_photo->getClientOriginalName()));

        // Upload Photo if this is a 'Create'
        if($this->post_id == false){
            $this->crud_example_try_photo->storeAs('public/asset/image', $photo_name);
        }

        // Delete Existing Photo and then Upload the New One if this is an 'Update'
        elseif($this->post_id == true){
            // Find existing photo
            $sql = CRUDExampleTryModel::select('crud_example_try_id', 'crud_example_try_photo')->where('crud_example_try_id', $this->post_id)->firstOrFail();
            
            // Then delete it
            File::delete('storage/asset/image/' . $sql->crud_example_try_photo);
            
            // And upload the new one
            $this->crud_example_try_photo->storeAs('public/asset/image', $photo_name);
        }

        // Insert or Update if Ok
        CRUDExampleTryModel::updateOrCreate(['crud_example_try_id' => $this->post_id], [
            'crud_example_base_id'      => $this->crud_example_base_id,
            'crud_example_try_photo'    => $photo_name,
            'crud_example_try_string'   => $this->crud_example_try_string,
            'crud_example_try_textarea' => $this->crud_example_try_textarea,
            'crud_example_try_number'   => $this->crud_example_try_number,
        ]);

        // Show an alert
        $this->alert('success', $this->post_id ? 'Edited, mate!' : 'Cool, submited!');

        // Close input form, we're going back to the list
        $this->closeModal();

        // Reset input fields for next input
        $this->resetInputFields();
    }

    // Parse data to input form
    public function edit($id){
        // Find data from the $id
        $post = CRUDExampleTryModel::findOrFail($id);

        // Parse data from the $post variable
        $this->post_id = $id;
        $this->crud_example_base_id = $post->crud_example_base_id;
        $this->crud_example_try_string = $post->crud_example_try_string;
        $this->crud_example_try_textarea = $post->crud_example_try_textarea;
        $this->crud_example_try_number = $post->crud_example_try_number;

        // Then input fields and show data
        $this->openModal();
    }

    // Delete data
    public function delete($id){
        // Find existing photo
        $sql = CRUDExampleTryModel::select('crud_example_try_id', 'crud_example_try_photo')->where('crud_example_try_id', $id)->firstOrFail();

        // Delete Data from DB
        $sql->find($id)->delete();

        // Then delete it
        Storage::delete('public/asset/image/' . $sql->crud_example_try_photo);

        // Show an alert
        $this->alert('warning', 'Alright, deleted!');
    }
}
