function hideLoader(loaderWrapper) {
   loaderWrapper.classList.toggle('show');
   loaderWrapper.classList.toggle('hide');
   loaderWrapper.style.position = 'fixed';
}
function showLoader(loaderWrapper) {
   loaderWrapper.style.position = '';
   loaderWrapper.classList.toggle('hide');
   loaderWrapper.classList.toggle('show');
}