<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Article;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\MarkdownEditor;
use App\Filament\Resources\ArticleResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ArticleResource\RelationManagers;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Detail Post')
                    ->description('Add information for your project on all of the colomn below')
                    ->collapsible()
                    ->schema([
                        TextInput::make('title')->required()->maxLength(255),
                        Grid::make(2)
                            ->schema([
                                Select::make('author_id')
                                    ->relationship('author', 'name')
                                    ->searchable()
                                    ->preload()
                                    ->createOptionForm([
                                        TextInput::make('name')->label('Penulis')->required()->maxLength(255),
                                    ])
                                    ->required(),
                                TextInput::make('slug')
                                    ->required()
                                    ->rule('regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/')
                                    ->maxLength(255),
                                DatePicker::make('date'),
                                Select::make('label')
                                    ->multiple()
                                    ->options([
                                        'Berita Sekolah' => 'Berita Sekolah',
                                        'Prestasi Terkini' => 'Prestasi Terkini',
                                        'Pengumuman' => 'Pengumuman',
                                        'Teknik Komputer dan Jaringan' => 'Teknik Komputer dan Jaringan',
                                        'Teknik Sepeda Motor' => 'Teknik Sepeda Motor',
                                        'Desain dan Produksi Busana' => 'Desain dan Produksi Busana',
                                        'Akuntansi' => 'Akuntansi',
                                    ])
                            ]),
                        MarkdownEditor::make('content')->columnSpan('full')
                            ->fileAttachmentsDisk('uploads')
                            ->fileAttachmentsDirectory('project')
                            ->fileAttachmentsVisibility('public'),
                    ]),
                Section::make('Thumbnail')
                    ->description('Upload the thumbnail for the project that will show up on homepage')
                    ->collapsible()
                    ->schema([
                        FileUpload::make('thumbnail')
                            ->disk('uploads')
                            ->directory('thumbnail')
                            ->visibility('public'),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable(),
                TextColumn::make('authors.id')->sortable(),
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
