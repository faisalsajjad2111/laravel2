<?php

namespace App\Http\Livewire\Admin;



use Carbon\Carbon;
use Livewire\Component;
use App\Models\Slider;

use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use session;
class AdminEditSlideComponent extends Component
{
    use WithFileUploads;
    public $slide_id;
    public $title;
    public $image;
    public $status;
    public $newimage;

    public function mount($slide_id)
    {
        $slide = Slider::find($slide_id);
        $this->slide_id = $slide->id;
        $this->title = $slide->title;
        $this->image = $slide->slug;
        $this->status = $slide->image;

    }
  
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'title' => 'required',

        ]);
        if($this->newimage)
        {
            $this->validateOnly($fields,[
                'newimage' => 'required|mimes:jpeg,png'
            ]);
        }
    }
    public function updateSlide()
    {
        $this->validate([
            'title' => 'required',

        ]);
        if($this->newimage)
        {
            $this->validate([
                'newimage' => 'required|mimes:jpeg,png'
            ]);
        }
        $slide = Slider::find($this->slide_id);
        $slide->title = $this->title;
        if($this->newimage)
        {
            unlink('images/slider/' .$slide->image);
        
            $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
            $this->newimage->storeAs('slider',$imageName);
            $slide->image = $imageName;
        }
            $slide->status = $this->status;
            $slide->save();
            session()->flash('message','Slide has been created successufly');


       
    }


    public function render()
    {
        return view('livewire.admin.admin-edit-slide-component')->layout('layouts.base');

    }
}
