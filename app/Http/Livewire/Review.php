<?php

namespace App\Http\Livewire;

use Livewire\Component;

Use App\Models\Course;

class Review extends Component
{

    public $course;
    public $content = "hola";

    public function mount(Course $course){
        $this->course = $course;
    }


    public function render()
    {
        return view('livewire.review');
    }


    public function store(){
        $this->course->reviews()->create([
            'comment' => $this->content,
            'rating' => 5,
            'user_id' => auth()->user()->id,

        ]);
    }
}
