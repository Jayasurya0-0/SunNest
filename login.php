<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - SunNest Solar Warmth Solutions</title>
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#E8891D',
                        secondary: '#8dd3c7'
                    },
                    borderRadius: {
                        'none': '0px',
                        'sm': '4px',
                        DEFAULT: '8px',
                        'md': '12px',
                        'lg': '16px',
                        'xl': '20px',
                        '2xl': '24px',
                        '3xl': '32px',
                        'full': '9999px',
                        'button': '8px'
                    }
                }
            }
        }
    </script>
    <style>
        :where([class^="ri-"])::before {
            content: "\f3c2";
        }
    </style>
</head>

<body class="bg-gray-50 min-h-screen">
    <header class="bg-white shadow-sm border-b border-gray-100 relative z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center"><img style="width: 50px;height: 50px;" src="Images/WhatsApp_Image_2025-10-17_at_10.48.28_fb6ac561-removebg-preview.png">
                    <div style="color:rgba(248, 161, 0, 0.977) ;" class="font-[''] text-2xl text-gray-900 ">SunNest</div>
                </div>
                <nav class="hidden md:flex space-x-8">
                    <a href="index.html" class="text-gray-700 hover:text-primary transition-colors">Home</a>
                    <a href="About.html" class="text-gray-700 hover:text-primary transition-colors">About</a>
                    <a href="Contactus.html" class="text-gray-700 hover:text-primary transition-colors">Contact</a>
                    <a href="login.php" class="text-primary font-medium transition-colors">Login</a>
                </nav>
                <div class="flex items-center space-x-4">
                    <div class="relative hidden sm:block">
                        <input type="text" placeholder="Search products..."
                            class="pl-10 pr-4 py-2 border border-gray-200 rounded-lg text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent w-64">
                        <div
                            class="absolute left-3 top-1/2 transform -translate-y-1/2 w-4 h-4 flex items-center justify-center">
                            <i class="ri-search-line text-gray-400 text-sm"></i>
                        </div>
                    </div>
                    <a href="cart.html"
                        data-readdy="true" class="relative p-2 text-primary">
                        <div class="w-6 h-6 flex items-center justify-center">
                            <i class="ri-shopping-cart-line text-xl"></i>
                        </div>
                        <span
                            class="absolute -top-1 -right-1 bg-primary text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">2</span>
                    </a>
                </div>
            </div>
        </div>
    </header>
    
    <div class="min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8"
        style="background-image: url('https://readdy.ai/api/search-image?query=soft%20gradient%20background%20with%20subtle%20solar%20panel%20texture%20and%20warm%20sunlight%20rays%20creating%20peaceful%20atmosphere%2C%20clean%20minimalist%20design%20with%20light%20blue%20and%20white%20colors%2C%20perfect%20for%20login%20page%20backdrop%20with%20gentle%20warmth%20feeling&width=1920&height=1080&seq=loginbg1&orientation=landscape'); background-size: cover; background-position: center;">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <div class="text-center mb-8">
            </div>
        </div>
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow-xl rounded-xl sm:px-10 border border-gray-100">
                <div class="mb-6">
                    <h2 class="text-2xl font-bold text-gray-900 text-center mb-2">Welcome Back</h2>
                    <p class="text-gray-600 text-center text-sm">Sign in to your SunNest account</p>
                </div>
                
                <!-- Alert message div -->
                <div id="alert-message" class="hidden mb-4 p-4 rounded-lg text-sm"></div>
                
                <form id="login-form" class="space-y-6">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                        <div class="relative">
                            <input id="email" name="email" type="email" autocomplete="email" required
                                class="w-full px-4 py-3 border border-gray-300 rounded-button focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent text-sm"
                                placeholder="Enter your email address">
                            <div
                                class="absolute right-3 top-1/2 transform -translate-y-1/2 w-5 h-5 flex items-center justify-center">
                                <i class="ri-mail-line text-gray-400 text-sm"></i>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                        <div class="relative">
                            <input id="password" name="password" type="password" autocomplete="current-password"
                                required
                                class="w-full px-4 py-3 pr-12 border border-gray-300 rounded-button focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent text-sm"
                                placeholder="Enter your password">
                            <button type="button"
                                class="absolute right-3 top-1/2 transform -translate-y-1/2 w-5 h-5 flex items-center justify-center text-gray-400 hover:text-gray-600">
                                <i class="ri-eye-line text-sm toggle-password"></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember-me" name="remember-me" type="checkbox" class="sr-only">
                            <div
                                class="w-4 h-4 border-2 border-gray-300 rounded-sm flex items-center justify-center cursor-pointer remember-checkbox">
                                <i class="ri-check-line text-white text-xs hidden check-icon"></i>
                            </div>
                            <label for="remember-me" class="ml-2 block text-sm text-gray-700 cursor-pointer">Remember
                                me</label>
                        </div>
                        <a href="#" class="text-sm text-primary hover:text-blue-600 transition-colors">Forgot
                            password?</a>
                    </div>
                    <div>
                        <button type="submit"
                            class="w-full bg-primary text-white py-3 px-4 rounded-button font-medium hover:bg-blue-600 transition-colors whitespace-nowrap">Sign
                            In</button>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-white text-gray-500">or continue with</span>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-3">
                        <button type="button"
                            class="w-full inline-flex justify-center items-center py-3 px-4 border border-gray-300 rounded-button bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 transition-colors">
                            <div class="w-5 h-5 flex items-center justify-center mr-2">
                                <i class="ri-google-fill text-red-500"></i>
                            </div>
                            Google
                        </button>
                        <button type="button"
                            class="w-full inline-flex justify-center items-center py-3 px-4 border border-gray-300 rounded-button bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 transition-colors">
                            <div class="w-5 h-5 flex items-center justify-center mr-2">
                                <i class="ri-apple-fill text-gray-900"></i>
                            </div>
                            Apple
                        </button>
                    </div>
                </form>
                <div class="mt-6 text-center">
                    <p class="text-sm text-gray-600">
                        Don't have an account?
                        <a href="signin.php"
                            data-readdy="true"
                            class="text-primary hover:text-blue-600 font-medium transition-colors">Sign up for free</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="mt-8 text-center">
            <div class="flex justify-center space-x-6 text-sm text-gray-500">
                <a href="privacy.html" class="hover:text-gray-700 transition-colors">Privacy Policy</a>
                <a href="terms.html" class="hover:text-gray-700 transition-colors">Terms of Service</a>
                <a href="#" class="hover:text-gray-700 transition-colors">Help Center</a>
            </div>
            <p class="mt-4 text-xs text-gray-400">&copy; 2025 SunNest. All rights reserved.</p>
        </div>
    </div>
    
    <script id="password-toggle-functionality">
        document.addEventListener('DOMContentLoaded', function () {
            const passwordInput = document.getElementById('password');
            const toggleButton = document.querySelector('.toggle-password');
            const toggleIcon = toggleButton;
            toggleButton.addEventListener('click', function () {
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    toggleIcon.classList.remove('ri-eye-line');
                    toggleIcon.classList.add('ri-eye-off-line');
                } else {
                    passwordInput.type = 'password';
                    toggleIcon.classList.remove('ri-eye-off-line');
                    toggleIcon.classList.add('ri-eye-line');
                }
            });
        });
    </script>
    
    <script id="checkbox-functionality">
        document.addEventListener('DOMContentLoaded', function () {
            const checkbox = document.getElementById('remember-me');
            const checkboxVisual = document.querySelector('.remember-checkbox');
            const checkIcon = document.querySelector('.check-icon');
            checkboxVisual.addEventListener('click', function () {
                checkbox.checked = !checkbox.checked;
                if (checkbox.checked) {
                    checkboxVisual.classList.remove('border-gray-300');
                    checkboxVisual.classList.add('border-primary', 'bg-primary');
                    checkIcon.classList.remove('hidden');
                } else {
                    checkboxVisual.classList.remove('border-primary', 'bg-primary');
                    checkboxVisual.classList.add('border-gray-300');
                    checkIcon.classList.add('hidden');
                }
            });
        });
    </script>
    
    <script id="form-submission">
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('login-form');
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');
            const alertMessage = document.getElementById('alert-message');
            
            function showAlert(message, isSuccess) {
                alertMessage.textContent = message;
                alertMessage.classList.remove('hidden', 'bg-red-100', 'text-red-700', 'bg-green-100', 'text-green-700');
                
                if (isSuccess) {
                    alertMessage.classList.add('bg-green-100', 'text-green-700');
                } else {
                    alertMessage.classList.add('bg-red-100', 'text-red-700');
                }
                
                // Scroll to alert
                alertMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
            }
            
            form.addEventListener('submit', function (e) {
                e.preventDefault();
                let isValid = true;
                
                // Reset field styles
                [emailInput, passwordInput].forEach(input => {
                    input.classList.remove('border-red-500', 'focus:ring-red-500');
                    input.classList.add('border-gray-300', 'focus:ring-primary');
                });
                
                if (!emailInput.value || !emailInput.value.includes('@')) {
                    emailInput.classList.add('border-red-500', 'focus:ring-red-500');
                    emailInput.classList.remove('border-gray-300', 'focus:ring-primary');
                    isValid = false;
                    showAlert('Please enter a valid email address', false);
                    return;
                }
                
                if (!passwordInput.value || passwordInput.value.length < 6) {
                    passwordInput.classList.add('border-red-500', 'focus:ring-red-500');
                    passwordInput.classList.remove('border-gray-300', 'focus:ring-primary');
                    isValid = false;
                    showAlert('Password must be at least 6 characters long', false);
                    return;
                }
                
                if (isValid) {
                    const submitButton = form.querySelector('button[type="submit"]');
                    const originalText = submitButton.textContent;
                    submitButton.textContent = 'Signing In...';
                    submitButton.disabled = true;
                    
                    // Create FormData object
                    const formData = new FormData(form);
                    
                    // Send AJAX request
                    fetch('authenticate.php', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            showAlert(data.message, true);
                            
                            // Redirect after 1.5 seconds
                            setTimeout(() => {
                                window.location.href = data.redirect;
                            }, 1500);
                        } else {
                            showAlert(data.message, false);
                            submitButton.textContent = originalText;
                            submitButton.disabled = false;
                        }
                    })
                    .catch(error => {
                        showAlert('An error occurred. Please try again.', false);
                        console.error('Error:', error);
                        submitButton.textContent = originalText;
                        submitButton.disabled = false;
                    });
                }
            });
        });
    </script>
</body>

</html>
