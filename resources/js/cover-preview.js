// Add a cover
const coverElement = document.getElementById('cover');
const coverPreviewElement = document.getElementById('cover-preview');

coverElement.addEventListener('change', function(){
  const coverInput = document.getElementById("cover").files;
  
  if (coverInput) {
    const fileReader = new FileReader();
    fileReader.onload = function (event) {
      document.getElementById('cover-preview').setAttribute('src', event.target.result);
    };

    fileReader.readAsDataURL(coverInput[0]);
  }
  else {
    const url = this.value;
    if(url) {
      coverPreviewElement.setAttribute('src', url);
    }
    else {
      coverPreviewElement.setAttribute('src', 'https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg');
    }
  }
});