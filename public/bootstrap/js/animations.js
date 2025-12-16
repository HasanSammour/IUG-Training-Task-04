// Simple Scripts for Task 04
// Auto-hide alerts after 5 seconds
setTimeout(() => {
    document.querySelectorAll('.alert').forEach(alert => {
        alert.classList.remove('show');
    });
}, 5000);

// Delete confirmation
document.querySelectorAll('.delete-form').forEach(form => {
    form.addEventListener('submit', function(e) {
        if (!confirm('Are you sure you want to delete this product?')) {
            e.preventDefault();
        }
    });
});

// Main animation controller - NO MORE DELAYS
document.addEventListener('DOMContentLoaded', function() {
    console.log('Animations script loaded - Task 04 (No Delays)');
    
    // Make all animated elements visible immediately
    const allAnimatedElements = document.querySelectorAll(
        '.slide-left, .slide-right, .fade-in, .slide-in, .stats-card, .stats-card-alt'
    );
    
    allAnimatedElements.forEach(el => {
        el.style.opacity = '1';
        el.style.animationPlayState = 'running';
    });
    
    // Add hover effects to cards
    const cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        card.classList.add('card-hover-animate');
        
        // Add click ripple effect
        card.addEventListener('click', function(e) {
            if (e.target.tagName === 'A' || e.target.tagName === 'BUTTON' || e.target.closest('a') || e.target.closest('button')) {
                return;
            }
            
            const ripple = document.createElement('span');
            const rect = card.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.style.cssText = `
                position: absolute;
                border-radius: 50%;
                background: rgba(0, 123, 255, 0.3);
                transform: scale(0);
                animation: ripple 0.6s linear;
                width: ${size}px;
                height: ${size}px;
                top: ${y}px;
                left: ${x}px;
                pointer-events: none;
                z-index: 1;
            `;
            
            card.style.position = 'relative';
            card.style.overflow = 'hidden';
            card.appendChild(ripple);
            
            setTimeout(() => ripple.remove(), 600);
        });
    });
    
    // Add hover effect to buttons
    const buttons = document.querySelectorAll('.btn');
    buttons.forEach(btn => {
        btn.classList.add('glow-button');
        
        // Add click ripple effect to buttons
        btn.addEventListener('click', function(e) {
            const ripple = document.createElement('span');
            const rect = btn.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.style.cssText = `
                position: absolute;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.5);
                transform: scale(0);
                animation: ripple 0.6s linear;
                width: ${size}px;
                height: ${size}px;
                top: ${y}px;
                left: ${x}px;
                pointer-events: none;
            `;
            
            btn.style.position = 'relative';
            btn.style.overflow = 'hidden';
            btn.appendChild(ripple);
            
            setTimeout(() => ripple.remove(), 600);
        });
    });
    
    // Add scroll animations for elements as they come into view
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in-view');
            }
        });
    }, observerOptions);
    
    // Observe elements for scroll animations
    document.querySelectorAll('.slide-left, .slide-right, .slide-in').forEach(el => {
        observer.observe(el);
    });
});

// Fallback for older browsers
if (!('IntersectionObserver' in window)) {
    document.querySelectorAll('.slide-left, .slide-right, .slide-in, .stats-card, .stats-card-alt').forEach(el => {
        el.style.opacity = '1';
        el.style.animation = 'none';
    });
}