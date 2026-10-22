<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukti Pendaftaran Seminar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md text-center">
        <!-- Ikon Centang Sukses -->
        <div class="mb-4 text-green-600 flex justify-center">
            <svg class="w-16 h-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
        </div>

        <h2 class="text-2xl font-bold mb-1 text-gray-800">Pendaftaran Berhasil!</h2>
        <p class="text-gray-500 text-sm mb-6">Terima kasih telah mendaftar pada Seminar Nasional.</p>

        <!-- Kotak Detail Peserta -->
        <div class="bg-gray-50 p-4 rounded-lg text-left mb-6 space-y-3 border border-gray-200 text-sm">
            <div class="flex justify-between border-b pb-2">
                <span class="text-gray-500">ID Pendaftaran:</span>
                <span class="font-semibold text-gray-800">#{{ $pendaftaran->id }}</span>
            </div>
            <div class="flex justify-between border-b pb-2">
                <span class="text-gray-500">Nama Lengkap:</span>
                <span class="font-semibold text-gray-800">{{ $pendaftaran->nama }}</span>
            </div>
            <div class="flex justify-between border-b pb-2">
                <span class="text-gray-500">Email:</span>
                <span class="font-semibold text-gray-800">{{ $pendaftaran->email }}</span>
            </div>
            <div class="flex justify-between border-b pb-2">
                <span class="text-gray-500">Asal Instansi:</span>
                <span class="font-semibold text-gray-800">{{ $pendaftaran->institusi }}</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-500">No. WhatsApp:</span>
                <span class="font-semibold text-gray-800">{{ $pendaftaran->nomor_hp }}</span>
            </div>
        </div>

        <!-- Tombol Kembali -->
        <a href="{{ url('/') }}" class="block w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
            Daftar Peserta Lain
        </a>
    </div>
</body>
</html>