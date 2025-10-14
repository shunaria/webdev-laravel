@extends('layouts.master')

@section('content')
    <h1>My Blog Posts</h1>
    <div class="blog-post">
        <h3>Explaining Calcullus</h3>
        <div class="date"><i class="far fa-calendar-alt"></i> April 10, 2025</div>
        <div class="excerpt">
            <p>Numerical methods are used to solve mathematical problems that are difficult to solve analytically. This paper discusses the application of Jacobi and Gauss-Seidel methods for systems of linear equations, Newton-Raphson for nonlinear equations, as well as 4th-order Runge-Kutta for differential equations. The results show that the Gauss-Seidel method converges faster, Newton-Raphson is effective for finding roots, and Runge-Kutta produces more accurate solutions compared to the Euler method.</p>

            <p>Many engineering problems involve complex mathematical systems, such as systems of linear and differential equations. Analytical methods are often inadequate, so numerical methods are needed to obtain efficient approximate solutions.</p>

            <p>Jacobi & Gauss-Seidel: Solving systems of linear equations iteratively.</p>

            <p>Newton-Raphson: Finding roots of equations using the first derivative approach.</p>

            <p>4th-order Runge-Kutta: Solving ordinary differential equations numerically with high accuracy.</p        >

            <p>Gauss-Seidel converges faster compared to Jacobi. Newton-Raphson quickly finds roots if the initial guess is accurate. 4th-order Runge-Kutta produces more accurate solutions than the Euler method for ODEs.</p>

            <p>Conclusion: Numerical methods are very useful in solving engineering mathematical problems. The selection of the appropriate method depends on the type of problem and accuracy requirements.</p>
        </div>
    </div>
    
    <div class="blog-post">
        <h3>HELLO WORLD !</h3>
        <div class="date"><i class="far fa-calendar-alt"></i> March 22, 2025 </div>
        <div class="excerpt">
            <p>The first of my blog, hello there i'm a college student from UCM where I'm learning to become an APP developer.</p>
        </div>
    </div>
@endsection