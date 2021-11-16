// Add a cover
const coverElementFile = document.getElementById('cover-file');
const coverElementUrl = document.getElementById('cover-url');
const coverPreviewElement = document.getElementById('cover-preview');

coverElementFile.addEventListener('change', function(){
  const coverInput = coverElementFile.files;
  
  if(coverInput) {
    const fileReader = new FileReader();
    fileReader.onload = function (event) {
      coverPreviewElement.setAttribute('src', event.target.result);
    };

    fileReader.readAsDataURL(coverInput[0]);
  }
  console.log(coverInput);

});

coverElementUrl.addEventListener('change', function(){
  const coverInput = coverElementUrl.value;
  
  if(coverInput) {
    const url = this.value;
    if(url) {
      coverPreviewElement.setAttribute('src', url);
      console.log(url);
    }
    else {
      coverPreviewElement.setAttribute('src', 'https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg');
      console.log('prova');
    }
  }
});