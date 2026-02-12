<?php

include_once __DIR__ . '../../models/m_user.php';

$user = new anggota();
$data = $user->ambil_data();