-- Membuat database "florism" jika belum ada
CREATE DATABASE IF NOT EXISTS florism;

-- Menggunakan database "florism"
USE florism;

-- Membuat tabel "nama_pelanggan"
CREATE TABLE IF NOT EXISTS nama_pelanggan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    alamat VARCHAR(255),
    email VARCHAR(255),
    no_telepon VARCHAR(15)
);

-- Membuat tabel "tiket"
CREATE TABLE IF NOT EXISTS tiket (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_tiket VARCHAR(255) NOT NULL,
    harga DECIMAL(10, 2),
    tanggal_pembelian DATE,
    pelanggan_id INT,
    FOREIGN KEY (pelanggan_id) REFERENCES nama_pelanggan(id)
);

-- Membuat tabel "tempatwisata"
CREATE TABLE IF NOT EXISTS tempatwisata (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_tempat VARCHAR(255) NOT NULL,
    lokasi VARCHAR(255),
    deskripsi TEXT
);

-- Membuat tabel "pembayaran"
CREATE TABLE IF NOT EXISTS pembayaran (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tiket_id INT,
    jumlah_pembayaran DECIMAL(10, 2),
    metode_pembayaran VARCHAR(50),
    tanggal_pembayaran DATE,
    FOREIGN KEY (tiket_id) REFERENCES tiket(id)
);

-- Mengisi data ke dalam tabel "nama_pelanggan"
INSERT INTO nama_pelanggan (nama, alamat, email, no_telepon)
VALUES
    ('Shafiq', 'Jl. Contoh No. 123', 'john@example.com', '123-456-7890'),
    ('Jane Smith', 'Jl. Sample No. 456', 'jane@example.com', '987-654-3210');
    ('Farhan', 'Jl. Sample No. 456', 'jane@example.com', '987-654-3210');

-- Mengisi data ke dalam tabel "tiket"
INSERT INTO tiket (nama_tiket, harga, tanggal_pembelian, pelanggan_id)
VALUES
    ('Tiket A', 50.000, '2023-11-08', 1), -- Mengacu pada pelanggan dengan ID 1 (John Doe)
    ('Tiket B', 75.000, '2023-11-08', 2); -- Mengacu pada pelanggan dengan ID 2 (Jane Smith)
