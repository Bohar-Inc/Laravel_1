<div class="relative border-2 border-gray-100 m-4 rounded-lg">
        <div class="absolute top-4 left-3">
            <i class="fa fa-search text-gray-400 z-20 hover:text-gray-500"></i>
        </div>
        <input id="search_name" type="text" name="searchto" class="h-14 w-full pl-10 pr-20 rounded-lg z-0 focus:shadow focus:outline-none" placeholder="Search Laravel Gigs..."/>
        <div class="absolute top-2 right-2">
            <button id="search_bar" type="submit"  class="h-10 w-20 text-white rounded-lg bg-red-500 hover:bg-red-600">
                Search
            </button>
        </div>
    </div>


<script>

    $(document).ready(function() {
        $("#search_name").keyup(function() {
            data_new= document.getElementById("search_name");
            console.log(data_new.value);
            $("#listings_show").empty();

            $.ajax({
                url: '/search?search='+data_new.value, // The route we defined in the backend
                method: 'GET',
                success: function (data) {
                    console.log(data); // Log the data to check the response structure
                    // Loop through the data and append HTML for each listing
                    data.results.forEach(function (listing) {
                        // Construct the HTML for each listing
                        var listingHtml = `
                            <div class="flex mb-6">
                                <img class="hidden w-48 mr-6 md:block"
                                     src="${listing.logo ? '/storage/' + listing.logo : '/images/lara.png'}"
                                     alt="Logo"/>
                                <div>
                                    <h3 class="text-2xl">
                                        <a href="/listings/${listing.id}" class="text-blue-600 hover:underline">${listing.title}</a>
                                    </h3>
                                    <div class="text-xl font-bold mb-4">${listing.company}</div>
                                    <div class="tags">
                                        ${listing.tags }
                                    </div>
                                    <div class="text-lg mt-4 text-gray-700">
                                        <i class="fa-solid fa-location-dot"></i> ${listing.location}
                                    </div>
                                </div>
                            </div>
                          `;

                        // Append the constructed HTML to the #listings_show container
                        $('#listings_show').append(listingHtml);
                    });
                },
                error: function () {
                    alert('Error fetching listings');
                }
            });
        });
        // Bind click event to the search bar (change to `click` instead of `onclick`)
                $.ajax({
                    url: '/get_records', // The route we defined in the backend
                    method: 'GET',
                    success: function (data) {
                        console.log(data); // Log the data to check the response structure

                        // Clear the existing listings before appending new ones


                        // Loop through the data and append HTML for each listing
                        data.forEach(function (listing) {
                            // Construct the HTML for each listing
                            var listingHtml = `
                            <div class="flex mb-6">
                                <img class="hidden w-48 mr-6 md:block"
                                     src="${listing.logo ? '/storage/' + listing.logo : '/images/lara.png'}"
                                     alt="Logo"/>
                                <div>
                                    <h3 class="text-2xl">
                                        <a href="/listings/${listing.id}" class="text-blue-600 hover:underline">${listing.title}</a>
                                    </h3>
                                    <div class="text-xl font-bold mb-4">${listing.company}</div>
                                    <div class="tags">
                                        ${listing.tags }
                                    </div>
                                    <div class="text-lg mt-4 text-gray-700">
                                        <i class="fa-solid fa-location-dot"></i> ${listing.location}
                                    </div>
                                </div>
                            </div>
                          `;

                            // Append the constructed HTML to the #listings_show container
                             $('#listings_show').append(listingHtml);
                        });
                    },
                    error: function () {
                        alert('Error fetching listings');
                    }
                });

    });
</script>


