<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Models\Gallery;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Support\Enums\FontWeight;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn\TextColumnSize;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make([
                    Forms\Components\FileUpload::make('cover_photo')
                        ->required()
                        ->directory('galleries')
                        ->image()
                        ->imageEditor()
                        ->imageEditorAspectRatios([
                            '16:9',
                        ])
                        ->imageEditorViewportWidth('1920')
                        ->imageEditorViewportHeight('1080'),
                    Forms\Components\TextInput::make('title')
                        ->required()
                        ->maxLength(255)
                        ->live()
                        ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                            if (($get('slug') ?? '') !== Str::slug($old)) {
                                return;
                            }
                            $set('slug', Str::slug($state));
                        }),
                    Forms\Components\TextInput::make('slug')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Textarea::make('description')
                        ->required()
                        ->columnSpanFull(),
                    Forms\Components\FileUpload::make('photos')
                        ->required()
                        ->helperText('Recommended Aspect: 16:9 (Rectangular) | Max File Size: 1 MB')
                        ->directory('galleries')
                        ->image()
                        ->multiple()
                        ->reorderable()
                        ->appendFiles()
                        ->imageEditor()
                        ->imageEditorAspectRatios([
                            '16:9',
                        ])
                        ->imageEditorViewportWidth('1920')
                        ->imageEditorViewportHeight('1080')
                        ->fetchFileInformation(false)
                        ->maxSize(1024)
                        ->maxFiles(10),
                ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('cover_photo')
                    ->grow(false),
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->size(TextColumnSize::Large)
                    ->weight(FontWeight::Medium)
                    ->description(fn (Gallery $record): string => Str::limit($record->description, 100)),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable()
                    ->badge()
                    ->grow(false),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()->before(function (Gallery $record) {
                    Storage::delete('public/'.$record->cover_photo);
                }),
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
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}
