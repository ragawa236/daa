# Analisis Sistem Beasiswa Prestasi Kampus Esa Unggul

## 1. Stakeholders & Entitas yang Terlibat
- **Mahasiswa Pendaftar**: Mengajukan aplikasi beasiswa, mengunggah dokumen, dan melengkapi data.
- **Bagian Administrasi Kampus**: Melakukan pengelolaan dan verifikasi data pendaftar.
- **Tim Seleksi Beasiswa**: Mengevaluasi dan menyeleksi berkas serta menilai kelayakan calon penerima.
- **Divisi Keuangan**: Mengelola dana beasiswa dan mengurus pencairan bantuan bagi penerima beasiswa.
- **Pihak Sekolah/Asal Sekolah**: Memberikan surat rekomendasi atau bukti prestasi akademik calon penerima.

## 2. Komponen Business Requirement Diagram
### Use Cases (Fitur Utama)
1. **Pendaftaran Beasiswa**: Mahasiswa mengisi data diri dan mengunggah dokumen persyaratan.
2. **Verifikasi Data Mahasiswa**: Tim Administrasi melakukan pengecekan kelengkapan dokumen dan validitas data.
3. **Seleksi Beasiswa**: Tim Seleksi mengevaluasi data prestasi dan kelayakan berdasarkan persyaratan.
4. **Persetujuan dan Penetapan Penerima**: Daftar calon yang lolos seleksi diajukan untuk persetujuan, dan penerima ditetapkan.
5. **Pengelolaan Dana**: Divisi Keuangan memastikan dana beasiswa siap dicairkan untuk mahasiswa yang memenuhi syarat.
6. **Laporan dan Monitoring**: Memonitor dan melaporkan data penerima beasiswa, dana yang dikeluarkan, dan hasil evaluasi program.

## 3. Alur Proses Business Requirement Diagram
1. **Inisiasi**: Mahasiswa mendaftar dan melengkapi berkas di sistem.
2. **Proses Verifikasi**: Tim Administrasi mengecek kelengkapan dan keaslian dokumen.
3. **Proses Seleksi**: Tim Seleksi menilai kelayakan berdasarkan kriteria, seperti prestasi akademik, dan membuat daftar final penerima.
4. **Persetujuan Akhir**: Data calon penerima yang lolos disetujui oleh pejabat yang berwenang di kampus.
5. **Distribusi Dana**: Divisi Keuangan mengatur pencairan dana sesuai jadwal kepada mahasiswa terpilih.
6. **Pelaporan dan Evaluasi**: Laporan hasil pelaksanaan beasiswa dibuat untuk keperluan evaluasi program.

## 4. Detail Informasi yang Dibutuhkan
- **Kriteria Mahasiswa Penerima**: Informasi akademik, prestasi, dan surat rekomendasi.
- **Data Dokumen Pendukung**: Transkrip nilai, sertifikat prestasi, rekomendasi sekolah, KTP, KK, dan foto.
- **Status Proses**: Status pendaftaran, status verifikasi, status seleksi, dan status pencairan dana.
- **Output Laporan**: Daftar penerima beasiswa, laporan penyaluran dana, dan evaluasi tahunan program beasiswa.

## 5. Contoh Ilustrasi Business Requirement Diagram (BRD)
### Entitas dan Hubungan:
1. **Mahasiswa** ➔ Mendaftar Beasiswa ➔ Mengunggah Dokumen ➔ **Tim Administrasi** (Verifikasi) ➔ **Tim Seleksi** (Evaluasi)
2. **Tim Seleksi** ➔ Menyusun Daftar Penerima ➔ Persetujuan ➔ **Divisi Keuangan** ➔ Distribusi Dana ➔ **Laporan**
