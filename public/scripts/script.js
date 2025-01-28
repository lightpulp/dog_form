$(document).ready(function () {
  console.log("ready!");

  // Fetch breeds and populate the dropdown
  $.ajax({
      url: '/get_breeds',
      type: 'GET',
      success: function (response) {
          if (response.breeds) {
              const breedDropdown = $('#breed-dropdown');
              $.each(response.breeds, function (breed, subBreeds) {
                  if (subBreeds.length > 0) {
                      $.each(subBreeds, function (index, subBreed) {
                          breedDropdown.append(
                              $('<option>')
                                  .val(`${breed}/${subBreed}`)
                                  .text(`${breed} (${subBreed})`)
                          );
                      });
                  } else {
                      breedDropdown.append(
                          $('<option>')
                              .val(breed)
                              .text(breed)
                      );
                  }
              });
          } else {
              console.error('Failed to fetch breeds:', response.error);
          }
      },
      error: function (xhr) {
          console.error('Error fetching breeds:', xhr.responseText);
      }
  });

  $('.generate-dog').click(() => {
      const selectedBreed = $('#breed-dropdown').val();
      $.ajax({
          url: '/fetch_dog',
          type: 'GET',
          data: { breed: selectedBreed }, 
          success: function (response) {
              if (response.image_url) {
                  $('#image-container').html('');
                  const imgElement = $('<img>')
                      .attr('src', response.image_url)
                      .attr('alt', selectedBreed || 'Random Dog');
                  $('#image-container').append(imgElement);
              } else {
                  console.error('Failed to fetch image:', response.error);
              }
              console.log(response);
          },
          error: function (xhr) {
              console.error('Error:', xhr.responseText);
          }
      });
  });
});
