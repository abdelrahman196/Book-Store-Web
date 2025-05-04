document.getElementById("logo").addEventListener("click",function(){
    window.location.href="home page url";});


document.querySelector('.signout-btn').addEventListener('click', () => {
    alert('Signed out successfully!');
});

document.querySelector('.delete-btn').addEventListener('click', () => {
    if (confirm('Are you sure you want to delete your account?')) {
    alert('Account deleted.');
        // actual deletion logic here
    }
});

document.querySelector('.history-btn').addEventListener('click', () => {
    const container = document.querySelector('.history-table-container');
    container.style.display = container.style.display === 'none' ? 'block' : 'none';
});

document.getElementById('menu-toggle').addEventListener('click', function () {
    const sidebar = document.getElementById('sidebar');
    sidebar.style.left = sidebar.style.left === '0px' ? '-220px' : '0px';
});
