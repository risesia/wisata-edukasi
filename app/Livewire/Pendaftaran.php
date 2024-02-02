<?php

namespace App\Livewire;

use App\Models\Daftar;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Filament\Notifications;
use Filament\Support\Enums\Alignment;

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
                    ->placeholder('081234567890')
                    ->helperText('Nomor WhatsApp yang dapat dihubungi.'),

                Forms\Components\DatePicker::make('tanggal_kunjungan')
                    ->timezone('Asia/Jakarta')
                    ->displayFormat('l, d F Y')
                    ->native(false)
                    ->placeholder('Monday, 1 January 2024')
                    ->helperText('Tenggal pelaksanaan wisata edukasi.')
                    ->closeOnDateSelection()
                    ->required(),

                Forms\Components\Radio::make('paket')
                    ->required()
                    ->options([
                        'game' => 'Game Programming',
                        '3d' => '3D Printing',
                        'sablon' => 'Sabon Baju',
                        'komplit' => 'Komplit'
                    ])
                    ->descriptions([
                        'game' => 'Belajar membuat game seru dengan abang-abang profesional.',
                        '3d' => 'Buat barang-barang unik dengan printer 3D.',
                        'sablon' => 'Kreasi sablon dengan gambar yang dibuat sendiri.',
                        'komplit' => 'Semua paket.'
                    ]),
                // ->live(),

                Forms\Components\TextInput::make('jumlah_peserta')
                    ->numeric()
                    ->required()
                    ->placeholder('10')
                    ->helperText('Peserta yang akan hadir.'),
            ])
            ->statePath('data')
            ->model(Daftar::class);
    }

    public function create(): void
    {
        $data = $this->form->getState();

        $record = Daftar::create($data);

        $this->form->model($record)->saveRelationships();

        $nama_institusi = $data['nama_institusi'] ?? '';

        $whatsappUrl = 'https://api.whatsapp.com/send/?phone=6281370177719&text=' . urlencode("Saya sudah mengisi form pendaftaran wisata edukasi Kidsnesia atas nama $nama_institusi. Mohon dikonfirmasi, terima kasih.") . '&type=phone_number&app_absent=0';

        Notifications\Notification::make()
            ->title('Pendaftaran Diterima!')
            ->success()
            ->persistent()
            ->body('Silahkan konfirmasi pendaftaran kepada Admin melalui WhatsApp.')
            ->actions([
                Notifications\Actions\Action::make('konfirmasi')
                    ->button()
                    ->color('success')
                    ->url($whatsappUrl),
            ])
            ->color('success')
            ->send();
    }

    public function render(): View
    {
        return view('livewire.pendaftaran');
    }
}
