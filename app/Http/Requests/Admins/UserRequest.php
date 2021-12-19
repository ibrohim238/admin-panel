<?php

namespace App\Http\Requests\Admins;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Collection;

/**
 * @property-read string $roles
 * @property-read string $password
 * @property-read string $new_password
*/
class UserRequest extends FormRequest
{
    protected function prepareForValidation()
    {
        $this->merge([
           'password' => bcrypt($this->new_password),
        ]);
    }

    public function rolesCollection(): Collection
    {
        return collect(explode(", ", $this->roles));
    }

    public function rules(): array
    {
        return [
            'roles' => ['string'],
            'password' => ['string', 'nullable'],
            'new_password' => ['string', 'min:8', 'nullable'],
        ];
    }
}
