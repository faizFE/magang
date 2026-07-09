let nama = "budi";
let umur = 18;
let tinggi_badan = 164.5;
let sudah_menikah = false;

let biodata = `halo nama saya ${nama}, umur saya ${umur} tahun, tinggi badan saya sekitar ${tinggi_badan} cm, dan status saya ${sudah_menikah ? "sudah menikah" : "belum menikah"}.`;
console.log(biodata);

const luasPersegiPanjang = (panjang, lebar) => {
    return panjang * lebar;
};
console.log(`Luas persegi panjang dengan panjang 5 dan lebar 9 adalah ${luasPersegiPanjang(5, 9)}.`);

const cekDewasa = (umur) => {
    if (umur >= 18) {
        return "Anda sudah dewasa.";
    }else {
        return "Anda belum dewasa.";
    }
};
console.log(cekDewasa(19));

const sapaFormal = (nama, gelar = "bapak/ibu") => {
    return `Selamat pagi ${nama} ${gelar}.`;
};
console.log(sapaFormal("Andi"));
console.log(sapaFormal("Siti", "Mbak"));

let nilaiUjian = [75, 85, 90, 60, 70];
let ganjil = nilaiUjian.filter(nilai => nilai % 2 !== 0);
console.log(`Nilai ujian yang ganjil adalah: ${ganjil.join(", ")}.`);

let mahasiswa = {
    nama: "andi",
    jurusan: "teknik informatika",
    IPK: 4.0,
    sapa: function() {
        return `Halo, nama saya ${this.nama}, saya mahasiswa jurusan ${this.jurusan} dengan IPK ${this.IPK}.`;
    }
};
console.log(mahasiswa.sapa());

let daftarMahasiswa = [
    {nama: "Andi", jurusan: "Teknik Informatika", IPK: 3.5},
    {nama: "Budi", jurusan: "Sistem Informasi", IPK: 3.8},
    {nama: "Citra", jurusan: "Teknik Elektro", IPK: 3.2},
];
daftarMahasiswa.forEach(mahasiswa => {
    console.log(`Nama: ${mahasiswa.nama}, Jurusan: ${mahasiswa.jurusan}, IPK: ${mahasiswa.IPK}`);
});
