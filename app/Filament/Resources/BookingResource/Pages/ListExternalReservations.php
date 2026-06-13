<?php

namespace App\Filament\Resources\BookingResource\Pages;

use App\Filament\Resources\BookingResource;
use App\Services\ExternalApiService;
use Filament\Actions\Action;
use Filament\Resources\Pages\Page;
use Filament\Tables;

class ListExternalReservations extends Page implements Tables\Contracts\HasTable
{
    use Tables\Concerns\InteractsWithTable;

    protected static string $resource = BookingResource::class;

    protected string $view = 'filament.resources.booking-resource.pages.list-external-reservations';

    public array $externalReservations = [];

    public ?string $filterStatus = null;

    public function mount(): void
    {
        $this->loadReservations();
    }

    public function loadReservations(): void
    {
        $api = app(ExternalApiService::class);

        $params = [];
        if ($this->filterStatus) {
            $params['status'] = $this->filterStatus;
        }
        $params['per_page'] = 50;

        $result = $api->getReservations($params);

        $this->externalReservations = $result['data'] ?? $result ?? [];
    }

    public function updatedFilterStatus(): void
    {
        $this->loadReservations();
    }

    protected function getTableQuery(): never
    {
        throw new \RuntimeException('ListExternalReservations uses external API data, not Eloquent.');
    }

    protected function getTableColumns(): array
    {
        return [];
    }

    protected function getHeaderActions(): array
    {
        return [
            Action::make('refresh')
                ->label('Refresh from API')
                ->icon('heroicon-o-arrow-path')
                ->action('loadReservations'),
            Action::make('back')
                ->label('Back to Local Bookings')
                ->icon('heroicon-o-arrow-left')
                ->url(BookingResource::getUrl('index')),
        ];
    }

    public static function shouldRegisterNavigation(array $parameters = []): bool
    {
        return false;
    }
}
