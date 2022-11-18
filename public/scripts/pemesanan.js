function pemesanan() {
    number = "6285329999577";
    nama = document.getElementById("nama_lengkap").value;
    email = document.getElementById("email_pemesan").value;
    pesan = document.getElementById("pesan").value;

    let url = "https://wa.me/";

    let end_url = `${url}${number}?text=Nama: ${nama} %0AEmail: ${email} %0APesan: ${pesan}`;
    window.open(end_url, "_blank");
}
