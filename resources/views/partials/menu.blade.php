<div class="sidebar">
    <div class="sidebar-header">
        <img src="{{ asset('image/images.jpeg') }}" alt="Profile" class="profile-img">
        <h2>Jane Smith</h2>
        <p>Web Developer & Writer</p>
    </div>
    
    <div class="sidebar-nav">
        <ul>
            <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="/about" class="{{ request()->is('about') ? 'active' : '' }}"><i class="fas fa-user"></i> About</a></li>
            <li><a href="/blog" class="{{ request()->is('blog') ? 'active' : '' }}"><i class="fas fa-blog"></i> Blog</a></li>
            <li><a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}"><i class="fas fa-envelope"></i> Contact</a></li>
        </ul>
    </div>
    
    <div class="social-links">
                <a href="https://www.instagram.com/shunaria_wolts276"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/christian-laury-98443333b/"><i class="fab fa-linkedin"></i></a>
                <a href="https://github.com/shunaria"><i class="fab fa-github"></i></a>
    </div>
</div>