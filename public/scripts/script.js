$( document ).ready(function() {
    console.log( "ready!" );

    $('.generate-dog').click(() => {
        $.ajax({
          url: '/fetch_dog', // URL of the Laravel endpoint
          type: 'GET',
          success: function(response) {
            if (response.image_url) {
                // Clear previous images
                $('#image-container').html('');

                // Create a new img element with the fetched URL
                const imgElement = $('<img>').attr('src', response.image_url).attr('alt', 'Random Dog');

                // Append the img element to the container
                $('#image-container').append(imgElement);
            } else {
                console.error('Failed to fetch image:', response.error);
            }

            console.log(response);

          },
          error: function(xhr) {
            console.error('Error:', xhr.responseText);
          }
        });
      });

});