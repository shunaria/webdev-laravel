@extends('layouts.master')

@section('title', 'About Me - My Personal Blog')

@section('content')
    <h1>About Me</h1>

    
    <div style="display: flex; gap: 30px; margin-bottom: 30px;">
        <div style="flex: 2;">
            <p>I'm an APP developer who is trying to graduate from college while wanting to study to make games and flying a drone.</p>
            
            <p>When I'm not coding or writing, you will see me exchanging ideas with my friends .</p>
        </div>
        
        <div style="flex: 1;">
            <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                <h3 style="margin-bottom: 15px; color: var(--primary);">Skills & Expertise</h3>
                <ul style="list-style: none; padding: 0;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #f0f0f0;"><i class="fas fa-check-circle" style="color: var(--accent); margin-right: 10px;"></i> Laravel & PHP</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #f0f0f0;"><i class="fas fa-check-circle" style="color: var(--accent); margin-right: 10px;"></i> UI/UX Design</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #f0f0f0;"><i class="fas fa-check-circle" style="color: var(--accent); margin-right: 10px;"></i> Technical Writing</li>
                </ul>
            </div>
        </div>
    </div>
    
    <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
        <h3 style="margin-bottom: 20px; color: var(--primary);">My Journey</h3>
        <div style="display: flex; margin-bottom: 20px;">
            <div style="flex: 1; padding-right: 20px;">
                <h4 style="color: var(--primary); margin-bottom: 10px;">Education</h4>
                <p>UCM, Indonesia</p>
            </div>
            <div style="flex: 1; padding-left: 20px; border-left: 1px solid #f0f0f0;">
                <h4 style="color: var(--primary); margin-bottom: 10px;">Experience</h4>
                <p>IT student.</p>
                <p>vice leader at a after college stundent activity</p>
            </div>
        </div>
        
        <p>I'm passionate about at creating games and discussing idea to make a game better </p>
    </div>
@endsection