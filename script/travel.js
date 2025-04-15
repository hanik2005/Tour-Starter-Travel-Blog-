document.getElementById('signup-btn').addEventListener('click', function () {
    document.getElementById('signup-form-container').classList.add('active');
});

document.getElementById('close-form').addEventListener('click', function () {
    document.getElementById('signup-form-container').classList.remove('active');
});