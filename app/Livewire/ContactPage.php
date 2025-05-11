<?php

namespace App\Livewire;

use App\Models\Contact;
use App\Models\Post;
use Livewire\Component;

class ContactPage extends Component
{
    public $posts;
    public $name, $email, $subject, $message;
    public function mount(){
        $this->posts = Post::latest()->take(6)->get();
    }
    public function render()
    {
        return view('livewire.contact-page');
    }


    // 
    public function submit(){
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
        ]);
        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);
        session()->flash('success', 'Your message has been sent successfully!');
        $this->reset();
        $this->posts = Post::latest()->take(6)->get();

    }
}
