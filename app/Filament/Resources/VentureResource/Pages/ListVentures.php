<?php

namespace App\Filament\Resources\VentureResource\Pages;

use App\Filament\Resources\VentureResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVentures extends ListRecords
{
    protected static string $resource = VentureResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
