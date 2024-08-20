<?php

namespace App\Filament\Resources\CustomerReviewResource\Pages;

use App\Filament\Resources\CustomerReviewResource;
use Filament\Actions;
use Filament\Actions\LocaleSwitcher;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\Translatable;

class CreateCustomerReview extends CreateRecord
{
    use Translatable;

    protected static string $resource = CustomerReviewResource::class;

    public function  getHeaderActions(): array
    {
        return [
            LocaleSwitcher::make(),
        ];
    }
}
