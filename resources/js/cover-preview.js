// Add a cover
const coverElementFile = document.getElementById('cover-file');
const coverElementUrl = document.getElementById('cover-url');
const coverPreviewElement = document.getElementById('cover-preview');

coverElementFile.addEventListener('change', function(){
  const coverInput = document.getElementById("cover-file").files;
  console.log(coverInput);
  
  if (coverInput) {
    const fileReader = new FileReader();
    fileReader.onload = function (event) {
      document.getElementById('cover-preview').setAttribute('src', event.target.result);
    };

    fileReader.readAsDataURL(coverInput[0]);
  }
});

coverElementUrl.addEventListener('change', function(){
  const coverInput = document.getElementById("cover-url").value;
  console.log(coverInput);

  if(coverInput) {
    const url = this.value;
    if(url) {
      coverPreviewElement.setAttribute('src', url);
    }
    else {
      coverPreviewElement.setAttribute('src', 'https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg');
    }
  }
});