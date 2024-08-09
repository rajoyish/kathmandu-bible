<?php

namespace App\Filament\Resources;

use App\Enums\FacultyPosition;
use App\Filament\Resources\FacultyResource\Pages;
use App\Models\Faculty;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;

class FacultyResource extends Resource
{
    protected static ?string $model = Faculty::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-plus';

    protected static ?string $navigationGroup = 'Committee';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make([
                    Forms\Components\FileUpload::make('photo')
                        ->required()
                        ->directory('faculties')
                        ->image()
                        ->deleteUploadedFileUsing(function ($file) {
                            Storage::disk('public')->delete($file);
                        })->columnSpanFull(),
                    Forms\Components\TextInput::make('name')
                        ->required(),
                    Forms\Components\Select::make('position')
                        ->required()
                        ->options(FacultyPosition::class)
                        ->native(false)
                        ->searchable(),
                    Forms\Components\TextInput::make('academic_degree')
                        ->required(),
                    Forms\Components\Select::make('order')
                        ->options(function () {
                            // Fetch the count of advisors
                            $advisorCount = Faculty::count();

                            // Generate options from 1 to advisorCount + 1
                            $maxValue = $advisorCount + 1;

                            return array_combine(range(1, $maxValue), range(1, $maxValue));
                        })
                        ->native(false)
                        ->searchable()
                        ->placeholder('Order of the Faculty')
                        ->preload(),
                ])->columns(2),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('photo')
                    ->circular()
                    ->grow(false),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('position')
                    ->searchable()
                    ->sortable()
                    ->badge(),
                Tables\Columns\TextColumn::make('academic_degree'),
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
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make()
                        ->before(function (Faculty $record) {
                            Storage::delete('public/'.$record->photo);
                        }),
                ]),
            ])
            ->bulkActions([
            //
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
            'index' => Pages\ListFaculties::route('/'),
            'create' => Pages\CreateFaculty::route('/create'),
            'view' => Pages\ViewFaculty::route('/{record}'),
            'edit' => Pages\EditFaculty::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'warning';
    }
}
