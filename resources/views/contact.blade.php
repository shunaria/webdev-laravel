@extends('layout')

@section('content')
    <h1>Get In Touch</h1>
    
    <p style="font-size: 1.2rem; margin-bottom: 30px;">I'd love to hear from you! Whether you have a question, feedback, or just want to say hello, feel free to reach out using the form below.</p>
    
    <div style="display: flex; gap: 30px; margin-bottom: 40px;">
        <div style="flex: 1;">
            <div class="contact-form">
                <form action="/contact" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" placeholder="John Doe" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" id="email" name="email" placeholder="john@example.com" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" placeholder="How can I help you?" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" placeholder="Your message here..." required></textarea>
                    </div>
                    
                    <button type="submit" class="btn"><i class="fas fa-paper-plane"></i> Send Message</button>
                </form>
            </div>
        </div>
        
        <div style="flex: 1;">
            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); height: 100%;">
                <h3 style="margin-bottom: 20px; color: var(--primary);">Contact Information</h3>
                
                <div style="margin-bottom: 25px;">
                    <div style="display: flex; align-items: center; margin-bottom: 15px;">
                        <div style="width: 40px; height: 40px; background: var(--primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h4 style="margin-bottom: 5px; color: var(--text);">Location</h4>
                            <p style="color: var(--light-text);">San Francisco, CA</p>
                        </div>
                    </div>
                    
                    <div style="display: flex; align-items: center; margin-bottom: 15px;">
                        <div style="width: 40px; height: 40px; background: var(--primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h4 style="margin-bottom: 5px; color: var(--text);">Email</h4>
                            <p style="color: var(--light-text);">hello@janesmith.dev</p>
                        </div>
                    </div>
                    
                    <div style="display: flex; align-items: center;">
                        <div style="width: 40px; height: 40px; background: var(--primary); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <h4 style="margin-bottom: 5px; color: var(--text);">Availability</h4>
                            <p style="color: var(--light-text);">Mon-Fri: 9am - 5pm PST</p>
                        </div>
                    </div>
                </div>
                
                <div>
                    <h4 style="margin-bottom: 15px; color: var(--primary);">Connect with me</h4>
                    <div class="social-links">
                    <a href="https://www.instagram.com/shunaria_wolts276"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/christian-laury-98443333b/"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/shunaria"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div style="background: linear-gradient(135deg, #ff6b6b, #ff8e8e); color: white; padding: 25px; border-radius: 12px; text-align: center;">
        <h3 style="margin-bottom: 10px;">Looking for collaboration?</h3>
        <p>I'm always open to discussing new projects, creative ideas, or opportunities to be part of your vision.</p>
    </div>
@endsection