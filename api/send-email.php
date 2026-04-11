<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject = strip_tags(trim($_POST["subject"]));
    $message = trim($_POST["message"]);

    // Email tujuan (Email Anda)
    $to = "muhammadrizkyapryansyah@gmail.com";
    
    // Subjek email yang akan muncul di inbox Anda
    $email_subject = "Portofolio Contact: $subject";

    // Isi email
    $email_body = "Anda menerima pesan baru dari formulir kontak portofolio.\n\n".
                  "Nama: $name\n".
                  "Email: $email\n".
                  "Subjek: $subject\n\n".
                  "Pesan:\n$message";

    // Header email
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email";

    // Kirim email
    if (mail($to, $email_subject, $email_body, $headers)) {
        // Jika berhasil, arahkan kembali ke halaman utama dengan pesan sukses
        echo "<script>alert('Terima kasih! Pesan Anda telah terkirim.'); window.location.href='/';</script>";
    } else {
        // Jika gagal
        echo "<script>alert('Maaf, terjadi kesalahan saat mengirim pesan.'); window.history.back();</script>";
    }
} else {
    // Jika mencoba akses langsung file ini tanpa POST
    header("Location: /");
    exit;
}
?>