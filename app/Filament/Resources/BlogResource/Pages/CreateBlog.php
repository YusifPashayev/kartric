<?php

namespace App\Filament\Resources\BlogResource\Pages;

use App\Filament\Resources\BlogResource;
use Filament\Actions;
use Filament\Actions\LocaleSwitcher;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\CreateRecord\Concerns\Translatable;

class CreateBlog extends CreateRecord
{
    use Translatable;

    protected static string $resource = BlogResource::class;

    public function getHeaderAction(): array
    {
        return [
            LocaleSwitcher::make(),
        ];
    }
}
