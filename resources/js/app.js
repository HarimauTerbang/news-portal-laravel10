import Swal from 'sweetalert2';

Swal.fire({
    icon: 'success',
    title: 'Pesan Anda Telah Dikirimkan!',
    text: 'Tunggu kami melalui email yang telah Anda kirimkan.',
    showConfirmButton: false,
    timer: 2000 // Durasi notifikasi dalam milidetik (opsional)
}).then(() => {
    // Redirect ke halaman kontak setelah menutup notifikasi
    window.location.href = '/kontak';
});
