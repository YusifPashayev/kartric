<?php

namespace App\Observers;

use App\Models\CustomerReview;

class CustomerReviewObserver extends BaseObserver
{
    /**
     * Handle the CustomerReview "created" event.
     */
    public function created(CustomerReview $customerReview): void
    {
        //
    }

    /**
     * Handle the CustomerReview "updated" event.
     */
    public function updated(CustomerReview $customerReview): void
    {
        //
    }

    /**
     * Handle the CustomerReview "deleted" event.
     */
    // public function deleted(CustomerReview $customerReview): void
    // {
    //     //
    // }

    /**
     * Handle the CustomerReview "restored" event.
     */
    public function restored(CustomerReview $customerReview): void
    {
        //
    }

    /**
     * Handle the CustomerReview "force deleted" event.
     */
    public function forceDeleted(CustomerReview $customerReview): void
    {
        //
    }
}
