<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MemberResource\Pages;
use App\Models\Member;
use Filament\Forms;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Storage;

class MemberResource extends Resource
{
    protected static ?string $model = Member::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-users';

    protected static string|\UnitEnum|null $navigationGroup = 'Committee';

    public static function form(Schema $form): Schema
    {
        return $form
            ->schema([
                Forms\Components\Section::make([
                    Forms\Components\FileUpload::make('photo')
                        ->required()
                        ->directory('members')
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
                            $advisorCount = Member::count();

                            // Generate options from 1 to advisorCount + 1
                            $maxValue = $advisorCount + 1;

                            return array_combine(range(1, $maxValue), range(1, $maxValue));
                        })
                        ->native(false)
                        ->searchable()
                        ->placeholder('Order of the Member')
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
                Tables\Columns\TextColumn::make('designation')
                    ->searchable(),
                Tables\Columns\TextColumn::make('organization')
                    ->searchable(),
                Tables\Columns\TextColumn::make('order')
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
                        ->before(function (Member $record) {
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
            'index' => Pages\ListMembers::route('/'),
            'create' => Pages\CreateMember::route('/create'),
            'edit' => Pages\EditMember::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'success';
    }
}
