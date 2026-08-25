<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Models\Gallery;
use Filament\Forms;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Resources\Resource;
use Filament\Support\Enums\FontWeight;
use Filament\Tables;
use Filament\Support\Enums\TextSize;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-photo';

    public static function form(Schema $form): Schema
    {
        return $form
            ->schema([
                \Filament\Schemas\Components\Section::make([
                    Forms\Components\FileUpload::make('cover_photo')
                        ->required()
                        ->disk('public')->directory('galleries')
                        ->image()
                        ->imageEditor()
                        ->imageEditorAspectRatios([
                            '16:9',
                        ])
                        ->imageEditorViewportWidth('1920')
                        ->imageEditorViewportHeight('1080')
                        ->deleteUploadedFileUsing(function ($file) {
                            Storage::disk('public')->delete($file);
                        }),
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
                        ->disk('public')->directory('galleries')
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
                        ->maxFiles(10)
                        ->deleteUploadedFileUsing(function ($file) {
                            Storage::disk('public')->delete($file);
                        }),
                ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('cover_photo')->disk('public')
                    ->grow(false),
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->size(TextSize::Large)
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
                \Filament\Actions\EditAction::make(),
                \Filament\Actions\DeleteAction::make()->before(function (Gallery $record) {
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
