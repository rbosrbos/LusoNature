document.getElementById('avatar').addEventListener('change', () => {
    document.getElementById('loader').classList.remove('hidden');
    document.getElementById('avatar').addEventListener('click', (e) => e.preventDefault());
    document.getElementById('avatar_form').submit();
});
if (document.getElementById('delete_avatar')) {
document.getElementById('delete_avatar').addEventListener('click', (e) => {
    console.log(e)
    e.preventDefault();
    e.target.parentElement.submit();
});
}
