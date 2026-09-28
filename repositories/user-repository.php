<?php
function getUsers() {
    return [
        ['id' => 1, 'name' => 'Admin', 'email' => 'admin@lib.id', 'role' => 'admin'],
        ['id' => 2, 'name' => 'Anggota', 'email' => 'anggota@lib.id', 'role' => 'member'],
    ];
}
function getUser() {
    return ['id' => 1, 'name' => 'Admin', 'email' => 'admin@lib.id', 'role' => 'admin'];
}
function getProfile() {
    return ['phone' => '081234', 'address' => 'Pontianak', 'bio' => 'Pustakawan'];
}
