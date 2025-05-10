document.getElementById("logo").addEventListener("click",function(){
    window.location.href="./file.html";});


document.querySelector('.signout-btn').addEventListener('click', () => {
    alert('Signed out successfully!');
});

document.querySelector('.delete-btn').addEventListener('click', () => {
    if (confirm('Are you sure you want to delete your account?')) {
    alert('Account deleted.');
    }
});

document.querySelector('.history-btn').addEventListener('click', () => {
    const container = document.querySelector('.history-table-container');
    container.style.display = container.style.display === 'none' ? 'block' : 'none';
});
