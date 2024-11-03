<?php

namespace App\Livewire;

use Livewire\Component;

class Passwordgenerator extends Component
{
    public $password = '';
    protected $lastGeneratedPassword = '';

    public function mount()
    {
        $this->generatePassword(); // Generate a password on page load
    }

    public function generatePassword()
    {
        // Always generate a new password regardless of the current input
        do {
            $newPassword = $this->generateUniquePassword();
        } while ($newPassword === $this->lastGeneratedPassword);

        // Set the new password and clear the input
        $this->password = $newPassword;
        // Store the last generated password
        $this->lastGeneratedPassword = $newPassword;
    }

    private function generateUniquePassword($length = 12)
    {
        // Generates a random password of specified length
        return substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()'), 0, $length);
    }

    public function copyPassword()
    {
        if (!empty($this->password)) {
            // Emit an event to trigger the JavaScript function for copying
            $this->dispatch('passwordCopied', $this->password);
        } else {
            // Optionally, emit an event for an empty password
            $this->dispatch('passwordCopyError');
        }
    }

    public function render()
    {
        return view('livewire.passwordgenerator');
    }
}
