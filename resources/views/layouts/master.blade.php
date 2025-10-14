<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Personal Blog')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        :root {
            --primary: #4a6bdf;
            --primary-dark: #3a5bc7;
            --secondary: #f8f9fa;
            --text: #333;
            --light-text: #6c757d;
            --accent: #ff6b6b;
            --sidebar-bg: #2c3e50;
            --sidebar-hover: #3498db;
        }
        
        body {
            color: var(--text);
            line-height: 1.6;
            background: linear-gradient(135deg, #f5f7ff 0%, #e4eaff 100%);
            min-height: 100vh;
            position: relative;
        }
        
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                radial-gradient(circle at 10% 20%, rgba(120, 119, 198, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 90% 80%, rgba(255, 119, 198, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 50% 50%, rgba(120, 219, 255, 0.05) 0%, transparent 70%);
            z-index: -1;
        }
        
        .container {
            display: flex;
            min-height: 100vh;
        }
        
        .sidebar {
            width: 260px;
            background: linear-gradient(135deg, var(--sidebar-bg), #34495e);
            color: white;
            padding: 30px 20px;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
            position: fixed;
            height: 100vh;
            overflow-y: auto;
            z-index: 100;
        }
        
        .sidebar::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                radial-gradient(circle at 10% 10%, rgba(255,255,255,0.1) 0%, transparent 30%),
                radial-gradient(circle at 90% 90%, rgba(255,255,255,0.05) 0%, transparent 30%);
            pointer-events: none;
        }
        
        .sidebar-header {
            text-align: center;
            margin-bottom: 40px;
            padding-bottom: 20px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            position: relative;
            z-index: 1;
        }
        
        .profile-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 0 auto 15px;
            border: 4px solid rgba(255,255,255,0.2);
            display: block;
            object-fit: cover;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        
        .sidebar h2 {
            font-size: 1.5rem;
            margin-bottom: 5px;
            font-weight: 600;
        }
        
        .sidebar p {
            font-size: 0.9rem;
            opacity: 0.8;
        }
        
        .sidebar-nav {
            margin-top: 30px;
            position: relative;
            z-index: 1;
        }
        
        .sidebar ul {
            list-style: none;
        }
        
        .sidebar li {
            margin-bottom: 8px;
        }
        
        .sidebar a {
            color: rgba(255,255,255,0.85);
            text-decoration: none;
            padding: 12px 15px;
            display: flex;
            align-items: center;
            border-radius: 8px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .sidebar a::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        
        .sidebar a:hover::before {
            left: 100%;
        }
        
        .sidebar a i {
            margin-right: 12px;
            font-size: 1.1rem;
            width: 20px;
            text-align: center;
        }
        
        .sidebar a:hover, .sidebar a.active {
            background-color: var(--sidebar-hover);
            color: white;
            transform: translateX(5px);
        }
        
        .content {
            flex: 1;
            padding: 30px 40px;
            margin-left: 260px;
            max-width: 900px;
            position: relative;
        }
        
        .content::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                radial-gradient(circle at 20% 30%, rgba(120, 119, 198, 0.05) 0%, transparent 40%),
                radial-gradient(circle at 80% 70%, rgba(255, 119, 198, 0.05) 0%, transparent 40%);
            z-index: -1;
        }
        
        .content h1 {
            margin-bottom: 25px;
            color: var(--primary);
            font-size: 2.5rem;
            position: relative;
            padding-bottom: 15px;
        }
        
        .content h1:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 80px;
            height: 4px;
            background: var(--accent);
            border-radius: 2px;
        }
        
        .content p {
            margin-bottom: 20px;
            font-size: 1.1rem;
            color: var(--text);
        }
        
        .blog-post {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            margin-bottom: 30px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.5);
        }
        
        .blog-post:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }
        
        .blog-post h3 {
            margin-bottom: 15px;
            color: var(--primary);
            font-size: 1.7rem;
        }
        
        .blog-post .date {
            font-size: 0.9rem;
            color: var(--light-text);
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }
        
        .blog-post .date i {
            margin-right: 8px;
        }
        
        .blog-post .excerpt {
            margin-bottom: 20px;
            color: var(--text);
        }
        
        .read-more {
            display: inline-flex;
            align-items: center;
            color: var(--primary);
            font-weight: 600;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .read-more i {
            margin-left: 5px;
            transition: transform 0.3s ease;
        }
        
        .read-more:hover {
            color: var(--primary-dark);
        }
        
        .read-more:hover i {
            transform: translateX(3px);
        }
        
        .contact-form {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            max-width: 650px;
            border: 1px solid rgba(255, 255, 255, 0.5);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--text);
        }
        
        .form-group input, .form-group textarea {
            width: 100%;
            padding: 14px;
            border: 1px solid #e0e6ed;
            border-radius: 8px;
            font-size: 1rem;
            background: rgba(255, 255, 255, 0.7);
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }
        
        .form-group input:focus, .form-group textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(74, 107, 223, 0.2);
            background: rgba(255, 255, 255, 0.9);
        }
        
        .btn {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            border: none;
            padding: 14px 28px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: inline-flex;
            align-items: center;
        }
        
        .btn i {
            margin-right: 8px;
        }
        
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(74, 107, 223, 0.4);
        }
        
        .footer {
            margin-top: 50px;
            padding-top: 20px;
            border-top: 1px solid rgba(0,0,0,0.05);
            text-align: center;
            color: var(--light-text);
            font-size: 0.9rem;
        }
        
        .social-links {
            margin-top: 15px;
        }
        
        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--primary);
            color: white;
            margin: 0 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        
        .social-links a:hover {
            background: var(--primary-dark);
            transform: translateY(-3px);
        }
        
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                position: relative;
                height: auto;
            }
            
            .content {
                margin-left: 0;
                padding: 20px;
            }
            
            .container {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        @include('partials.menu')
        
        <div class="content">
            @yield('content')
            
            @include('partials.footer')
        </div>
    </div>
</body>
</html>