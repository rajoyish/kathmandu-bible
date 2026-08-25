<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SliderResource\Pages;
use App\Models\Slider;
use Filament\Forms;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;

class SliderResource extends Resource
{
    protected static ?string $model = Slider::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Schema $form): Schema
    {
        return $form
            ->schema([
                \Filament\Schemas\Components\Section::make([
                    Forms\Components\FileUpload::make('photo')
                        ->required()
                        ->helperText('Dimension: 1440 x 594px | Max File Size: 1 MB')
                        ->disk('public')->directory('sliders')
                        ->image()
                        ->imageEditor()
                        ->imageEditorViewportWidth('1440')
                        ->imageEditorViewportHeight('594')
                        ->imageResizeTargetWidth('1440')
                        ->imageResizeTargetHeight('594')
                        ->maxSize(1024)
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
                Tables\Columns\ImageColumn::make('photo')->disk('public')
                    ->width(200)
                    ->height(100)
                    ->circular(),
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
                \Filament\Actions\DeleteAction::make()
                    ->before(function (Slider $record) {
                        Storage::delete('public/'.$record->photo);
                    }),
            ])
            ->bulkActions([
                \Filament\Actions\BulkActionGroup::make([
                    //                    \Filament\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListSliders::route('/'),
            'create' => Pages\CreateSlider::route('/create'),
            'edit' => Pages\EditSlider::route('/{record}/edit'),
        ];
    }
}
