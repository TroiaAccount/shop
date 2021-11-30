function hideLoader() {
   let loaderWrapper = document.querySelector('.loader-wrapper');
   loaderWrapper.classList.toggle('show');
   loaderWrapper.classList.toggle('hide');
   loaderWrapper.classList.remove('position-fixed');
}
function showLoader() {
   let loaderWrapper = document.querySelector('.loader-wrapper');
   loaderWrapper.style.position = '';
   loaderWrapper.classList.toggle('hide');
   loaderWrapper.classList.toggle('show');
   loaderWrapper.classList.add('position-fixed');
}