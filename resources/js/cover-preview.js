const coverPreview = document.getElementById('cover-preview');
const coverPlaceholder = 'https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg';
const coverInput = document.getElementById('cover');

coverInput.addEventListener('change', function(){
  const uploadedCover = this.value;
  if (uploadedCover) {
    coverPreview.setAttribute('src', uploadedCover);
  }
  else {
    coverPreview.setAttribute('src', coverPlaceholder);
  }
});