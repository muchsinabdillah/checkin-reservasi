## About Application

Aplikasi ini dibuat dengan tujuan untuk melakuakn Self Service Registrastion Pasien. Adapun beberapa Fiturnya sebagai Berikut  :

1. Fitur Entri Dan Upload Data Pribadi Pasien.
    - Saat Pasien Sudah di Reservasikan di SIMRS, akan di kirimkan pesan Wa dengan Link :
        https://newpatient.rsyarsi.co.id/newPatientForm/{idbooking->base64_encode}
    - Setelah itu isi data nya dan juga upload foto ktp.
    - Jika sukses akan bikin no. mr baru dan foto ke upload ke aws cloud.
2 Fitur Checkin dan Registrastion.
    - Pasien Datang tanpa antri , langsung ke kiosk dengan cara memasukan No. Booking.
    - Pasien Melakukan Checkin dan Cetak Bukti Registrasi.

Simple Kan..?
