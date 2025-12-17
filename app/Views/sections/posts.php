<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt Vé Xem Phim Online - CinemaBooking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .movie-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            cursor: pointer;
        }
        .movie-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }
        .movie-poster {
            height: 350px;
            object-fit: cover;
            width: 100%;
        }
        .badge-rating {
            position: absolute;
            top: 10px;
            right: 10px;
            background: rgba(255,193,7,0.9);
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
        }
        .search-section {
            background: linear-gradient(135deg, #1a1a1a 0%, #8B0000 100%);
            padding: 60px 0;
            color: white;
        }
        .genre-badge {
            display: inline-block;
            padding: 5px 15px;
            margin: 5px;
            background: #f8f9fa;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s;
        }
        .genre-badge:hover {
            background: linear-gradient(135deg, #DC143C 0%, #8B0000 100%);
            color: white;
        }
        .movie-info {
            padding: 15px;
        }
        .btn-book {
            background: linear-gradient(135deg, #DC143C 0%, #8B0000 100%);
            border: none;
            color: white;
            padding: 10px 30px;
            border-radius: 25px;
            font-weight: bold;
        }
        .btn-book:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(220,20,60,0.5);
        }
    </style>
</head>
<body>
    <!-- Genre Filter -->
    <section class="bg-light py-3">
        <div class="container">
            <div class="text-center">
                <span class="genre-badge"><i class="fas fa-star me-1"></i>Tất cả</span>
                <span class="genre-badge"><i class="fas fa-fire me-1"></i>Hành động</span>
                <span class="genre-badge"><i class="fas fa-heart me-1"></i>Tình cảm</span>
                <span class="genre-badge"><i class="fas fa-laugh me-1"></i>Hài</span>
                <span class="genre-badge"><i class="fas fa-ghost me-1"></i>Kinh dị</span>
                <span class="genre-badge"><i class="fas fa-dragon me-1"></i>Khoa học viễn tưởng</span>
                <span class="genre-badge"><i class="fas fa-child me-1"></i>Gia đình</span>
            </div>
        </div>
    </section>

    <!-- Main Content - Movie Listings -->
    <main class="container my-5">
        <!-- Now Showing Section -->
        <section class="mb-5">
            <h2 class="mb-4"><i class="fas fa-play-circle text-primary me-2"></i>Phim Đang Chiếu</h2>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card movie-card">
                        <div class="position-relative">
                            <img src="https://via.placeholder.com/300x450/FF6B6B/FFFFFF?text=Avengers" class="movie-poster" alt="Movie">
                            <span class="badge-rating"><i class="fas fa-star"></i> 8.5</span>
                        </div>
                        <div class="movie-info">
                            <h5 class="card-title">Avengers: Endgame</h5>
                            <p class="text-muted small mb-2"><i class="fas fa-clock me-1"></i>181 phút | Hành động</p>
                            <button class="btn btn-book w-100">
                                <i class="fas fa-ticket-alt me-2"></i>Đặt vé ngay
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card movie-card">
                        <div class="position-relative">
                            <img src="https://via.placeholder.com/300x450/4ECDC4/FFFFFF?text=Spider-Man" class="movie-poster" alt="Movie">
                            <span class="badge-rating"><i class="fas fa-star"></i> 9.0</span>
                        </div>
                        <div class="movie-info">
                            <h5 class="card-title">Spider-Man: No Way Home</h5>
                            <p class="text-muted small mb-2"><i class="fas fa-clock me-1"></i>148 phút | Hành động</p>
                            <button class="btn btn-book w-100">
                                <i class="fas fa-ticket-alt me-2"></i>Đặt vé ngay
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card movie-card">
                        <div class="position-relative">
                            <img src="https://via.placeholder.com/300x450/95E1D3/FFFFFF?text=Oppenheimer" class="movie-poster" alt="Movie">
                            <span class="badge-rating"><i class="fas fa-star"></i> 8.8</span>
                        </div>
                        <div class="movie-info">
                            <h5 class="card-title">Oppenheimer</h5>
                            <p class="text-muted small mb-2"><i class="fas fa-clock me-1"></i>180 phút | Tiểu sử</p>
                            <button class="btn btn-book w-100">
                                <i class="fas fa-ticket-alt me-2"></i>Đặt vé ngay
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card movie-card">
                        <div class="position-relative">
                            <img src="https://via.placeholder.com/300x450/F38181/FFFFFF?text=Barbie" class="movie-poster" alt="Movie">
                            <span class="badge-rating"><i class="fas fa-star"></i> 7.9</span>
                        </div>
                        <div class="movie-info">
                            <h5 class="card-title">Barbie</h5>
                            <p class="text-muted small mb-2"><i class="fas fa-clock me-1"></i>114 phút | Hài, Phiêu lưu</p>
                            <button class="btn btn-book w-100">
                                <i class="fas fa-ticket-alt me-2"></i>Đặt vé ngay
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Coming Soon Section -->
        <section class="mb-5">
            <h2 class="mb-4"><i class="fas fa-calendar-alt text-success me-2"></i>Phim Sắp Chiếu</h2>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card movie-card">
                        <div class="position-relative">
                            <img src="https://via.placeholder.com/300x450/A8E6CF/FFFFFF?text=Dune+2" class="movie-poster" alt="Movie">
                            <span class="badge-rating"><i class="fas fa-calendar"></i> 15/12</span>
                        </div>
                        <div class="movie-info">
                            <h5 class="card-title">Dune: Part Two</h5>
                            <p class="text-muted small mb-2"><i class="fas fa-clock me-1"></i>166 phút | Sci-Fi</p>
                            <button class="btn btn-book w-100">
                                <i class="fas fa-bell me-2"></i>Đặt trước
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card movie-card">
                        <div class="position-relative">
                            <img src="https://via.placeholder.com/300x450/FFD3B6/FFFFFF?text=Kung+Fu+Panda" class="movie-poster" alt="Movie">
                            <span class="badge-rating"><i class="fas fa-calendar"></i> 20/12</span>
                        </div>
                        <div class="movie-info">
                            <h5 class="card-title">Kung Fu Panda 4</h5>
                            <p class="text-muted small mb-2"><i class="fas fa-clock me-1"></i>94 phút | Hoạt hình</p>
                            <button class="btn btn-book w-100">
                                <i class="fas fa-bell me-2"></i>Đặt trước
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card movie-card">
                        <div class="position-relative">
                            <img src="https://via.placeholder.com/300x450/FFAAA5/FFFFFF?text=Deadpool+3" class="movie-poster" alt="Movie">
                            <span class="badge-rating"><i class="fas fa-calendar"></i> 25/12</span>
                        </div>
                        <div class="movie-info">
                            <h5 class="card-title">Deadpool 3</h5>
                            <p class="text-muted small mb-2"><i class="fas fa-clock me-1"></i>127 phút | Hành động</p>
                            <button class="btn btn-book w-100">
                                <i class="fas fa-bell me-2"></i>Đặt trước
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card movie-card">
                        <div class="position-relative">
                            <img src="https://via.placeholder.com/300x450/B4A7D6/FFFFFF?text=Avatar+3" class="movie-poster" alt="Movie">
                            <span class="badge-rating"><i class="fas fa-calendar"></i> 30/12</span>
                        </div>
                        <div class="movie-info">
                            <h5 class="card-title">Avatar: The Seed Bearer</h5>
                            <p class="text-muted small mb-2"><i class="fas fa-clock me-1"></i>192 phút | Sci-Fi</p>
                            <button class="btn btn-book w-100">
                                <i class="fas fa-bell me-2"></i>Đặt trước
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="py-5 bg-light rounded-3">
            <div class="container">
                <h2 class="text-center mb-5">Tại Sao Chọn CinemaBooking?</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="text-center">
                            <i class="fas fa-mobile-alt text-primary fa-3x mb-3"></i>
                            <h4>Đặt vé dễ dàng</h4>
                            <p>Đặt vé chỉ với vài thao tác đơn giản trên điện thoại hoặc máy tính</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <i class="fas fa-couch text-success fa-3x mb-3"></i>
                            <h4>Chọn chỗ ngồi</h4>
                            <p>Tự do lựa chọn vị trí ghế ngồi yêu thích của bạn trước khi đến rạp</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <i class="fas fa-credit-card text-danger fa-3x mb-3"></i>
                            <h4>Thanh toán an toàn</h4>
                            <p>Hỗ trợ nhiều phương thức thanh toán an toàn và bảo mật</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Add hover effects and interactivity
        document.querySelectorAll('.movie-card').forEach(card => {
            card.addEventListener('click', function() {
                alert('Chức năng đặt vé đang được phát triển!');
            });
        });

        document.querySelectorAll('.genre-badge').forEach(badge => {
            badge.addEventListener('click', function() {
                document.querySelectorAll('.genre-badge').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>