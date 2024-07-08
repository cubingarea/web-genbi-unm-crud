<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\KontakPengurus;
use Filament\Resources\Resource;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\KontakPengurusResource\Pages;
use App\Filament\Resources\KontakPengurusResource\RelationManagers;

class KontakPengurusResource extends Resource
{
    protected static ?string $model = KontakPengurus::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'Kontak Pengurus';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->required(),
                TextInput::make('email')
                    ->email()
                    ->required(),
                TextInput::make('no_telp')
                    ->required(),
                TextInput::make('jabatan')
                    ->required(),
                TextInput::make('periode')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama'),
                TextColumn::make('email'),
                TextColumn::make('no_telp'),
                TextColumn::make('jabatan'),
                TextColumn::make('periode'),
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
            'index' => Pages\ListKontakPenguruses::route('/'),
            'create' => Pages\CreateKontakPengurus::route('/create'),
            'edit' => Pages\EditKontakPengurus::route('/{record}/edit'),
        ];
    }
}
