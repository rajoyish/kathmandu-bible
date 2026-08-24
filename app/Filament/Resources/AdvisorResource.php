<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdvisorResource\Pages;
use App\Models\Advisor;
use Filament\Forms;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;

class AdvisorResource extends Resource
{
    protected static ?string $model = Advisor::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-user-group';

    protected static string|\UnitEnum|null $navigationGroup = 'Committee';

    public static function form(Schema $form): Schema
    {
        return $form
            ->schema([
                Forms\Components\Section::make([
                    Forms\Components\FileUpload::make('photo')
                        ->required()
                        ->directory('advisors')
                        ->image()
                        ->deleteUploadedFileUsing(function ($file) {
                            Storage::disk('public')->delete($file);
                        })->columnSpanFull(),
                    Forms\Components\TextInput::make('name')
                        ->required(),
                    Forms\Components\TextInput::make('designation')
                        ->required(),
                    Forms\Components\TextInput::make('organization')
                        ->required(),
                    Forms\Components\Select::make('order')
                        ->options(function () {
                            // Fetch the count of advisors
                            $advisorCount = Advisor::count();

                            // Generate options from 1 to advisorCount + 1
                            $maxValue = $advisorCount + 1;

                            return array_combine(range(1, $maxValue), range(1, $maxValue));
                        })
                        ->native(false)
                        ->searchable()
                        ->placeholder('Order of the Advisor')
                        ->preload(),
                ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('photo')
                    ->grow(false)
                    ->circular(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('designation')
                    ->searchable(),
                Tables\Columns\TextColumn::make('organization')
                    ->searchable(),
                Tables\Columns\TextColumn::make('order')
                    ->grow(false)
                    ->numeric(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('order', 'asc')
            ->filters([
                //
            ])
            ->actions([
                \Filament\Actions\ActionGroup::make([
                    \Filament\Actions\ViewAction::make(),
                    \Filament\Actions\EditAction::make(),
                    \Filament\Actions\DeleteAction::make()
                        ->before(function (Advisor $record) {
                            Storage::delete('public/'.$record->photo);
                        }),
                ]),
            ])
            ->bulkActions([]);
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
            'index' => Pages\ListAdvisors::route('/'),
            'create' => Pages\CreateAdvisor::route('/create'),
            'edit' => Pages\EditAdvisor::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
}
