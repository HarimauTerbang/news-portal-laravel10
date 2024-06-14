@if (session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="container pt-4 pb-4">
    <div class="container p-5 rounded shadow" style="background-color: transparent; backdrop-filter: blur(30px);">
        <h1 class="text-white fw-bold">Hubungi Kami</h1>
        <p class="text-white">Isi formulir dibawah ini jika anda memiliki pertanyaan.</p>

        <!-- Formulir Kontak -->
        <form method="post" action="{{ route('mails.store') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label fw-bold text-white">Nama</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama Anda" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label fw-bold text-white">Alamat Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan alamat email Anda" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label fw-bold text-white">Nomer Telephone</label>
                <input type="number" class="form-control" id="phone" name="phone" placeholder="Masukkan nomer telephone Anda" required>
            </div>
            <div class="mb-3">
                <label for="massage" class="form-label fw-bold text-white">Pesan</label>
                <textarea class="form-control" id="subject" name="subject" rows="4" placeholder="Tulis pesan Anda" required></textarea>
            </div><br>

            <p class="text-white">*Jika pesan terkirim, tunggu balasan kami melalui email yang telah anda kirimkan</p>

            <button type="submit" class="btn btn-dark fw-bold px-5 pt-2 pb-2 rounded-pill" onclick="return confirm('Apakah anda yakin ingin mengirimkan pesan?')">Kirim Pesan</button>
        </form>
    </div>
</div>
