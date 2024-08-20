<?php

namespace App\Filament\Resources\CustomerReviewResource\Pages;

use App\Filament\Resources\CustomerReviewResource;
use Filament\Actions;
use Filament\Actions\LocaleSwitcher;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Concerns\Translatable;

class ListCustomerReviews extends ListRecords
{
    use Translatable;

    protected static string $resource = CustomerReviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcher::make(), 
            Actions\CreateAction::make(),
        ];
    }
}
