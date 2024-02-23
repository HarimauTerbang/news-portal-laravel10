<div class="container bg-light pt-5 pb-5">
    <div class="container p-5 bg-danger rounded">
        <h1 class="text-white">Hubungi Kami</h1>
        <p class="text-white">Isi formulir dibawah ini jika anda memiliki pertanyaan.</p>
    
        <!-- Formulir Kontak -->
        <form method="post" action="{{ route('messages.store') }}">
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama Anda" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan alamat email Anda" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Nomer Telephone</label>
                <input type="number" class="form-control" id="phone" name="phone" placeholder="Masukkan nomer telephone Anda" required>
            </div>
            <div class="mb-3">
                <label for="massage" class="form-label">Pesan</label>
                <textarea class="form-control" id="massage" name="massage" rows="4" placeholder="Tulis pesan Anda" required></textarea>
            </div><br>

            <button type="submit" class="btn btn-dark fw-bold " onclick="return confirm('Apakah anda yakin ingin mengirimkan pesan?')">Kirim Pesan</button>
        </form>
    </div>
</div>