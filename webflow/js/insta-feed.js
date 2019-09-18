$.ajax({
    url: 'https://api.instagram.com/v1/users/self/media/recent',
    dataType: 'jsonp',
    type: 'GET',
    data: {
        access_token: token,
        count: num_photos
    },
    success: function(data) {
        console.log(data);
        for (x in data.data) {
            $('.instagram-feed').append('<a style="width: 100%;" href="' + data.data[x].link + '"><div class="instagram-feed-photo" style="background-image: url(' + data.data[x].images.standard_resolution.url + ');"></div></a>');
        }
    },
    error: function(data) {
        console.log(data);
    }
});	