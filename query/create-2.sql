create table detail_transaction(id int auto increment primary key, id_transaksi int FOREIGN KEY REFERENCES transaksi(id), harga int, jumlah int, subtotal int);

INSERT INTO detail_transaction(id_transaksi,harga,jumlah,subtotal) VALUES (1, 1000, 10, 100), (1, 1000, 10, 100), (1, 1000, 10, 100);