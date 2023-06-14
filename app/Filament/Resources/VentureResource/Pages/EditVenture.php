<?php

namespace App\Filament\Resources\VentureResource\Pages;

use App\Filament\Resources\VentureResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVenture extends EditRecord
{
    protected static string $resource = VentureResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
