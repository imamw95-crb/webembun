<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Models\Booking;
use Filament\Actions;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?int $navigationSort = 2;

    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-calendar-days';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Property';
    }

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Forms\Components\Select::make('room_id')
                    ->relationship('room', 'name')
                    ->required(),
                Grid::make(2)->schema([
                    Forms\Components\TextInput::make('guest_name')->required(),
                    Forms\Components\TextInput::make('guest_email')->email()->required(),
                ]),
                Forms\Components\TextInput::make('guest_phone')->tel(),
                Grid::make(2)->schema([
                    Forms\Components\DatePicker::make('check_in')->required(),
                    Forms\Components\DatePicker::make('check_out')->required(),
                ]),
                Grid::make(3)->schema([
                    Forms\Components\TextInput::make('guests')->numeric()->default(1)->required(),
                    Forms\Components\TextInput::make('total_price')->numeric()->prefix('Rp')->required(),
                    Forms\Components\Select::make('status')
                        ->options([
                            'pending' => 'Pending',
                            'confirmed' => 'Confirmed',
                            'cancelled' => 'Cancelled',
                            'completed' => 'Completed',
                        ])
                        ->default('pending'),
                ]),
                Forms\Components\Textarea::make('notes')->columnSpanFull(),
                Grid::make(2)->schema([
                    Forms\Components\TextInput::make('payment_method'),
                    Forms\Components\Select::make('payment_status')
                        ->options(['unpaid' => 'Unpaid', 'paid' => 'Paid', 'refunded' => 'Refunded'])
                        ->default('unpaid'),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('room.name')->searchable()->sortable(),
                TextColumn::make('guest_name')->searchable(),
                TextColumn::make('check_in')->date()->sortable(),
                TextColumn::make('check_out')->date()->sortable(),
                TextColumn::make('guests'),
                TextColumn::make('total_price')->money('IDR')->sortable(),
                TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'pending' => 'warning',
                        'confirmed' => 'success',
                        'completed' => 'success',
                        'cancelled' => 'danger',
                    }),
                TextColumn::make('payment_status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'unpaid' => 'danger',
                        'paid' => 'success',
                        'refunded' => 'warning',
                    }),
                TextColumn::make('created_at')->dateTime()->sortable()->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options(['pending' => 'Pending', 'confirmed' => 'Confirmed', 'cancelled' => 'Cancelled', 'completed' => 'Completed']),
                Tables\Filters\SelectFilter::make('payment_status')
                    ->options(['unpaid' => 'Unpaid', 'paid' => 'Paid', 'refunded' => 'Refunded']),
            ])
            ->actions([
                Actions\EditAction::make(),
                Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Actions\BulkActionGroup::make([
                    Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
            'external' => Pages\ListExternalReservations::route('/external'),
        ];
    }
}
