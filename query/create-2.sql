create table detail_transaction(id int auto_increment primary key, id_transaksi int, harga int, jumlah int, subtotal int, Foreign Key(id_transaksi) references transaksi(id))

INSERT INTO detail_transaction(id_transaksi,harga,jumlah,subtotal) VALUES (1, 1000, 10, 100), (1, 1000, 10, 100), (1, 1000, 10, 100);