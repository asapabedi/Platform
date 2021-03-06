<?php

namespace Orchid\Events\Systems;

use Illuminate\Queue\SerializesModels;
use Orchid\Http\Forms\Systems\Users\UserFormGroup;

class UserEvent
{
    use SerializesModels;

    /**
     * @var
     */
    protected $form;

    /**
     * Create a new event instance.
     * SomeEvent constructor.
     *
     * @param UserFormGroup $form
     */
    public function __construct(UserFormGroup $form)
    {
        $this->form = $form;
    }
}
