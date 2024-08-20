<?php

namespace App\Filament\Resources\CustomerReviewResource\Pages;

use App\Filament\Resources\CustomerReviewResource;
use Filament\Actions;
use Filament\Actions\LocaleSwitcher;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Pages\EditRecord\Concerns\Translatable;

class EditCustomerReview extends EditRecord
{
    use Translatable;

    protected static string $resource = CustomerReviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
