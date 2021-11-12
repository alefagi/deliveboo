// Add a cover
const coverElement = document.getElementById('cover');

coverElement.addEventListener('change', function(){
  const coverInput = document.getElementById("cover").files;

  if (coverInput.length) {
    const fileReader = new FileReader();

    fileReader.onload = function (event) {
      document.getElementById('cover-preview').setAttribute('src', event.target.result);
    };

    fileReader.readAsDataURL(coverInput[0]);
  }
});