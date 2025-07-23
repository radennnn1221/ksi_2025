<?php

namespace App\Filament\Admin\Resources\SaleItemResource\Pages;

use App\Filament\Admin\Resources\SaleItemResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSaleItems extends ListRecords
{
    protected static string $resource = SaleItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
