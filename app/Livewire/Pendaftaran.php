<?php

namespace App\Livewire;

use App\Models\Daftar;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Livewire\Component;
use Illuminate\Contracts\View\View;

class Pendaftaran extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('nama_institusi')
                    ->maxLength(255)
                    ->required()
                    ->helperText('Nama intitusi, sekolah, atau kelompok belajar.')
                    ->placeholder('Sekolah Swasta Eksplorasi Edukasi'),

                Forms\Components\Textarea::make('alamat_institusi')
                    ->autosize()
                    ->maxLength(1024)
                    ->helperText('Alamat institusi, sekolah, atau kelompok belajar.')
                    ->placeholder('Jl. terminal, No. 88')
                    ->required(),

                Forms\Components\TextInput::make('nomor_institusi')
                    ->tel()
                    ->required()
                    ->helperText('Nomor WhatsApp yang dapat dihubungi.'),

                Forms\Components\DatePicker::make('tanggal_kunjungan')
                    ->helperText('Tenggal pelaksanaan wisata edukasi.'),

                Forms\Components\Radio::make('paket')
                    ->options([
                        'game' => 'Game Programming',
                        '3d' => '3D Printing',
                        'sablon' => 'Sabon Baju',
                        'komplit' => 'Komplit'
                    ])
                    ->descriptions([
                        'game' => 'Minimal 5 peserta. Maksimal 25 peserta. Rp. 15.000/peserta',
                        '3d' => 'Minimal 10 peserta. Maksimal 30 peserta. Rp. 20.000/peserta',
                        'sablon' => 'Minimal 5 peserta. Maksimal 30 peserta. 30.000/peserta',
                        'komplit' => 'Minimal 10 peserta. Maksimal 40 peserta. Rp 55.000/peserta'
                    ]),
                    // ->live(),

                Forms\Components\TextInput::make('jumlah_peserta')
                    ->numeric(),
            ])
            ->statePath('data')
            ->model(Daftar::class);
    }

    public function create(): void
    {
        $data = $this->form->getState();

        $record = Daftar::create($data);

        $this->form->model($record)->saveRelationships();
    }

    public function render(): View
    {
        return view('livewire.pendaftaran');
    }
}
