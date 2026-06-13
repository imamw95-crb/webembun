<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoomResource\Pages;
use App\Models\Room;
use Filament\Actions;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class RoomResource extends Resource
{
    protected static ?string $model = Room::class;

    protected static ?int $navigationSort = 1;

    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-building-office';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Property';
    }

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),
                Forms\Components\RichEditor::make('description')
                    ->required()
                    ->columnSpanFull(),
                Grid::make(3)->schema([
                    Forms\Components\TextInput::make('price_per_night')
                        ->required()
                        ->numeric()
                        ->prefix('Rp'),
                    Forms\Components\TextInput::make('capacity')
                        ->required()
                        ->numeric()
                        ->default(2),
                    Forms\Components\TextInput::make('size_sqm')
                        ->numeric()
                        ->suffix('m²'),
                ]),
                Forms\Components\FileUpload::make('featured_image')
                    ->image()
                    ->directory('rooms'),
                Forms\Components\TagsInput::make('amenities')
                    ->placeholder('Add amenity'),
                Grid::make(3)->schema([
                    Forms\Components\Toggle::make('is_available')
                        ->default(true),
                    Forms\Components\Toggle::make('is_featured'),
                    Forms\Components\TextInput::make('sort_order')
                        ->numeric()
                        ->default(0),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('price_per_night')
                    ->money('IDR')
                    ->sortable(),
                Tables\Columns\TextColumn::make('capacity')
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_available')
                    ->boolean()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_featured')
                    ->boolean()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bookings_count')
                    ->counts('bookings')
                    ->label('Bookings'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_available'),
                Tables\Filters\TernaryFilter::make('is_featured'),
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
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRooms::route('/'),
            'create' => Pages\CreateRoom::route('/create'),
            'edit' => Pages\EditRoom::route('/{record}/edit'),
        ];
    }
}
