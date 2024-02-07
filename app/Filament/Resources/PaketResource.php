<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaketResource\Pages;
use App\Filament\Resources\PaketResource\RelationManagers;
use App\Models\Paket;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PaketResource extends Resource
{
    protected static ?string $model = Paket::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_paket')
                    ->maxLength(255)
                    ->required()
                    ->helperText('Isi nama paket.')
                    ->placeholder('Game edukasi')
                    ->columnSpan([
                        'sm' => 2,
                    ]),

                Forms\Components\FileUpload::make('gambar')
                    ->label(__('Product Image'))  // Set a clear label for the input
                    ->image()
                    ->optimize('jpg') // Adjust optimization format if needed (e.g., 'png')
                    ->maxSize(config('products.image.maxSize', 2048)) // Set appropriate max size
                    ->imageCropAspectRatio(config('products.image.cropAspectRatio', '1:1')) // Set desired aspect ratio
                    ->disk(config('products.image.disk', 'public'))
                    ->directory(config('products.image.directory', 'products'))
                    ->columnSpan([
                        'sm' => 2,
                    ]),
                self::getContentEditor(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_paket')
                    ->searchable(),
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
            'index' => Pages\ListPakets::route('/'),
            'create' => Pages\CreatePaket::route('/create'),
            'edit' => Pages\EditPaket::route('/{record}/edit'),
        ];
    }

    private static function getContentEditor()
    {
        $defaultEditor = config('filament-blog.editor');

        return $defaultEditor::make('deskripsi')
            ->label(__('filament-blog::filament-blog.content'))
            ->required()
            ->toolbarButtons(config('filament-blog.toolbar_buttons'))
            ->columnSpan([
                'sm' => 2,
            ]);
    }
}
