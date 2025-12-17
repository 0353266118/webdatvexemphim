<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'CinemaBooking - Đặt Vé Xem Phim Online' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .navbar {
            background: linear-gradient(135deg, #1a1a1a 0%, #8B0000 100%) !important;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
            padding: 1rem 0;
        }
        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
            text-decoration: none;
            transition: all 0.3s ease;
            color: white !important;
        }
        .navbar-brand small {
            color: white !important;
        }
        .navbar-brand i {
            background: linear-gradient(45deg, #DC143C, #FF6347);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: pulse 2s ease-in-out infinite;
        }
        .nav-link {
            font-size: 1.05rem;
            font-weight: 500;
            margin: 0 8px;
            padding: 8px 16px !important;
            border-radius: 25px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            color: white !important;
        }
        .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(220,20,60,0.3), transparent);
            transition: left 0.5s;
        }
        .nav-link:hover::before {
            left: 100%;
        }
        .nav-link:hover {
            background: linear-gradient(135deg, rgba(146, 7, 34, 0.92) 0%, rgba(216, 11, 11, 0.56) 100%);
            transform: translateY(-2px);
        }
        .nav-link i {
            transition: transform 0.3s ease;
        }
        .nav-link:hover i {
            transform: scale(1.2);
        }

        .navbar-toggler {
            border: none;
            padding: 4px 8px;
        }
        .navbar-toggler:focus {
            box-shadow: none;
        }
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 1%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }
        @media (max-width: 991px) {
            .navbar-nav {
                text-align: center;
                margin-top: 1rem;
            }
            .nav-link {
                margin: 5px 0;
                display: inline-block;
                width: auto;
            }
        }
        /* Active link styling */
        .nav-link.active {
            background-color: rgba(255,255,255,0.25);
            box-shadow: inset 0 2px 4px rgba(0,0,0,0.2);
        }
        /* Smooth scroll */
        html {
            scroll-behavior: smooth;
        }
        /* Loading animation for brand */
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
        /* User account section */
        .user-account {
            background-color: rgba(255,255,255,0.1);
            border-radius: 25px;
            padding: 5px 15px;
            margin-left: 10px;
            color: white !important;
        }
        .user-account:hover {
            background-color: rgba(255,255,255,0.2);
            color: white !important;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="fas fa-film me-2"></i>
                CinemaBooking
                <small class="d-block" style="font-size: 0.6em; font-weight: 400;">Đặt vé xem phim</small>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?= (current_url() == base_url('/')) ? 'active' : '' ?>" href="/">
                            <i class="fas fa-home me-1"></i> Trang chủ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (strpos(current_url(), '/phim') !== false) ? 'active' : '' ?>" href="/phim">
                            <i class="fas fa-film me-1"></i> Phim
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (strpos(current_url(), '/rap') !== false) ? 'active' : '' ?>" href="/rap">
                            <i class="fas fa-building me-1"></i> Rạp chiếu
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (strpos(current_url(), '/khuyen-mai') !== false) ? 'active' : '' ?>" href="/khuyen-mai">
                            <i class="fas fa-tags me-1"></i> Khuyến mãi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= (strpos(current_url(), '/ve-cua-toi') !== false) ? 'active' : '' ?>" href="/ve-cua-toi">
                            <i class="fas fa-ticket-alt me-1"></i> Vé của tôi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link user-account" href="/dang-nhap">
                            <i class="fas fa-user-circle me-1"></i> Đăng nhập
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content Wrapper -->
    <main class="main-content">