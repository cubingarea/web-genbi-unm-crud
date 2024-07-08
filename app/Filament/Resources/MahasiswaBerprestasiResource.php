<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\MahasiswaBerprestasi;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MahasiswaBerprestasiResource\Pages;
use App\Filament\Resources\MahasiswaBerprestasiResource\RelationManagers;

class MahasiswaBerprestasiResource extends Resource
{
    protected static ?string $model = MahasiswaBerprestasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Mahasiswa Berprestasi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                TextInput::make('email')
                    ->required()
                    ->email()
                    ->unique(MahasiswaBerprestasi::class, 'email')
                    ->maxLength(255),
                TextInput::make('prodi')
                    ->required()
                    ->maxLength(255),
                TextInput::make('fakultas')
                    ->required()
                    ->maxLength(255),
                TextInput::make('angkatan')
                    ->required()
                    ->numeric()
                    ->minValue(1900)
                    ->maxValue(date('Y')),
                Textarea::make('prestasi')
                    ->required()
                    ->maxLength(65535),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')->sortable()->searchable(),
                TextColumn::make('email')->sortable()->searchable(),
                TextColumn::make('prodi')->sortable()->searchable(),
                TextColumn::make('fakultas')->sortable()->searchable(),
                TextColumn::make('angkatan')->sortable(),
                TextColumn::make('prestasi')->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListMahasiswaBerprestasis::route('/'),
            'create' => Pages\CreateMahasiswaBerprestasi::route('/create'),
            'edit' => Pages\EditMahasiswaBerprestasi::route('/{record}/edit'),
        ];
    }
}
