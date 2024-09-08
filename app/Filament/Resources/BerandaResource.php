<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BerandaResource\Pages;
use App\Filament\Resources\BerandaResource\RelationManagers;
use App\Models\Beranda;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BerandaResource extends Resource
{
    protected static ?string $model = Beranda::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Halaman Website';

    public static function getPluralModelLabel(): string
    {
        return 'Beranda';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('title')
                            ->label('Judul')
                            ->required(),
                        Textarea::make('content')
                            ->label('Deskripsi'),
                        FileUpload::make('image')
                            ->label('Gambar')
                            ->image()
                            ->imageEditor()
                            ->disk('public')
                            ->directory('beranda')
                            ->preserveFilenames(),
                        TextInput::make('button_text')
                            ->label('Teks Tombol'),
                        TextInput::make('button_link')
                            ->label('Link Tombol'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->limit(20)
                    ->tooltip(fn(Beranda $record): string => $record->title),
                Tables\Columns\TextColumn::make('content')
                    ->limit(20)
                    ->tooltip(fn(Beranda $record): string => $record->content),
                Tables\Columns\ImageColumn::make('image')
                    ->tooltip(fn(Beranda $record): string => $record->image)
                    ->circular(),
                Tables\Columns\TextColumn::make('button_text'),
                Tables\Columns\TextColumn::make('button_link'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListBerandas::route('/'),
            'create' => Pages\CreateBeranda::route('/create'),
            'edit' => Pages\EditBeranda::route('/{record}/edit'),
        ];
    }
}
