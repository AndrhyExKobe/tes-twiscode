create table transaksi(id int auto increment primary key, tanggal_order datetime, status_pelunasan boolean default false, tanggal_pembayaran datetime);

INSERT INTO transaksi(tanggal_order,status_pelunasan,tanggal_pembayaran) VALUES ('2022-01-01 02:00:00',true,'2022-02-02 01:00:00'),('2022-01-01 03:00:00',false,'2022-02-02 01:00:00'),('2022-01-01 01:00:00',false,'2022-02-02 01:00:00');