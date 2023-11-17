CREATE DATABASE IF NOT EXISTS universitas_natar;
USE universitas_natar;

CREATE TABLE IF NOT EXISTS mahasiswa (
    nim VARCHAR(10) PRIMARY KEY,
    nama VARCHAR(100),
    program_studi VARCHAR(10)
);
