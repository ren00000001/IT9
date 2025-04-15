function toggleDropDown(event){
    event.preventDefault();
    const dropdown = event.target.closest('.dropdown');
    dropdown.classList.toggle('active');

    document.querySelectorAll('.dropdown').forEach(otherDropdown=> {
        if(otherDropdown !== dropdown){
            otherDropdown.classList.remove('active');
        }
    });
}

document.addEventListener('click', function(event){
    if(!event.target.closest('.dropdown')){
        document.querySelectorAll('.dropdown').forEach(dropdown => {
            dropdown.classList.remove('active');
        });
    }
});