<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AcademicProgramResource\Pages;
use App\Models\AcademicProgram;
use Filament\Forms;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Illuminate\Support\Str;

class AcademicProgramResource extends Resource
{
    protected static ?string $model = AcademicProgram::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-academic-cap';

    protected static string|\UnitEnum|null $navigationGroup = 'Academic Programs';

    public static function form(Schema $form): Schema
    {
        return $form
            ->schema([
                \Filament\Schemas\Components\Section::make('General Information')->schema([
                    Forms\Components\TextInput::make('title')
                        ->required()
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn (string $operation, $state, Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null),
                    Forms\Components\TextInput::make('slug')
                        ->required()
                        ->unique(ignoreRecord: true),
                    Forms\Components\TextInput::make('badge_title')
                        ->required()
                        ->placeholder('e.g. C. Th.'),
                    Forms\Components\Select::make('badge_color')
                        ->required()
                        ->options([
                            'blue' => 'Blue',
                            'purple' => 'Purple',
                            'amber' => 'Amber',
                            'emerald' => 'Emerald',
                            'slate' => 'Slate',
                        ])
                        ->default('blue'),
                    Forms\Components\TextInput::make('language')
                        ->required()
                        ->placeholder('e.g. Nepali'),
                    Forms\Components\TextInput::make('credits')
                        ->required()
                        ->default('24 credits'),
                    Forms\Components\TextInput::make('order_column')
                        ->numeric()
                        ->default(0),
                ])->columns(2),

                \Filament\Schemas\Components\Section::make('Content')->schema([
                    Forms\Components\Textarea::make('summary')
                        ->label('Short Summary')
                        ->helperText('Shown on the programs overview page')
                        ->required()
                        ->columnSpanFull(),
                    Forms\Components\Textarea::make('description')
                        ->required()
                        ->columnSpanFull(),
                    Forms\Components\Textarea::make('purpose')
                        ->required()
                        ->columnSpanFull(),
                    Forms\Components\Textarea::make('vision')
                        ->required()
                        ->columnSpanFull(),
                ]),

                \Filament\Schemas\Components\Section::make('Lists')->schema([
                    Forms\Components\TagsInput::make('admission_requirements')
                        ->placeholder('Add requirement and press enter'),
                    Forms\Components\TagsInput::make('admission_process')
                        ->placeholder('Add process step and press enter'),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('badge_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('language')
                    ->searchable(),
                Tables\Columns\TextColumn::make('order_column')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('order_column')
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
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
            'index' => Pages\ListAcademicPrograms::route('/'),
            'create' => Pages\CreateAcademicProgram::route('/create'),
            'edit' => Pages\EditAcademicProgram::route('/{record}/edit'),
        ];
    }
}
