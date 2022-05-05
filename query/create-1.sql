create table transaksi(id int auto increment primary key, tanggal_order date, status_pelunasan boolean default false, tanggal_pembayaran date);

INSERT INTO transaksi(tanggal_order,status_pelunasan,tanggal_pembayaran) VALUES ('2022-01-01',true,'2022-02-02'),('2022-01-01',false,'2022-02-02'),('2022-01-01',false,'2022-02-02');