@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <style>
        .banner-container {

            width: auto;
            height: 400px;
            position: relative;
            overflow: hidden;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #1a2736 0%, #2c3e50 100%);
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
            margin-top: 10px;
        }

        .diagonal-overlay {
            position: absolute;
            top: 0;
            right: 0;
            width: 80%;
            height: 100%;
            background: white;
            clip-path: polygon(100% 0, 0 0, 100% 100%);
            background: white url('{{ asset('storage/img.jpg') }}') no-repeat center center;
            background-size: cover;

        }

        .content-left {
            position: absolute;
            left: 40px;
            top: 40px;
            color: white;
            width: 40%;
        }

        .content-right {
            position: absolute;
            right: 40px;
            top: 40px;
            text-align: right;
            width: 40%;
        }

        .title {
            font-size: 2.5em;
            margin: 0;
            font-weight: bold;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s forwards;
        }

        .subtitle {
            font-size: 1.2em;
            margin-top: 10px;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s 0.2s forwards;
        }

        .features {
            margin-top: 30px;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s 0.4s forwards;
        }

        .feature {
            display: flex;
            align-items: center;
            margin: 10px 0;
            gap: 10px;
        }

        .feature-icon {
            width: 24px;
            height: 24px;
            background: #ffd700;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .cta-button {
            display: inline-block;
            padding: 12px 30px;
            background: #ffd700;
            color: #1a2736;
            text-decoration: none;
            border-radius: 25px;
            font-weight: bold;
            margin-top: 20px;
            transition: transform 0.3s, box-shadow 0.3s;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s 0.6s forwards;
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(255, 215, 0, 0.3);
        }

        .contact-info {
            position: absolute;
            bottom: 40px;
            left: 40px;
            display: flex;
            align-items: center;
            gap: 20px;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s 0.8s forwards;
        }

        .phone {
            display: flex;
            align-items: center;
            gap: 10px;
            color: white;
        }

        .website {
            color: white;
            text-decoration: none;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    <div class="banner-container">
        <div class="diagonal-overlay"></div>

        <div class="content-left">
            <h1 class="title">Digital Marketing</h1>
            <p class="subtitle">Expert Solutions for Your Business</p>

            <div class="features">
                <div class="feature">
                    <div class="feature-icon">✓</div>
                    <span>SEO Optimization</span>
                </div>
                <div class="feature">
                    <div class="feature-icon">✓</div>
                    <span>Social Media Marketing</span>
                </div>
                <div class="feature">
                    <div class="feature-icon">✓</div>
                    <span>Content Strategy</span>
                </div>
            </div>

            <a href="#" class="cta-button" onmouseover="this.style.background='#ffed4a'"
                onmouseout="this.style.background='#ffd700'">
                Get Started
            </a>
        </div>

        <div class="content-right">
            <img src="/api/placeholder/300/200" alt="Marketing Team"
                style="border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
        </div>

        <div class="contact-info">
            <div class="phone">
                <span>+1 (555) 123-4567</span>
            </div>
            <a href="#" class="website">www.example.com</a>
        </div>
    </div>
    <script>
        document.querySelectorAll('.feature').forEach((feature, index) => {
            feature.style.animation = `fadeInUp 0.8s ${0.4 + (index * 0.1)}s forwards`;
        });
        banner.addEventListener('mouseleave', () => {
            banner.style.transform = 'rotateY(0deg) rotateX(0deg)';
        });
    </script>
@endsection
