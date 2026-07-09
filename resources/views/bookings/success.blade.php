@extends('layouts.app')

@section('title', 'Booking Berhasil')

@section('content')
<section class="py-16 lg:py-24">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="scroll-reveal scroll-reveal--scale-in bg-white rounded-2xl shadow-sm border border-gray-100 p-8 lg:p-12">
            <!-- Success Icon -->
            <div class="w-20 h-20 mx-auto mb-6 bg-emerald-100 rounded-full flex items-center justify-center">
                <x-heroicon-o-check-circle class="w-10 h-10 text-emerald-600" />
            </div>

            <h1 class="scroll-reveal scroll-reveal--fade-in-up text-2xl lg:text-3xl font-bold text-gray-900 font-['Playfair_Display'] mb-2">Booking Berhasil!</h1>
            <p class="scroll-reveal scroll-reveal--fade-in-up text-gray-500 mb-8">Terima kasih, pemesanan Anda telah diterima. Kami akan menghubungi Anda untuk konfirmasi.</p>

            <div class="scroll-reveal scroll-reveal--fade-in-up bg-gray-50 rounded-xl p-6 mb-8 text-left">
                <h3 class="font-semibold text-gray-900 mb-4">Detail Pemesanan</h3>
                <div class="space-y-3 text-sm">
                    <div class="flex justify-between">
                        <span class="text-gray-500">Kode Booking</span>
                        <span class="font-medium text-gray-900">#{{ $booking->id }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500">Kamar</span>
                        <span class="font-medium text-gray-900">{{ $booking->room->name }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500">Nama Tamu</span>
                        <span class="font-medium text-gray-900">{{ $booking->guest_name }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500">Check-in</span>
                        <span class="font-medium text-gray-900">{{ $booking->check_in->format('d M Y') }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-500">Check-out</span>
                        <span class="font-medium text-gray-900">{{ $booking->check_out->format('d M Y') }}</span>
                    </div>
                    <div class="flex justify-between pt-3 border-t border-gray-200">
                        <span class="text-gray-500">Total</span>
                        <span class="font-bold text-emerald-700">Rp {{ number_format($booking->total_price, 0, ',', '.') }}</span>
                    </div>
                    @if($booking->unique_code)
                    <div class="flex justify-between">
                        <span class="text-gray-500">Kode Unik (3 digit)</span>
                        <span class="font-mono text-gray-500">+ {{ $booking->unique_code }}</span>
                    </div>
                    <div class="flex justify-between pt-2 border-t border-dashed border-gray-200">
                        <span class="text-sm font-semibold text-gray-700">Total Transfer</span>
                        <span class="font-bold text-emerald-700">Rp {{ number_format($booking->total_price + $booking->unique_code, 0, ',', '.') }}</span>
                    </div>
                    @endif
                    <div class="flex justify-between">
                        <span class="text-gray-500">Status</span>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-700">
                            {{ ucfirst($booking->status) }}
                        </span>
                    </div>
                </div>
            </div>

            <!-- Payment Information -->
            <div class="scroll-reveal scroll-reveal--fade-in-up mb-8 text-left">
                <div class="bg-gradient-to-br from-emerald-50 via-white to-amber-50 border-2 border-emerald-100 rounded-2xl p-6 lg:p-8 shadow-sm">
                    <!-- Header -->
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 bg-emerald-100 rounded-xl flex items-center justify-center shrink-0">
                            <x-heroicon-o-banknotes class="w-5 h-5 text-emerald-600" />
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900 font-['Playfair_Display']">Informasi Pembayaran</h3>
                            <p class="text-sm text-gray-500">Selesaikan pembayaran Anda dengan langkah berikut</p>
                        </div>
                    </div>

                    <!-- Total yang harus dibayar -->
                    <div class="bg-gradient-to-br from-emerald-600 to-teal-600 rounded-xl p-5 mb-6 text-center shadow-md">
                        <p class="text-emerald-100 text-sm mb-1">Total yang harus ditransfer</p>
                        <p class="text-2xl lg:text-3xl font-bold text-white font-['Playfair_Display']">Rp {{ number_format($booking->total_price + ($booking->unique_code ?? 0), 0, ',', '.') }}</p>
                        @if($booking->unique_code)
                        <p class="text-emerald-200 text-xs mt-1.5">({{ number_format($booking->total_price, 0, ',', '.') }} + kode unik <span class="font-mono font-semibold">{{ $booking->unique_code }}</span>)</p>
                        @endif
                    </div>

                    <!-- Steps -->
                    <div class="space-y-4 mb-6">
                        <!-- Step 1 -->
                        <div class="flex gap-4">
                            <div class="flex flex-col items-center">
                                <div class="w-8 h-8 bg-emerald-600 rounded-full flex items-center justify-center shrink-0">
                                    <span class="text-white text-sm font-bold">1</span>
                                </div>
                                <div class="w-0.5 h-full bg-emerald-200 mt-1"></div>
                            </div>
                            <div class="pb-4 flex-1">
                                <h4 class="font-semibold text-gray-900 text-sm">Transfer ke Rekening BCA</h4>
                                <p class="text-xs text-gray-500 mt-1">Lakukan transfer sejumlah total di atas ke rekening berikut:</p>
                                <div class="mt-3 bg-white rounded-xl border border-gray-200 p-4 space-y-2.5">
                                    <div class="flex items-center justify-between">
                                        <span class="text-xs text-gray-500">Bank</span>
                                        <div class="flex items-center gap-2">
                                            <span class="text-sm font-bold text-gray-900">BCA</span>
                                            <span class="w-6 h-6 bg-blue-600 rounded flex items-center justify-center text-white text-[8px] font-bold">BCA</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <span class="text-xs text-gray-500">Nama Pemilik</span>
                                        <span class="text-sm font-semibold text-gray-900">Hanyen Tenggono</span>
                                    </div>
                                    <div class="flex items-center justify-between pt-2 border-t border-gray-100">
                                        <span class="text-xs text-gray-500">No. Rekening</span>
                                        <div class="flex items-center gap-2">
                                            <span class="text-base font-bold text-emerald-700 font-mono tracking-[0.2em] select-all">1341463535</span>
                                            <button onclick="navigator.clipboard.writeText('1341463535').then(() => { this.querySelector('svg').classList.toggle('hidden'); this.querySelector('span').classList.toggle('hidden'); setTimeout(() => { this.querySelector('svg').classList.toggle('hidden'); this.querySelector('span').classList.toggle('hidden'); }, 2000); })" class="p-1.5 bg-emerald-50 hover:bg-emerald-100 rounded-lg transition-colors" title="Salin nomor rekening">
                                                <x-heroicon-o-clipboard class="w-4 h-4 text-emerald-600" />
                                                <span class="hidden text-xs text-emerald-600 font-medium">Tersalin!</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="flex gap-4">
                            <div class="flex flex-col items-center">
                                <div class="w-8 h-8 bg-emerald-600 rounded-full flex items-center justify-center shrink-0">
                                    <span class="text-white text-sm font-bold">2</span>
                                </div>
                                <div class="w-0.5 h-full bg-emerald-200 mt-1"></div>
                            </div>
                            <div class="pb-4 flex-1">
                                <h4 class="font-semibold text-gray-900 text-sm">Simpan Bukti Transfer</h4>
                                <p class="text-xs text-gray-500 mt-1">Ambil screenshot atau foto bukti transfer dari mobile banking / ATM Anda.</p>
                                <div class="mt-2 flex items-center gap-2 text-xs text-amber-700 bg-amber-50 rounded-lg px-3 py-2">
                                    <x-heroicon-o-information-circle class="w-4 h-4 shrink-0" />
                                    <span>Pastikan bukti transfer jelas menunjukkan nominal, tanggal, dan tujuan rekening.</span>
                                </div>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="flex gap-4">
                            <div class="flex flex-col items-center">
                                <div class="w-8 h-8 bg-emerald-600 rounded-full flex items-center justify-center shrink-0">
                                    <span class="text-white text-sm font-bold">3</span>
                                </div>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-semibold text-gray-900 text-sm">Konfirmasi via WhatsApp</h4>
                                <p class="text-xs text-gray-500 mt-1">Kirim bukti transfer beserta kode booking <strong>#{{ $booking->id }}</strong> ke WhatsApp kami.</p>
                                @php
                                    $waTotal = $booking->total_price + (int) ($booking->unique_code ?? 0);
                                    $waUnique = $booking->unique_code ? '(Kode%20Unik%3A%20'.$booking->unique_code.')%0A' : '';
                                    $waMessage = 'Halo%20Embun%20Village%2C%20saya%20telah%20melakukan%20pembayaran%20untuk%20booking%20%23'.$booking->id.'%20-%20'.urlencode($booking->room->name).'%0A%0ANama%3A%20'.urlencode($booking->guest_name).'%0ATotal%3A%20Rp'.number_format($waTotal, 0, '', '').'%0A'.$waUnique.'Berikut%20bukti%20transfernya%3A';
                                @endphp
                                <a href="https://wa.me/6285136907907?text={{ $waMessage }}" target="_blank" class="mt-3 w-full inline-flex items-center justify-center gap-2 px-5 py-3 bg-green-500 hover:bg-green-600 text-white rounded-xl font-semibold text-sm transition-all shadow-md hover:shadow-lg active:scale-[0.98]">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                                    Konfirmasi via WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Quick summary -->
                    <div class="bg-emerald-600/5 rounded-xl p-4 border border-emerald-200/50">
                        <div class="flex items-start gap-2">
                            <x-heroicon-o-check-badge class="w-5 h-5 text-emerald-600 shrink-0 mt-0.5" />
                            <div>
                                <p class="text-xs font-semibold text-gray-900">Setelah konfirmasi diterima:</p>
                                <p class="text-xs text-gray-500 mt-0.5">Tim kami akan memverifikasi pembayaran dan mengirimkan email konfirmasi beserta detail check-in Anda. Proses verifikasi maksimal 1×24 jam.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="scroll-reveal scroll-reveal--fade-in-up flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('home') }}" class="btn-press inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-emerald-600 to-teal-500 text-white rounded-xl hover:from-emerald-700 hover:to-teal-600 transition-all font-medium shadow-lg">
                    Kembali ke Beranda
                </a>
                <a href="{{ route('rooms.index') }}" class="btn-press inline-flex items-center justify-center px-6 py-3 border border-gray-200 text-gray-700 rounded-xl hover:bg-gray-50 transition-all font-medium">
                    Lihat Kamar Lain
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
