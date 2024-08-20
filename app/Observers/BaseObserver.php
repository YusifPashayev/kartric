<?php

namespace App\Observers;

use Illuminate\Support\Facades\Storage;

class BaseObserver
{
    /**
     * Handle the model "deleted" event.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return void
     */
    public function deleted($model)
    {

        // if (isset($model->file_url) && $model->file_url) {

        //     Storage::disk('public')
        //         ->delete($model->file_url);
        // }

        if (isset($model->image_url) && $model->image_url) {

            Storage::disk('public')
                ->delete($model->image_url);
        }
    }
}
