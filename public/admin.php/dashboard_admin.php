<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel | E-Perpus</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="admin_style.css?v=1.0">
    <style>
        :root { --admin-primary: #00d2d3; --glass: rgba(255, 255, 255, 0.1); }
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        body { background: linear-gradient(135deg, #2c3e50 0%, #000000 100%); min-height: 100vh; color: white; display: flex; }
        
        /* Sidebar */
        .sidebar { width: 260px; background: rgba(0, 0, 0, 0.4); backdrop-filter: blur(15px); padding: 30px; border-right: 1px solid rgba(255,255,255,0.1); display: flex; flex-direction: column; }
        .sidebar h2 { color: #e2e9f0; margin-bottom: 40px; font-weight: 700; text-align: center; border-bottom: 2px solid #e2e9f0; padding-bottom: 10px; }
        .nav-item { padding: 15px; border-radius: 15px; margin-bottom: 12px; cursor: pointer; transition: 0.3s; display: flex; align-items: center; gap: 15px; color: #b2bec3; text-decoration: none; font-weight: 500; }
        .nav-item:hover, .active { background: var(--admin-primary); color: #e2e9f0; }
        .logout { margin-top: auto; color: #ff7675; }

        /* Content Area */
        .main-content { flex: 1; padding: 40px; overflow-y: auto; }
        .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; }
        .welcome-box { background: var(--glass); padding: 25px; border-radius: 20px; border: 1px solid var(--glass-border); margin-bottom: 30px; }
        
        /* Stat Cards */
        .stats { display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; }
        .card { background: var(--glass); padding: 30px; border-radius: 25px; border: 1px solid rgba(255,255,255,0.1); position: relative; transition: 0.3s; }
        .card:hover { transform: translateY(-5px); border-color: var(--admin-primary); }
        .card i { position: absolute; right: 25px; bottom: 25px; font-size: 3.5rem; color: var(--admin-primary); opacity: 0.3; }
        .card h3 { font-size: 2.5rem; margin-bottom: 5px; }

        .nav-item:hover{
            background-color: #e2e9f0;
            color: #000000;
        }

        .nav-item.active{
            background: #e2e9f0;
            color: #000000;
        }

        .nav-item:hover.active{
            background-color: #e2e9f0;
            color: #000000;
        }

    </style>
</head>
<body>
    <div class="sidebar">
        <h2>ADMIN</h2>
        <a href="?url=admin/dashboard" class="nav-item active"><i class="fas fa-chart-pie"></i> Dashboard</a>
        <a href="?url=admin/kelola_buku" class="nav-item"><i class="fas fa-book-medical"></i> Kelola Buku</a>
        <a href="?url=admin/kelola_anggota" class="nav-item"><i class="fas fa-user-shield"></i> Kelola Anggota</a>
        <a href="?url=auth/login" class="nav-item logout"><i class="fas fa-power-off"></i> Logout</a>
    </div>

    <div class="main-content">
        <div class="header">
            <div>
                <h1>Ringkasan Sistem</h1>
                <p style="color: #b2bec3;">Pantau data perpustakaan di sini.</p>
            </div>
            <div class="admin-profile"><i class="fas fa-user-circle"></i> Master Admin</div>
        </div>

        <div class="stats">
            <div class="card">
                <h3>0</h3>
                <p>Total Koleksi Buku</p>
                <i class="fas fa-layer-group"></i>
            </div>
            <div class="card">
                <h3>0</h3>
                <p>Anggota Terdaftar</p>
                <i class="fas fa-users"></i>
            </div>
        </div>
    </div>
</body>
</html>